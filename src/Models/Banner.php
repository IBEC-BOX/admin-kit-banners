<?php

namespace AdminKit\Banners\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use AdminKit\Banners\Database\Factories\BannerFactory;

class Banner extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_banners';

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): BannerFactory
    {
        return new BannerFactory();
    }
}
