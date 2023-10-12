<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * @property integer $id
 * @property Carbon $published_at
 * @property string $title
 * @property string $content
 * @property string $short
 * @property string $seo_title
 * @property string $seo_description
 * @property string $thumbnail
 * */

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug',
        'content', 'short',
        'thumbnail',
        'seo_title', 'seo_description',
        'published', 'published_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'published_at' => 'datetime',
    ];

    public function getThumbnail() {
        if(!is_null($this->thumbnail) && Storage::disk('public')->exists($this->thumbnail))
            return Storage::disk('public')->url($this->thumbnail);
        else
            return asset('assets/images/no-image_370x370.svg');
    }
}
