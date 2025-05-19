<?php

namespace App\Filament\Admin\Resources\MatakuliahResource\Pages;

use App\Filament\Admin\Resources\MatakuliahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMatakuliahs extends ListRecords
{
    protected static string $resource = MatakuliahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
