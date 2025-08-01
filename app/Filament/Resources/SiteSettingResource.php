<?php
// app/Filament/Resources/SiteSettingResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteSettingResource\Pages;
use App\Models\SiteSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class SiteSettingResource extends Resource
{
    protected static ?string $model = SiteSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationGroup = 'CMS Management';

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationLabel = 'Site Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Setting Details')
                    ->schema([
                        Forms\Components\TextInput::make('key')
                            ->required()
                            ->unique(SiteSetting::class, 'key', ignoreRecord: true)
                            ->rules(['alpha_dash'])
                            ->helperText('Unique identifier for this setting')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('label')
                            ->required()
                            ->maxLength(255)
                            ->helperText('Human-readable label for this setting'),

                        Forms\Components\Select::make('group')
                            ->options([
                                'general' => 'General',
                                'appearance' => 'Appearance',
                                'seo' => 'SEO',
                                'social' => 'Social Media',
                                'contact' => 'Contact Information',
                                'analytics' => 'Analytics',
                                'email' => 'Email Settings',
                                'api' => 'API Settings',
                            ])
                            ->required()
                            ->default('general')
                            ->searchable(),

                        Forms\Components\Select::make('type')
                            ->options([
                                'text' => 'Text',
                                'textarea' => 'Textarea',
                                'number' => 'Number',
                                'boolean' => 'Boolean',
                                'json' => 'JSON',
                                'image' => 'Image',
                                'file' => 'File',
                            ])
                            ->required()
                            ->default('text')
                            ->live()
                            ->afterStateUpdated(fn(Forms\Set $set) => $set('value', null)),
                    ])->columns(2),

                Forms\Components\Section::make('Setting Value')
                    ->schema([
                        self::getValueField(),

                        Forms\Components\Textarea::make('description')
                            ->maxLength(500)
                            ->rows(3)
                            ->helperText('Optional description to help administrators understand this setting'),
                    ]),
            ]);
    }

    public static function getValueField(): Forms\Components\Component
    {
        return Forms\Components\Group::make()
            ->schema([
                Forms\Components\TextInput::make('value')
                    ->label('Value')
                    ->visible(
                        fn(Forms\Get $get): bool =>
                        in_array($get('type'), ['text', 'number'])
                    )
                    ->numeric(fn(Forms\Get $get): bool => $get('type') === 'number'),

                Forms\Components\Textarea::make('value')
                    ->label('Value')
                    ->visible(fn(Forms\Get $get): bool => $get('type') === 'textarea')
                    ->rows(4),

                Forms\Components\Toggle::make('value')
                    ->label('Value')
                    ->visible(fn(Forms\Get $get): bool => $get('type') === 'boolean'),

                Forms\Components\KeyValue::make('value')
                    ->label('JSON Value')
                    ->visible(fn(Forms\Get $get): bool => $get('type') === 'json')
                    ->keyLabel('Key')
                    ->valueLabel('Value')
                    ->reorderable(),

                Forms\Components\FileUpload::make('value')
                    ->label('Image')
                    ->visible(fn(Forms\Get $get): bool => $get('type') === 'image')
                    ->image()
                    ->imageEditor()
                    ->directory('site-settings/images'),

                Forms\Components\FileUpload::make('value')
                    ->label('File')
                    ->visible(fn(Forms\Get $get): bool => $get('type') === 'file')
                    ->directory('site-settings/files'),
            ])
            ->columnSpanFull();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('label')
                    ->searchable()
                    ->sortable()
                    ->description(fn(SiteSetting $record): string => $record->key),

                Tables\Columns\TextColumn::make('group')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'general' => 'gray',
                        'appearance' => 'info',
                        'seo' => 'success',
                        'social' => 'warning',
                        'contact' => 'danger',
                        default => 'gray',
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->color('secondary'),

                Tables\Columns\TextColumn::make('value')
                    ->formatStateUsing(function ($state, SiteSetting $record) {
                        return match ($record->type) {
                            'boolean' => $state ? 'Yes' : 'No',
                            'json' => 'JSON Data',
                            'image', 'file' => $state ? 'File Uploaded' : 'No File',
                            'textarea' => Str::limit($state, 50),
                            default => Str::limit($state, 50),
                        };
                    })
                    ->limit(50),

                Tables\Columns\TextColumn::make('description')
                    ->limit(30)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        return strlen($state) > 30 ? $state : null;
                    })
                    ->toggleable(),

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
                Tables\Filters\SelectFilter::make('group')
                    ->options([
                        'general' => 'General',
                        'appearance' => 'Appearance',
                        'seo' => 'SEO',
                        'social' => 'Social Media',
                        'contact' => 'Contact Information',
                        'analytics' => 'Analytics',
                        'email' => 'Email Settings',
                        'api' => 'API Settings',
                    ]),

                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'text' => 'Text',
                        'textarea' => 'Textarea',
                        'number' => 'Number',
                        'boolean' => 'Boolean',
                        'json' => 'JSON',
                        'image' => 'Image',
                        'file' => 'File',
                    ]),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->groups([
                Tables\Grouping\Group::make('group')
                    ->label('Group')
                    ->collapsible(),
            ])
            ->defaultGroup('group')
            ->defaultSort('group');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiteSettings::route('/'),
            'create' => Pages\CreateSiteSetting::route('/create'),
            // 'view' => Pages\ViewSiteSetting::route('/{record}'),
            'edit' => Pages\EditSiteSetting::route('/{record}/edit'),
        ];
    }
}
