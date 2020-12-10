<?php

namespace App\Http\Controllers;

use App\Todolists;
use Illuminate\Http\Request;

class TodolistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes=Todolists::all();
        return view('schedules',compact('notes'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todolists  $todolists
     * @return \Illuminate\Http\Response
     */
    public function show(Todolists $todolists)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todolists  $todolists
     * @return \Illuminate\Http\Response
     */
    public function edit(Todolists $todolists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todolists  $todolists
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todolists $todolists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todolists  $todolists
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todolists $todolists)
    {
        //
    }
}
