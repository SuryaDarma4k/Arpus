<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageComponentResource\Pages;
use App\Filament\Resources\PageComponentResource\RelationManagers;
use App\Models\PageComponents;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageComponentResource extends Resource
{
    protected static ?string $model = PageComponents::class;
    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?string $navigationGroup = 'CMS Management';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationLabel = 'Page Components';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Component Details')
                    ->schema([
                        Forms\Components\Select::make('page_id')
                            ->label('Page')
                            ->relationship('page', 'title')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Forms\Components\Select::make('component_type')
                            ->label('Component Type')
                            ->options(PageComponents::getAvailableTypes())
                            ->required()
                            ->live()
                            ->afterStateUpdated(fn(Forms\Set $set) => $set('component_data', [])),

                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0)
                            ->required(),

                        Forms\Components\Toggle::make('is_active')
                            ->default(true),
                    ])->columns(2),

                Forms\Components\Section::make('Component Configuration')
                    ->schema([
                        self::getComponentDataFields(),
                    ]),
            ]);
    }

    public static function getComponentDataFields(): Forms\Components\Component
    {
        return Forms\Components\KeyValue::make('component_data')
            ->label('Component Data')
            ->keyLabel('Property')
            ->valueLabel('Value')
            ->reorderable()
            ->addActionLabel('Add Property')
            ->helperText('Configure component-specific data. Each component type may require different properties.')
            ->columnSpanFull();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page.title')
                    ->label('Page')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('component_type')
                    ->label('Type')
                    ->badge()
                    ->formatStateUsing(
                        fn(string $state): string =>
                        PageComponents::getAvailableTypes()[$state] ?? $state
                    )
                    ->color(fn(string $state): string => match ($state) {
                        'hero' => 'success',
                        'stats' => 'info',
                        'services' => 'warning',
                        'charts' => 'danger',
                        default => 'gray',
                    }),

                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable()
                    ->label('Order'),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),

                Tables\Columns\TextColumn::make('component_data')
                    ->label('Data Properties')
                    ->formatStateUsing(function ($state) {
                        if (!is_array($state)) return '—';
                        return collect($state)->keys()->implode(', ');
                    })
                    ->limit(30),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('page_id')
                    ->label('Page')
                    ->relationship('page', 'title')
                    ->preload(),

                Tables\Filters\SelectFilter::make('component_type')
                    ->label('Component Type')
                    ->options(PageComponents::getAvailableTypes()),

                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status'),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ReplicateAction::make()
                        ->beforeReplicaSaved(function (PageComponents $replica): void {
                            $replica->sort_order = PageComponents::where('page_id', $replica->page_id)->max('sort_order') + 1;
                        }),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('activate')
                        ->label('Activate Selected')
                        ->icon('heroicon-o-check-circle')
                        ->action(fn($records) => $records->each->update(['is_active' => true])),
                    Tables\Actions\BulkAction::make('deactivate')
                        ->label('Deactivate Selected')
                        ->icon('heroicon-o-x-circle')
                        ->action(fn($records) => $records->each->update(['is_active' => false])),
                ]),
            ])
            ->defaultSort('page_id')
            ->reorderable('sort_order')
            ->paginationPageOptions([10, 25, 50, 100]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPageComponents::route('/'),
            'create' => Pages\CreatePageComponent::route('/create'),
            // 'view' => Pages\ViewPageComponent::route('/{record}'),
            'edit' => Pages\EditPageComponent::route('/{record}/edit'),
        ];
    }
}
