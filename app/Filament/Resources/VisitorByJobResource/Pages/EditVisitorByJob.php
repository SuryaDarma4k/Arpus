<?php

namespace App\Filament\Resources\VisitorByJobResource\Pages;

use App\Filament\Resources\VisitorByJobResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVisitorByJob extends EditRecord
{
    protected static string $resource = VisitorByJobResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
