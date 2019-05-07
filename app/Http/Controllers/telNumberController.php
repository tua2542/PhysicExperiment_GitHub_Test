<?php

namespace App\Http\Controllers;

use App\Model\telNumber;
use Illuminate\Http\Request;
use App\Http\Requests\telNumberRequest;

class telNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return telNumber::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(telNumberRequest $request)
    {
        $validated = $request -> validated();
        return telNumber::create($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\telNumber  $telNumber
     * @return \Illuminate\Http\Response
     */
    public function show(telNumber $telNumber)
    {
        return $telNumber;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\telNumber  $telNumber
     * @return \Illuminate\Http\Response
     */
    public function update(telNumberRequest $request, telNumber $telNumber)
    {
        $validated = $request->validated();
        $telNumber->update($validated);
        return $telNumber;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\telNumber  $telNumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(telNumber $telNumber)
    {
        $telNumber->delete();
        return response('Deleted',204);
    }
}
