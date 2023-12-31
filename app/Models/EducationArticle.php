<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationArticle extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category', 'label', 'title', 'content', 'thumbnail', 'video_url'
    ];
}
