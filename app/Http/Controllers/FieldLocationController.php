<?php

namespace App\Http\Controllers;

use App\Models\FieldLocation;
use App\Http\Requests\StoreFieldLocationRequest;
use App\Http\Requests\UpdateFieldLocationRequest;

class FieldLocationController extends Controller
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
     * @param  \App\Http\Requests\StoreFieldLocationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFieldLocationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FieldLocation  $fieldLocation
     * @return \Illuminate\Http\Response
     */
    public function show(FieldLocation $fieldLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FieldLocation  $fieldLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(FieldLocation $fieldLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFieldLocationRequest  $request
     * @param  \App\Models\FieldLocation  $fieldLocation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFieldLocationRequest $request, FieldLocation $fieldLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FieldLocation  $fieldLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(FieldLocation $fieldLocation)
    {
        //
    }
}
