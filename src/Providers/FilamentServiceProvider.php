<?php

declare(strict_types=1);

namespace AdminKit\Banners\Providers;

use Filament\PluginServiceProvider;
use AdminKit\Banners\UI\Filament\Resources\BannerResource;

class FilamentServiceProvider extends PluginServiceProvider
{
    public static string $name = 'banners';

    protected array $resources = [
        BannerResource::class,
    ];
}
