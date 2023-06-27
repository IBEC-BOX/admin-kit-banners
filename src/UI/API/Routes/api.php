<?php

use Illuminate\Support\Facades\Route;
use AdminKit\Banners\UI\API\Controllers\BannerController;

Route::get('/banners', [BannerController::class, 'index']);
Route::get('/banners/{id}', [BannerController::class, 'show']);
