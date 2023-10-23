<?php

use App\Http\Controllers\CatalogController;
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

Route::prefix('news')->controller(NewsController::class)->name('news.')->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('{post_slug}', 'show')->name('show');
});

Route::get('/about/', AboutController::class)->name('about');

Route::controller(FeedbackController::class)->group(function() {
    Route::get('/contacts/', 'contacts')->name('contacts');
    Route::post('/feedback/send/', 'send')->name('feedback.send');
});

Route::get('/camera/', function() {
    return view('cameras');
})->name('camera');

Route::prefix('unibot')->controller(UnibotController::class)->name('unibot.')->group(function() {
    Route::get('/', 'chat')->name('chat');
    Route::post('send', 'send')->name('send');
});

Route::prefix('catalog')->controller(CatalogController::class)->name('catalog.')->group(function() {
    Route::get('/', 'index')->name('index');
    /*Route::post('send', [UnibotController::class, 'send'])->name('send');*/
});
