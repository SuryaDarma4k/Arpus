<?php

namespace App\Filament\Resources\MenuResource\Pages;

use App\Filament\Resources\MenuResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListMenus extends ListRecords
{
    protected static string $resource = MenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All Menus'),
            'main' => Tab::make('Main Menu')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('menu_location', 'main')),
            'footer' => Tab::make('Footer Menu')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('menu_location', 'footer')),
            'sidebar' => Tab::make('Sidebar Menu')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('menu_location', 'sidebar')),
            'header' => Tab::make('Header Menu')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('menu_location', 'header')),
        ];
    }
}
