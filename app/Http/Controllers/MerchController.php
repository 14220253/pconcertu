<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use App\Http\Requests\StoreMerchRequest;
use App\Http\Requests\UpdateMerchRequest;

class MerchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merch = Merch::query()
        ->where('event_id', 5)
        ->paginate(10);
        // dd($merch);
        return view('merch.index', ['merches' => $merch]);
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
    public function store(StoreMerchRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Merch $merch)
    {
        return view('merch.show', ['merch'=>$merch]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Merch $merch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMerchRequest $request, Merch $merch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merch $merch)
    {
        //
    }
}
