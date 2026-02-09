<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use App\Models\Setting;

class StructureController extends Controller
{
    public function index()
    {
        $structures = Structure::orderBy('order')
            ->get()
            ->groupBy('category');
        
        $settings = Setting::first();
        
        return view('structure', compact('structures', 'settings'));
    }
}