<?php

namespace AdminKit\Banners;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AdminKit\Banners\Commands\BannersCommand;
use AdminKit\Banners\Providers\FilamentServiceProvider;
use AdminKit\Banners\Providers\RouteServiceProvider;

class BannersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-kit-banners')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_admin_kit_banners_table')
            ->hasCommand(BannersCommand::class);
    }

    public function registeringPackage()
    {
        $this->app->register(FilamentServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}
