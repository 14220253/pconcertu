<?php

namespace App\Http\Controllers;

use App\Models\TicketOrderDetail;
use App\Models\Event;
use App\Models\Ticket;
use App\Http\Requests\StoreTicketOrderDetailRequest;
use App\Http\Requests\UpdateTicketOrderDetailRequest;

class TransactionHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($customer_id)
    {
        $data = TicketOrderDetail::query()
            ->join('customers', 'customers.id', '=', 'ticket_order_details.customer_id')
            ->join('tickets', 'tickets.id', '=', 'ticket_order_details.ticket_id')
            ->join('events', 'events.id', '=', 'tickets.event_id')
            ->join('ticket_types', 'ticket_order_details.ticket_type_id','=','ticket_types.id')
            ->join('master_events', 'master_events.id','=','events.event_master_id')
            ->select('customers.name as customer_name', 'ticket_order_details.seat_id', 'tickets.price as price', 'master_events.name as event_name', 'ticket_order_details.ticket_id', 'ticket_types.name as name','events.poster as poster')
            ->where('ticket_order_details.customer_id', $customer_id)
            ->get();

        return view('transaction_history.index', ['data' => $data, 'customer_id' => $customer_id]);
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
    public function store(StoreTicketOrderDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TicketOrderDetail $ticketOrderDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TicketOrderDetail $ticketOrderDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketOrderDetailRequest $request, TicketOrderDetail $ticketOrderDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketOrderDetail $ticketOrderDetail)
    {
        //
    }
}
