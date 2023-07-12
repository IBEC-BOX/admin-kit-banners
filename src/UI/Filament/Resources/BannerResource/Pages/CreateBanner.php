<?php

namespace AdminKit\Banners\UI\Filament\Resources\BannerResource\Pages;

use AdminKit\Banners\UI\Filament\Resources\BannerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

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

    protected function getRedirectUrl(): string
    {
        return BannerResource::getUrl();
    }
}
