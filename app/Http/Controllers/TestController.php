<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test()
    {
        $data = Entry::all();
        dd($data[0]['date']);
    }
}
