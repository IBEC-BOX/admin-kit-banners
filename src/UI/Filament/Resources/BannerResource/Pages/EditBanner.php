<?php

namespace AdminKit\Banners\UI\Filament\Resources\BannerResource\Pages;

use AdminKit\Banners\UI\Filament\Resources\BannerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBanner extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = BannerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
