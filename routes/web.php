<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;


Route::get('/api/ip', function () {
    $ip = $_SERVER['REMOTE_ADDR'];


    return Cache::remember("ip_" . $ip, 300, function () use ($ip) {
        $response = Http::get("https://api.ipquery.io/" . $ip);
        return $response->json();
    });
});

Route::view('/privacy-policy', 'pages.privacy');
Route::view('/terms', 'pages.terms');
Route::view('/contact', 'pages.contact');

Route::view('/what-is-my-ip', 'pages.what-is-my-ip');
Route::view('/ip-lookup', 'pages.ip-lookup');

Route::get('/', function () {
    return view('home');
});

Route::get('/api/myip', function () {
    $ip = $_SERVER['REMOTE_ADDR'];
    return $ip;
});
