<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::query()->orderBy('id')->get();
        // dd($events);
        return view('event.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $data = Event::query()
            ->join('reviews', 'reviews.event_id', '=', 'events.id') //mengambil review
            ->join('event_organizers', 'event_organizers.id', '=', 'events.event_organizer_id') //mengambil eo
            ->join('guest_details', 'guest_details.event_id','=','events.id') //mengambil guest detail
            ->join('guests', 'guests.id','=','guest_details.guest_id') //menagmbil nama guest
            ->join('master_events', 'master_events.id','=','events.event_master_id') //mengambil nama event
            ->join('tickets','tickets.event_id','=','events.id')
            ->join('ticket_category_details', 'ticket_category_details.ticket_id','=','tickets.id') //mengambil tipe tiket
            ->join('ticket_categories', 'ticket_category_details.ticket_category_id','=','ticket_categories.id')
            ->select(
                'reviews.*',
                'master_events.name as event_name',
                'tickets.price as price',
                'events.location as location',
                'events.date as date',
                'events.dress_code as dress_code',
                'events.time as times' ,
                'guests.guest_name as guest_name',
                'event_organizers.name as eo_name',
                'ticket_categories.ticket_category_name',
                'events.id as event_id'
                )
            ->where('events.id', $event->id)
            ->first();
        $groupedData = Event::query()
            ->select('tickets.price as price', 'ticket_categories.ticket_category_name')
            ->join('reviews', 'reviews.event_id', '=', 'events.id')
            ->join('event_organizers', 'event_organizers.id', '=', 'events.event_organizer_id')
            ->join('guest_details', 'guest_details.event_id', '=', 'events.id')
            ->join('guests', 'guests.id', '=', 'guest_details.guest_id')
            ->join('master_events', 'master_events.id', '=', 'events.event_master_id')
            ->join('tickets', 'tickets.event_id', '=', 'events.id')
            ->join('ticket_category_details', 'ticket_category_details.ticket_id', '=', 'tickets.id')
            ->join('ticket_categories', 'ticket_category_details.ticket_category_id', '=', 'ticket_categories.id')
            ->where('events.id', $event->id)
            ->groupBy('events.id', 'ticket_categories.ticket_category_name')
            ->get();
        return view('event.show', ['data'=>$data, 'groupedData'=>$groupedData, 'event'=>$event->id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
