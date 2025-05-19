<?php

namespace App\Filament\Admin\Resources\MatakuliahResource\Pages;

use App\Filament\Admin\Resources\MatakuliahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMatakuliah extends EditRecord
{
    protected static string $resource = MatakuliahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
