<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Setting;
use Illuminate\Http\Request;

class MemberCheckController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        
        return view('member-check', compact('settings'));
    }
    
    public function check(Request $request)
    {
        $request->validate([
            'identifier' => 'required|string'
        ]);
        
        $member = Member::where('nik', $request->identifier)
            ->orWhere('member_number', $request->identifier)
            ->first();
        
        $settings = Setting::first();
        
        return view('member-check', compact('member', 'settings'));
    }
}