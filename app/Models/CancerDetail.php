<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancerDetail extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category_id', 'title', 'content', 'thumbnail', 'video_url'
    ];
}
