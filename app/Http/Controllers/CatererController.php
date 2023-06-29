<?php

namespace App\Http\Controllers;

use App\Models\Caterer;
use App\Http\Requests\StoreCatererRequest;
use App\Http\Requests\UpdateCatererRequest;

class CatererController extends Controller
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
     * @param  \App\Http\Requests\StoreCatererRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCatererRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caterer  $caterer
     * @return \Illuminate\Http\Response
     */
    public function show(Caterer $caterer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caterer  $caterer
     * @return \Illuminate\Http\Response
     */
    public function edit(Caterer $caterer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCatererRequest  $request
     * @param  \App\Models\Caterer  $caterer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCatererRequest $request, Caterer $caterer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caterer  $caterer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caterer $caterer)
    {
        //
    }
}
