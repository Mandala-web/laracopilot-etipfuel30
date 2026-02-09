<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Setting;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        
        $settings = Setting::first();
        
        return view('programs.index', compact('programs', 'settings'));
    }
    
    public function show($slug)
    {
        $program = Program::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();
        
        $relatedPrograms = Program::where('id', '!=', $program->id)
            ->where('is_active', true)
            ->take(3)
            ->get();
        
        $settings = Setting::first();
        
        return view('programs.show', compact('program', 'relatedPrograms', 'settings'));
    }
}