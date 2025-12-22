<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LastFmController extends Controller
{
    //

    public function test()
    {

        $key = "5ee5b01c22b96cd927911599fafdbd5d";
        $sharedSecret = "e851a111af000982bf6ca947c09183f6";
        $endpoint = "http://www.last.fm/api/auth/?api_key={$key}";
        $user = "tommibommi";
        $baseEndpoint = "https://ws.audioscrobbler.com/2.0/";

        // https://ws.audioscrobbler.com/2.0/?method=user.getTopTracks&user=aidan-&limit=3&api_key=YOUR_API_KEY&format=json

        $string = "{$baseEndpoint}?method=user.getTopTracks&user={$user}&limit=3&api_key={$key}&format=json";

        dd($string);
    }

    public function showLastFmView()
    {
        return view('layout.lastfm.lastfm');
    }
}
