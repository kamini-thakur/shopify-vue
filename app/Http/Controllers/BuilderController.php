<?php

namespace App\Http\Controllers;

use App\Models\Builder;
use Illuminate\Http\Request;

class BuilderController extends Controller
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
        return view('welcome');
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
     * @param  \App\Models\builder  $builder
     * @return \Illuminate\Http\Response
     */
    public function show(builder $builder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\builder  $builder
     * @return \Illuminate\Http\Response
     */
    public function edit(builder $builder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\builder  $builder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, builder $builder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\builder  $builder
     * @return \Illuminate\Http\Response
     */
    public function destroy(builder $builder)
    {
        //
    }
}
