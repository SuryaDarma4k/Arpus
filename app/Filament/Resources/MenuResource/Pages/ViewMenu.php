<?php

namespace App\Filament\Resources\MenuResource\Pages;

use App\Filament\Resources\MenuResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists;
use Filament\Infolists\Infolist;

class ViewMenu extends ViewRecord
{
    protected static string $resource = MenuResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make('Menu Information')
                    ->schema([
                        Infolists\Components\TextEntry::make('title')
                            ->label('Title'),

                        Infolists\Components\TextEntry::make('menu_location')
                            ->label('Location')
                            ->badge()
                            ->color(fn(string $state): string => match ($state) {
                                'main' => 'success',
                                'footer' => 'warning',
                                'sidebar' => 'info',
                                'header' => 'danger',
                                default => 'gray',
                            }),

                        Infolists\Components\TextEntry::make('parent.title')
                            ->label('Parent Menu')
                            ->placeholder('Root Level'),

                        Infolists\Components\TextEntry::make('sort_order')
                            ->label('Sort Order'),
                    ])
                    ->columns(2),

                Infolists\Components\Section::make('Link Configuration')
                    ->schema([
                        Infolists\Components\TextEntry::make('page.title')
                            ->label('Linked Page')
                            ->placeholder('No page linked'),

                        Infolists\Components\TextEntry::make('url')
                            ->label('Custom URL')
                            ->placeholder('No custom URL'),

                        Infolists\Components\TextEntry::make('final_url')
                            ->label('Final URL')
                            ->copyable(),

                        Infolists\Components\TextEntry::make('target')
                            ->label('Link Target'),

                        Infolists\Components\TextEntry::make('icon')
                            ->label('Icon Class')
                            ->placeholder('No icon'),
                    ])
                    ->columns(2),

                Infolists\Components\Section::make('Status & Children')
                    ->schema([
                        Infolists\Components\IconEntry::make('is_active')
                            ->label('Active')
                            ->boolean(),

                        Infolists\Components\TextEntry::make('children_count')
                            ->label('Sub Menus')
                            ->state(fn($record) => $record->children()->count())
                            ->badge()
                            ->color('primary'),
                    ])
                    ->columns(2),

                Infolists\Components\Section::make('Timestamps')
                    ->schema([
                        Infolists\Components\TextEntry::make('created_at')
                            ->label('Created At')
                            ->dateTime(),

                        Infolists\Components\TextEntry::make('updated_at')
                            ->label('Updated At')
                            ->dateTime(),
                    ])
                    ->columns(2)
                    ->collapsible(),
            ]);
    }
}
