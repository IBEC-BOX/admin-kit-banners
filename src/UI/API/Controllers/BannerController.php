<?php

declare(strict_types=1);

namespace AdminKit\Banners\UI\API\Controllers;

use AdminKit\Banners\Models\Banner;

class BannerController extends Controller
{
    public function index()
    {
        return Banner::all();
    }

    public function show(int $id)
    {
        return Banner::findOrFail($id);
    }
}
