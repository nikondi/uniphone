<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'key',
        'name', 'value',
        'html', 'admin'
    ];

    public static function get($key): string {
        return self::query()->where('key', $key)->first()->value ?? '';
    }

    protected $casts = [
        'html' => 'boolean',
        'admin' => 'boolean',
    ];
}
