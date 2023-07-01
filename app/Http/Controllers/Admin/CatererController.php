<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Caterer;
use App\Models\Category;
use App\Models\Dish;
use Illuminate\Support\Str;
use App\Http\Requests\StoreCatererRequest;
use App\Http\Requests\UpdateCatererRequest;

class CatererController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caterers = Caterer::all();
        return view('admin.caterers.index', compact('caterers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.caterers.create', compact('categories', 'dishes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCatererRequest  $request
     */
    public function store(StoreCatererRequest $request)
    {
        $data = $request->validated();
        $slug = Str::slug($request->name, '-');
        $data['slug'] = $slug;
        $caterer = Caterer::create($data);
        if($request->has('categories')) {
            $caterer->categories()->attach($request->categories);
        }
        return redirect()->route('admin.caterers.show', $caterer->slug)->with('message', "Il ristorante $caterer->name è stato aggiunto con successo");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caterer  $caterer
     */
    public function show(Caterer $caterer)
    {
        $dishes = Dish::all()->where('caterer_id', $caterer->id);
        return view('admin.caterers.show', compact('caterer', 'dishes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caterer  $caterer
     * @return \Illuminate\Http\Response
     */
    public function edit(Caterer $caterer)
    {
        $categories = Category::all();
        return view('admin.caterers.edit', compact('categories', 'caterer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCatererRequest  $request
     * @param  \App\Models\Caterer  $caterer
     */
    public function update(UpdateCatererRequest $request, Caterer $caterer)
    {
        $data = $request->validated();
        $caterer->update($data);
        if($request->has('categories')) {
            $caterer->categories()->sync($request->categories);
        } else {
            $caterer->categories()->sync([]);
        }

        return redirect()->route('admin.caterers.show', $caterer->slug)->with('message', "I dati del ristorante $caterer->name sono stati aggiornati correttamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caterer  $caterer
     */
    public function destroy(Caterer $caterer)
    {
        $caterer->delete();

        return redirect()->route('admin.caterers.index')->with('message', "Il ristorante $caterer->name è stato eliminato con successo");
    }
}
