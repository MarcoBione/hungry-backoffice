<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Caterer;
use App\Models\Category;
use Illuminate\Support\Str;
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
        $caterers = Caterer::all();
        return view('caterers.index', compact('caterers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('caterers.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCatererRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCatererRequest $request)
    {
        $data = $request->all();

        $newCaterer = new Caterer();
        $newCaterer->name = $data['name'];
        $newCaterer->address = $data['address'];
        $newCaterer->image = $data['image'];
        $newCaterer->phone_number = $data['phone_number'];
        $newCaterer->slug = Str::slug($data['name'], '-');
        $newCaterer->save();

        redirect()->route('caterers.show', $newCaterer->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caterer  $caterer
     * @return \Illuminate\Http\Response
     */
    public function show(Caterer $caterer)
    {
        return view('caterers.show', compact('caterer'));
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