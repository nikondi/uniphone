<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

/* News::query()->create(['title' => fake()->sentence(), 'content' => fake()->paragraph(), 'short' => fake()->paragraph(), 'published' => true, 'slug' => fake()->slug(), 'published_at' => fake()->dateTimeBetween(now()->subYear(), now())]) */

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $news = News::query()->limit(3)->orderBy('published_at', 'DESC')->get();

        return view('welcome', [
            'news' => $news,
        ]);
    }
}
