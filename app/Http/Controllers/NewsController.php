<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        return view('news.index');
    }

    public function show($post_slug) {
        /**
         * @var News $post
         * */

        $post = News::query()->where('slug', $post_slug)->first();

        if(is_null($post))
            abort(404);

        $seo_title = empty($post->seo_title)?$post->title:$post->seo_title;
        $seo_title .= ' - '.env('APP_NAME');
        seo()->title($seo_title);

        if(!empty($post->seo_description))
            seo()->description($post->seo_description);

        return view('news.single', compact(['post']));
    }
}
