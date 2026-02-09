<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\Setting;

class AboutController extends Controller
{
    public function index()
    {
        $sections = AboutSection::where('is_active', true)
            ->orderBy('order')
            ->get();
        
        $settings = Setting::first();
        
        return view('about', compact('sections', 'settings'));
    }
}