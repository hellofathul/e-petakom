<?php

namespace App\Http\Controllers;

use App\Models\Dean;
use App\Http\Requests\StoreDeanRequest;
use App\Http\Requests\UpdateDeanRequest;

class DeanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDeanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dean  $dean
     * @return \Illuminate\Http\Response
     */
    public function show(Dean $dean)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dean  $dean
     * @return \Illuminate\Http\Response
     */
    public function edit(Dean $dean)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeanRequest  $request
     * @param  \App\Models\Dean  $dean
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeanRequest $request, Dean $dean)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dean  $dean
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dean $dean)
    {
        //
    }
}
