<?php

namespace App\Filament\Resources\VisitorByGenderResource\Pages;

use App\Filament\Resources\VisitorByGenderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisitorByGenders extends ListRecords
{
    protected static string $resource = VisitorByGenderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
