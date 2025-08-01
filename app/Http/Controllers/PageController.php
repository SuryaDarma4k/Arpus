<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageComponent;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)
            ->where('is_published', true)
            ->with('components')
            ->firstOrFail();

        // Load komponen-komponen halaman
        $components = $page->components()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('frontend.page', compact('page', 'components'));
    }

    public function home()
    {
        // Halaman beranda - bisa menggunakan slug 'home' atau logic khusus
        $page = Page::where('is_homepage', true)
            ->where('is_published', true)
            ->with('components')
            ->first();

        if (!$page) {
            $page = Page::where('slug', 'home')
                ->where('is_published', true)
                ->with('components')
                ->firstOrFail();
        }

        $components = $page->components()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('frontend.home', compact('page', 'components'));
    }
}
