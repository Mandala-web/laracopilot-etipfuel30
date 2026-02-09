<?php

namespace App\Http\Controllers;

use App\Models\ProfileSection;
use App\Models\Setting;

class ProfileController extends Controller
{
    public function index()
    {
        $sections = ProfileSection::where('is_active', true)
            ->orderBy('order')
            ->get();
        
        $settings = Setting::first();
        
        return view('profile', compact('sections', 'settings'));
    }
}