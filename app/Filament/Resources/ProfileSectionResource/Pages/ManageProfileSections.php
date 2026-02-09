<?php

namespace App\Filament\Resources\ProfileSectionResource\Pages;

use App\Filament\Resources\ProfileSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageProfileSections extends ManageRecords
{
    protected static string $resource = ProfileSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}