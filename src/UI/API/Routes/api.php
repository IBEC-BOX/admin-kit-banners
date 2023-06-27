<?php

use AdminKit\Banners\UI\API\Controllers\BannerController;
use Illuminate\Support\Facades\Route;

Route::get('/banners', [BannerController::class, 'index']);
Route::get('/banners/{id}', [BannerController::class, 'show']);
