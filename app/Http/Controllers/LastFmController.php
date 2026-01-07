<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

class LastFmController extends Controller
{
    // private
    private string $user = "tommibommi";
    private string $baseEndpoint = "https://ws.audioscrobbler.com/2.0/";

    // Recent Track Method
    public function recentTracks(): JsonResponse
    {
        // get Last Fm Key from .env file through config services
        $lastFmKey = $this->getLastFMKey();

        // Call API through, PHP HTTP client => Guzzle
        $response = Http::get($this->baseEndpoint, [
            'method' => 'user.getrecenttracks',
            'user' => $this->user,
            'limit' => 15,
            'api_key' => $lastFmKey,
            'format' => 'json',
            // 'period' => '1month'
        ])->throw();

        // get JSON
        $json = $response->json();

        // return json to
        return response()->json($json, 200);
    }

    public function topArtist(): JsonResponse
    {
        // get Last Fm Key from .env file through config services
        $lastFmKey = $this->getLastFMKey();

        // Call API through, PHP HTTP client => Guzzle
        $response = Http::get($this->baseEndpoint, [
            'method' => 'user.gettopartists',
            'user' => $this->user,
            'limit' => 20,
            'api_key' => $lastFmKey,
            'format' => 'json',
        ])->throw();

        // get JSON
        $json = $response->json();

        // return json to
        return response()->json($json, 200);
    }

    public function topAlbum(): JsonResponse
    {
        // get Last Fm Key from .env file through config services
        $lastFmKey = $this->getLastFMKey();

        // Call API through, PHP HTTP client => Guzzle
        $response = Http::get($this->baseEndpoint, [
            'method' => 'user.gettopalbums',
            'user' => $this->user,
            'limit' => 20,
            'api_key' => $lastFmKey,
            'format' => 'json',
        ])->throw();

        // get JSON
        $json = $response->json();

        // return json to
        return response()->json($json, 200);
    }

    private function getLastFMKey(): string
    {
        // get Last Fm Key from .env file through config services
        $lastFmKey = config('services.last_fm_key');
        return $lastFmKey;
    }

    // return show view
    public function showLastFmView(): View
    {
        return view('layout.lastfm.lastfm');
    }
}
