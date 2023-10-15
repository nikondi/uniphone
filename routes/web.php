<?php

use App\Http\Controllers\UnibotController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FeedbackController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', WelcomeController::class)->name('welcome');

Route::get('/news/', [NewsController::class, 'index'])->name('news');
Route::get('/news/{post_slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('/about/', AboutController::class)->name('about');

Route::get('/contacts/', [FeedbackController::class, 'contacts'])->name('contacts');
Route::post('/feedback/send/', [FeedbackController::class, 'send'])->name('feedback.send');

Route::get('/camera/', function() {
    return view('cameras');
})->name('camera');

Route::get('/unibot/', [UnibotController::class, 'chat'])->name('unibot.chat');
Route::post('/unibot/send/', [UnibotController::class, 'send'])->name('unibot.send');

