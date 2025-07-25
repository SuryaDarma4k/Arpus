<?php

namespace App\Filament\Resources\VisitorByBookTypeResource\Pages;

use App\Filament\Resources\VisitorByBookTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVisitorByBookType extends EditRecord
{
    protected static string $resource = VisitorByBookTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
