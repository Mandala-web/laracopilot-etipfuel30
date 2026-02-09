<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'member_number',
        'nik',
        'name',
        'email',
        'phone',
        'address',
        'join_date',
        'status'
    ];
    
    protected $casts = [
        'join_date' => 'date'
    ];
}