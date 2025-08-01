<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getSetting($key, $default = null)
    {
        $setting = SiteSetting::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    public function getAllSettings()
    {
        return SiteSetting::pluck('value', 'key');
    }
}
