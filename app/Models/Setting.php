<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_name',
        'site_tagline',
        'logo_header',
        'logo_footer',
        'favicon',
        'email',
        'phone',
        'address',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'linkedin',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'google_analytics'
    ];
    
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}