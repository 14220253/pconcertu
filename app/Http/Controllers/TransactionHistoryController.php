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
    public function index()
    {
        $tickets = TicketOrderDetail::query()->orderBy('customer_id')->paginate(2);
        // dd($tickets);
        return view('transaction_history.index', ['transactionHistory' => $tickets]);
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
