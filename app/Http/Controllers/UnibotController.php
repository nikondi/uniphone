<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnibotController extends Controller
{
    public static function chat() {
        return view('unibot');
    }
    public static function send() {
        return [
            'messages' => [
                [
                    'text' => 'Это тестовое сообщение от юнибота. Ответы можно получать через API)',
                ]
            ]
        ];
    }
}
