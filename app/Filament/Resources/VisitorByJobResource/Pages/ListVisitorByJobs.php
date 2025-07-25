<?php

namespace App\Filament\Resources\VisitorByJobResource\Pages;

use App\Filament\Resources\VisitorByJobResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisitorByJobs extends ListRecords
{
    protected static string $resource = VisitorByJobResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
