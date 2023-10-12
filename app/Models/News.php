<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug',
        'content', 'short',
        'seo_title', 'seo_description',
        'published', 'published_at',
    ];


}
