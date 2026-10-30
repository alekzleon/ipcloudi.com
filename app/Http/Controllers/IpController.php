<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;

class IpController extends Controller
{
    public function lookup(Request $request)
    {
        $ip = $request->ip();
        $localLookup = app()->environment('local') && in_array($ip, ['127.0.0.1', '::1'], true);
        if (! $localLookup && ! filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
            return response()->json(['message' => 'No se detectó una IP pública consultable.'], 422)
                ->header('Cache-Control', 'private, no-store');
        }

        try {
            $data = Http::acceptJson()->connectTimeout(3)->timeout(8)
                ->get($localLookup ? 'https://api.ipquery.io/?format=json' : 'https://api.ipquery.io/'.$ip)->throw()->json();
            if (! is_array($data) || ! filter_var($data['ip'] ?? null, FILTER_VALIDATE_IP)
                || (! $localLookup && inet_pton($data['ip']) !== inet_pton($ip))) {
                return $this->unavailable();
            }
        } catch (ConnectionException | RequestException $exception) {
            return $this->unavailable();
        }

        $data['lookup_context'] = $localLookup ? 'local_egress' : 'visitor';

        return response()->json($data)->header('Cache-Control', 'private, no-store');
    }

    private function unavailable()
    {
        return response()->json(['message' => 'El proveedor de información IP no está disponible. Reintenta.'], 503)
            ->header('Cache-Control', 'private, no-store');
    }

    public function address(Request $request)
    {
        $ip = $request->ip();
        $ipv4 = filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) ? $ip : null;
        $ipv6 = filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) ? $ip : null;

        return response()->json([
            'ip' => $ip, 'ip_version' => $ipv4 ? 'IPv4' : ($ipv6 ? 'IPv6' : null),
            'ipv4' => $ipv4, 'ipv6' => $ipv6, 'ip_preferred' => $ip,
            'all_ips' => array_values(array_filter([$ipv4, $ipv6])),
        ])->header('Cache-Control', 'private, no-store');
    }
}
