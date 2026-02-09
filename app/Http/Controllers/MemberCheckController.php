<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberCheckController extends Controller
{
    public function index()
    {
        return view('member-check');
    }

    public function check(Request $request)
    {
        $request->validate([
            'identifier' => 'required|string',
        ]);

        $identifier = $request->identifier;

        // Search by member_number or NIK
        $member = Member::where('member_number', $identifier)
            ->orWhere('nik', $identifier)
            ->first();

        if ($member) {
            return view('member-check', [
                'member' => $member,
                'found' => true,
            ]);
        }

        return view('member-check', [
            'found' => false,
            'message' => 'Data tidak ditemukan. NIK atau Nomor Anggota tidak terdaftar dalam sistem.',
        ]);
    }
}