<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


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

Route::get('/api/myip', function (Request $request) {
    $remoteAddr = $_SERVER['REMOTE_ADDR'] ?? null;

    $cfConnectingIp = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? null;
    $xForwardedFor  = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? null;
    $clientIpHeader = $_SERVER['HTTP_CLIENT_IP'] ?? null;

    $forwardedIps = [];
    if (!empty($xForwardedFor)) {
        $forwardedIps = array_map('trim', explode(',', $xForwardedFor));
    }

    $firstForwardedIp = $forwardedIps[0] ?? null;

    $detectedIp = $cfConnectingIp
        ?: $firstForwardedIp
        ?: $clientIpHeader
        ?: $remoteAddr;

    $ipVersion = null;
    if (filter_var($detectedIp, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
        $ipVersion = 'IPv4';
    } elseif (filter_var($detectedIp, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
        $ipVersion = 'IPv6';
    }

    return response()->json([
        'ip' => $detectedIp,
        'ip_version' => $ipVersion,
        'remote_addr' => $remoteAddr,
        'possible_ipv4' => collect([
            $cfConnectingIp,
            $firstForwardedIp,
            $clientIpHeader,
            $remoteAddr,
        ])->filter(fn ($ip) => filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4))
          ->values()
          ->all(),
        'possible_ipv6' => collect([
            $cfConnectingIp,
            $firstForwardedIp,
            $clientIpHeader,
            $remoteAddr,
        ])->filter(fn ($ip) => filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6))
          ->values()
          ->all(),
        'headers' => [
            'cf_connecting_ip' => $cfConnectingIp,
            'x_forwarded_for' => $xForwardedFor,
            'client_ip' => $clientIpHeader,
        ],
        'laravel_ip' => $request->ip(),
        'laravel_ips' => $request->ips(),
    ]);
});
