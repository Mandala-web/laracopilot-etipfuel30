<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'content_type',
        'youtube_url',
        'icon',
        'animation',
        'order',
        'is_active'
    ];
    
    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer'
    ];
}