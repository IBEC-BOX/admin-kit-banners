<?php

namespace AdminKit\Banners\UI\Filament\Resources\BannerResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use AdminKit\Banners\UI\Filament\Resources\BannerResource;

class CreateBanner extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = BannerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
