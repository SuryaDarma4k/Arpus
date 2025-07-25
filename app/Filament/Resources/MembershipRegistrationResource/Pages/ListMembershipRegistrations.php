<?php

namespace App\Filament\Resources\MembershipRegistrationResource\Pages;

use App\Filament\Resources\MembershipRegistrationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMembershipRegistrations extends ListRecords
{
    protected static string $resource = MembershipRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
