<?php

use App\Http\Controllers\IpController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/privacy-policy', 'pages.privacy')->name('privacy');
Route::view('/terms', 'pages.terms')->name('terms');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/about', 'pages.about')->name('about');
Route::view('/what-is-my-ip', 'pages.what-is-my-ip')->name('guide.ip');
Route::view('/ip-lookup', 'pages.ip-lookup')->name('guide.lookup');

Route::view('/guias', 'pages.guides')->name('guides');
foreach (config('guides') as $slug => $article) {
    if (! isset($article['published'])) continue;
    Route::view('/'.$slug, $article['view'], ['article' => $article])->name('article.'.$slug);
}

Route::middleware('throttle:30,1')->group(function () {
    Route::get('/api/ip', [IpController::class, 'lookup']);
    foreach (['/api/myip', '/api/myipV2', '/api/myipV3'] as $path) {
        Route::get($path, [IpController::class, 'address']);
    }
});
