<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Category;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Type;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.event.index')->with('events', User::find(Auth::user()->id)->organizate);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.event.create')->with('categories', Category::all()->pluck('wording', 'id'))->with('types', Type::all()->pluck('wording', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        $timestamp = $this->formatTimestamp($request->daterange);
        $event = Event::create($request->all());
        $event->update(['start_date' => $timestamp[0], 'end_date' => $timestamp[1]]);

        return redirect(route('event.edit'), $request->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('back.event.edit')->with('event', Event::findOrFail($id))->with('categories', Category::all()->pluck('wording', 'id'))->with('types', Type::all()->pluck('wording', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, $id)
    {
        if(!$request->ajax()) return redirect(route('event.edit', $id));

        $event = Event::findOrFail($id);
        $timestamp = $this->formatTimestamp($request->daterange);

        if($event->update($request->all())){
            $event->update(['start_date' => $timestamp[0], 'end_date' => $timestamp[1]]);

//            foreach ($request->tickets as $ticket){
//                if($ticket->id == null)
//                    Ticket::create([
//                        'title' => $ticket->title,
//                        'quantity' => $ticket->quantity,
//                        'price' => $ticket->price,
//                        'event_id' => $request->id]);
//                else{
//                    $ticketSearch = Ticket::findOrFail($ticket->id);
//                    $ticketSearch->update($ticket);
//                }
//            }

            return response()->json(['msg' => $request->tickets], 200);
        } else
            return response()->json(['msg' => $request->all()], 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id);
    }

    private function formatTimestamp($timestamp)
    {
        $timestamp = explode("-", $timestamp);

        $date1 = explode("/", str_split($timestamp[0], 10)[0]);
        $time1 = str_replace(" ", ":00", str_split($timestamp[0], 11)[1]);

        $date2 = str_replace(" ", "", explode("/", str_split($timestamp[1], 11)[0]));
        $time2 = str_split($timestamp[1], 12)[1].':00';

        return [$date1[2].'-'.$date1[1].'-'.$date1[0].' '.$time1, $date2[2].'-'.$date2[1].'-'.$date2[0].' '.$time2];
    }
}
