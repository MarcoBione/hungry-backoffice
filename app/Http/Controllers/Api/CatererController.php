<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Caterer;
use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatererController extends Controller
{
    public function index(Request $request)
    {
        if (!empty($request->query('id'))) {
            // dd($request->query('id'));
            $category_id = $request->query('id');
            // $data = 'ciao';
            $data = DB::table("categories")->
            join("category_caterer","category_caterer.category_id","=","categories.id")->
            join("caterers","caterers.id","=","category_caterer.caterer_id")->
            where('category_caterer.category_id', $category_id)->get();
            // $data = Caterer::with("categories")->get();
        // dd($data);
        }
        else{
            $data = Caterer::with("categories")->get();
        }
        // $data = Caterer::with("categories")->get();
        return response()->json([
            'success' => true,
            'results' => $data
        ], 200);
    }

    public function show($slug){
        $caterer_id = Caterer::where('slug', $slug)->value("id");
        $caterer = Caterer::with("categories")->where('slug', $slug)->first();
        $data = Dish::all()->where('caterer_id', $caterer_id)->groupBy('tipologies');
        if($caterer && $data){
            return response()->json([
                'success' => true,
                'results' => [
                    "caterer" => $caterer,
                    "dishesByTipologies" => $data
                ]
            ]);
        } else {
            return response()->json([
                'success' => false,
                'results' => 'Il ristorante specificato non esiste',
            ], 404);
        }
    }
}
