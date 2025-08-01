<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function getMenu($location = 'main')
    {
        $menu = Menu::where('location', $location)
            ->where('is_active', true)
            ->with('items.page')
            ->first();

        return $menu ? $menu->items()->orderBy('sort_order')->get() : collect();
    }
}
