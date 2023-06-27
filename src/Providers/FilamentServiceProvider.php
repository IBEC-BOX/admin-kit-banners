<?php

declare(strict_types=1);

namespace AdminKit\Banners\Providers;

use AdminKit\Banners\UI\Filament\Resources\BannerResource;
use Filament\PluginServiceProvider;

class FilamentServiceProvider extends PluginServiceProvider
{
    public static string $name = 'banners';

    protected array $resources = [
        BannerResource::class,
    ];
}
