<?php

namespace AdminKit\Banners\UI\Filament\Resources\BannerResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use AdminKit\Banners\UI\Filament\Resources\BannerResource;

class ListBanner extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = BannerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
