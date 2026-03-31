<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/ip', function () {
    $ip = Http::get("https://api.ipquery.io/");


    return Cache::remember("ip_" . $ip, 300, function () use ($ip) {
        $response = Http::get("https://api.ipquery.io/" . $ip);
        return $response->json();
    });
});

Route::get('/', function () {
    return view('home');
});