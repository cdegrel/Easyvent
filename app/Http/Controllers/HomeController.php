<?php

namespace App\Http\Controllers;

use App\Models\Event;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('front.index')->with('events', Event::all()->take(9));
    }
}
