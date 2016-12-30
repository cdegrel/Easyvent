<?php

namespace App\Http\Controllers;

use App\Models\Event;

class HomeController extends Controller
{
    public function __invoke()
    {
        $events = Event::all()->take(9);
        foreach ($events as $event){
            $event['tickets'] = Event::find($event->id)->ticket;
        }

        return view('front.index')->with('events', $events);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('front.event')->with('event', Event::find($id));
    }
}
