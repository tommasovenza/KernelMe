<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

use function Pest\Laravel\json;

class LastFmController extends Controller
{
    // Get Top Tracks call Last FM API
    public function getTopTracks(): JsonResponse
    {
        $user = "tommibommi";
        $baseEndpoint = "https://ws.audioscrobbler.com/2.0/";
        $lastFmKey = config('services.last_fm_key');

        // Call API through, PHP HTTP client => Guzzle
        $response = Http::get($baseEndpoint, [
            'method' => 'user.gettoptracks',
            'user' => $user,
            'limit' => 10,
            'api_key' => $lastFmKey,
            'format' => 'json',
            'period' => '1month'
        ])->throw();

        // get JSON
        $json = $response->json();

        // return json to
        return response()->json($json, 200);
    }

    public function recentTracks(): JsonResponse
    {
        $user = "tommibommi";
        $baseEndpoint = "https://ws.audioscrobbler.com/2.0/";
        $lastFmKey = config('services.last_fm_key');

        // Call API through, PHP HTTP client => Guzzle
        $response = Http::get($baseEndpoint, [
            'method' => 'user.getrecenttracks',
            'user' => $user,
            'limit' => 10,
            'api_key' => $lastFmKey,
            'format' => 'json',
            'period' => '1month'
        ])->throw();

        // get JSON
        $json = $response->json();

        // return json to
        return response()->json($json, 200);
    }

    public function showLastFmView()
    {
        return view('layout.lastfm.lastfm');
    }
}
