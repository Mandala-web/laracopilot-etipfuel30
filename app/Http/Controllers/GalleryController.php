<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Setting;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')
            ->paginate(24);
        
        $settings = Setting::first();
        
        return view('gallery', compact('galleries', 'settings'));
    }
}