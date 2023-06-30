<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Caterer;
use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{

    private function getSlug($title)
    {
        $slug = Str::of($title)->slug("-");
        $count = 1;

        // Prendi il primo post il cui slug è uguale a $slug
        // se è presente allora genero un nuovo slug aggiungendo -$count
        while( Dish::where("slug", $slug)->first() ) {
            $slug = Str::of($title)->slug("-") . "-{$count}";
            $count++;
        }

        return $slug;
    }
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $id = Auth::id();
        $caterer = Caterer::where('id', $id)->first();
        $dishes=Dish::paginate(10);
        return view('admin.dishes.index', compact('dishes', 'caterer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDishRequest  $request
     */
    public function store(StoreDishRequest $request)
    {
        $data = $request->validated();
        // $slug = $this->getSlug($request->name);
        $slug = Str::slug($request->name, '-');
        $data['slug'] = $slug;
        $data['caterer_id'] = Auth::id();
        $dish = Dish::create($data);
        if ($request->has('orders')) {
            $dish->orders()->attach($request->orders);
        }
        return redirect()->route('admin.dishes.show', $dish->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     *
     */
    public function show(Dish $dish)
    {
        if($dish->caterer_id !== Auth::id()){
            abort(403);
        }
        return view('admin.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     */
    public function edit(Dish $dish)
    {
        if($dish->caterer_id !== Auth::id()){
            abort(403);
        }
        return view('admin.dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDishRequest  $request
     * @param  \App\Models\Dish  $dish
     */
    public function update(UpdateDishRequest $request, Dish $dish)
    {
        $data = $request->validated();
        $slug = $this->getSlug($request->name);
        // $slug = Str::slug($request->name, '-');
        $data['slug'] = $slug;
        $dish->update($data);
        return redirect()->route('admin.dishes.show', $dish->slug)->with('message', 'Il piatto è stato modificato');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dish  $dish
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();
        return redirect()->route('admin.dishes.index', $dish->slug)->with('message', "Il piatto $dish->name è stato eliminato");
    }
}
