<?php

namespace App\Filament\Resources\DirectVisitorResource\Pages;

use App\Filament\Resources\DirectVisitorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDirectVisitor extends EditRecord
{
    protected static string $resource = DirectVisitorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
