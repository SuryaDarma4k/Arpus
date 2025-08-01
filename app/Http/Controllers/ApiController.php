<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getPageData($slug)
    {
        $page = Page::where('slug', $slug)
            ->where('is_published', true)
            ->with('components')
            ->first();

        return response()->json($page);
    }

    public function getSiteSettings()
    {
        $settings = SiteSetting::pluck('value', 'key');
        return response()->json($settings);
    }
}
