<?php

namespace AdminKit\Banners\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\Banners\Banners
 */
class Banners extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\Banners\Banners::class;
    }
}
