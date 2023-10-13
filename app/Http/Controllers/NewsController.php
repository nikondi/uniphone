<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index() {
        $posts = News::query()->where('published', true)->orderBy('published_at', 'DESC')->limit(12)->get();

        return view('news.index', compact(['posts']));
    }

    public function show($post_slug) {
        $post = News::query()->where('slug', $post_slug)->where('published', true)->first();

        if(is_null($post))
            abort(404);

        $sidebar_posts = News::orderByRaw('RAND()')->take(3)->get();;

        $seo_title = empty($post->seo_title)?$post->title:$post->seo_title;
        $seo_title .= ' - '.env('APP_NAME');
        seo()->title($seo_title);

        if(!empty($post->seo_description))
            seo()->description($post->seo_description);

        return view('news.single', compact(['post', 'sidebar_posts']));
    }
}
