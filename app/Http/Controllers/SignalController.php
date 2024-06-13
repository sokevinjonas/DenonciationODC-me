<?php

namespace App\Http\Controllers;

use App\Models\Signal;
use App\Http\Requests\StoreSignalRequest;
use App\Http\Requests\UpdateSignalRequest;

class SignalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreSignalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Signal $signal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Signal $signal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSignalRequest $request, Signal $signal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Signal $signal)
    {
        //
    }
}
