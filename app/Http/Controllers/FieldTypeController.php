<?php

namespace App\Http\Controllers;

use App\Models\FieldType;
use App\Http\Requests\StoreFieldTypeRequest;
use App\Http\Requests\UpdateFieldTypeRequest;

class FieldTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreFieldTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFieldTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FieldType  $fieldType
     * @return \Illuminate\Http\Response
     */
    public function show(FieldType $fieldType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FieldType  $fieldType
     * @return \Illuminate\Http\Response
     */
    public function edit(FieldType $fieldType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFieldTypeRequest  $request
     * @param  \App\Models\FieldType  $fieldType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFieldTypeRequest $request, FieldType $fieldType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FieldType  $fieldType
     * @return \Illuminate\Http\Response
     */
    public function destroy(FieldType $fieldType)
    {
        //
    }
}
