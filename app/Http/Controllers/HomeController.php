<?php

namespace App\Http\Controllers;

use App\Models\HomeSection;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $sections = HomeSection::where('is_active', true)
            ->orderBy('order')
            ->get();
        
        $latestNews = News::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->take(6)
            ->get();
        
        $galleries = Gallery::where('is_featured', true)
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();
        
        $settings = Setting::first();
        
        return view('home', compact('sections', 'latestNews', 'galleries', 'settings'));
    }
}