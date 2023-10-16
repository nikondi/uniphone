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
        'thumbnail', 'pictures',
        'seo_title', 'seo_description',
        'published', 'published_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'published_at' => 'datetime',
        'pictures' => 'collection',
    ];

    public function getThumbnail() {
        if(!is_null($this->thumbnail) && Storage::disk('public')->exists($this->thumbnail))
            return Storage::disk('public')->url($this->thumbnail);
        else
            return asset('assets/images/no-image_370x370.svg');
    }
    public function getPictures() {
        if(!is_null($this->pictures)) {
            $pictures = [];
            foreach($this->pictures as $picture) {
                if(Storage::disk('public')->exists($picture))
                    $pictures[] = Storage::disk('public')->url($picture);
            }
            return empty($pictures)?[]:$pictures;
        }
        else
            return [];
    }
}
