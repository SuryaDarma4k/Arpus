<?php

namespace App\Filament\Resources\MembershipRegistrationResource\Pages;

use App\Filament\Resources\MembershipRegistrationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMembershipRegistration extends EditRecord
{
    protected static string $resource = MembershipRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
