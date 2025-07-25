<?php

namespace App\Filament\Resources\VisitorByBookTypeResource\Pages;

use App\Filament\Resources\VisitorByBookTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisitorByBookTypes extends ListRecords
{
    protected static string $resource = VisitorByBookTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
