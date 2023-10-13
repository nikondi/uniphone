<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function contacts()
    {
        seo()->title('Контакты - '.env('APP_NAME'));
        return view('contacts');
    }
    public function send(Request $request)
    {
        $feedback = new Feedback($request->toArray());
        $feedback->save();

        return ['success' => true];
    }
}
