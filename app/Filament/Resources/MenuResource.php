<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Models\Menu;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;
    protected static ?string $navigationIcon = 'heroicon-o-bars-3';
    protected static ?string $navigationLabel = 'Menu Management';
    protected static ?string $modelLabel = 'Menu';
    protected static ?string $navigationGroup = 'CMS Management';
    protected static ?int $navigationSort = 5;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Menu Information')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Forms\Components\Select::make('menu_location')
                            ->label('Menu Location')
                            ->options([
                                'main' => 'Main Menu',
                                'footer' => 'Footer Menu',
                                'sidebar' => 'Sidebar Menu',
                                'header' => 'Header Menu',
                            ])
                            ->required()
                            ->default('main'),

                        Forms\Components\Select::make('parent_id')
                            ->label('Parent Menu')
                            ->relationship(
                                name: 'parent',
                                titleAttribute: 'title',
                                modifyQueryUsing: fn(Builder $query) => $query->rootLevel()
                            )
                            ->searchable()
                            ->preload()
                            ->placeholder('Select parent menu (optional)'),

                        Forms\Components\TextInput::make('sort_order')
                            ->label('Sort Order')
                            ->numeric()
                            ->default(0)
                            ->step(1),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Link Configuration')
                    ->schema([
                        Forms\Components\Select::make('page_id')
                            ->label('Link to Page')
                            ->relationship('page', 'title')
                            ->searchable()
                            ->preload()
                            ->placeholder('Select a page (optional)')
                            ->helperText('If selected, this will override the custom URL'),

                        Forms\Components\TextInput::make('url')
                            ->label('Custom URL')
                            ->url()
                            ->placeholder('https://example.com or /custom-path')
                            ->helperText('Only used if no page is selected'),

                        Forms\Components\Select::make('target')
                            ->label('Link Target')
                            ->options([
                                '_self' => 'Same Window',
                                '_blank' => 'New Window',
                                '_parent' => 'Parent Frame',
                                '_top' => 'Top Frame',
                            ])
                            ->default('_self'),

                        Forms\Components\TextInput::make('icon')
                            ->label('Icon Class')
                            ->placeholder('heroicon-o-home')
                            ->helperText('CSS class for icon (e.g., Heroicons, FontAwesome)'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Status')
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Inactive menus will not be displayed'),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable()
                    ->weight('medium'),

                Tables\Columns\TextColumn::make('menu_location')
                    ->label('Location')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'main' => 'success',
                        'footer' => 'warning',
                        'sidebar' => 'info',
                        'header' => 'danger',
                        default => 'gray',
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('parent.title')
                    ->label('Parent')
                    ->placeholder('Root Level')
                    ->sortable(),

                Tables\Columns\TextColumn::make('page.title')
                    ->label('Linked Page')
                    ->placeholder('Custom URL')
                    ->limit(30),

                Tables\Columns\TextColumn::make('final_url')
                    ->label('URL')
                    ->limit(40)
                    ->tooltip(function (Menu $record): ?string {
                        return $record->final_url;
                    }),

                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable()
                    ->alignCenter(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->alignCenter(),

                Tables\Columns\TextColumn::make('children_count')
                    ->label('Sub Menus')
                    ->counts('children')
                    ->alignCenter()
                    ->badge()
                    ->color('primary'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('menu_location')
                    ->label('Location')
                    ->options([
                        'main' => 'Main Menu',
                        'footer' => 'Footer Menu',
                        'sidebar' => 'Sidebar Menu',
                        'header' => 'Header Menu',
                    ]),

                Tables\Filters\SelectFilter::make('parent_id')
                    ->label('Parent Menu')
                    ->relationship('parent', 'title')
                    ->placeholder('All Levels'),

                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status')
                    ->placeholder('All menus')
                    ->trueLabel('Active only')
                    ->falseLabel('Inactive only'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->before(function (Menu $record) {
                        // Delete all children before deleting parent
                        $record->children()->delete();
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->before(function ($records) {
                            // Delete all children of selected records
                            foreach ($records as $record) {
                                $record->children()->delete();
                            }
                        }),

                    Tables\Actions\BulkAction::make('activate')
                        ->label('Activate Selected')
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->action(fn($records) => $records->each->update(['is_active' => true]))
                        ->deselectRecordsAfterCompletion(),

                    Tables\Actions\BulkAction::make('deactivate')
                        ->label('Deactivate Selected')
                        ->icon('heroicon-o-x-circle')
                        ->color('danger')
                        ->action(fn($records) => $records->each->update(['is_active' => false]))
                        ->deselectRecordsAfterCompletion(),
                ]),
            ])
            ->defaultSort('menu_location')
            ->defaultSort('sort_order');
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
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            // 'view' => Pages\ViewMenu::route('/{record}'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getGlobalSearchEloquentQuery(): Builder
    {
        return parent::getGlobalSearchEloquentQuery()->with(['page', 'parent']);
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'url', 'page.title'];
    }
}
