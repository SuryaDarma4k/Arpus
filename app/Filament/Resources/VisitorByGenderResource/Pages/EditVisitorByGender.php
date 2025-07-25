<?php

namespace App\Filament\Resources\VisitorByGenderResource\Pages;

use App\Filament\Resources\VisitorByGenderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVisitorByGender extends EditRecord
{
    protected static string $resource = VisitorByGenderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
