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
        if ($request)
        $categories_id = $request->all()['id'];
        if(!$categories_id)
            $caterers = Caterer::all();
        else{
            if(count($categories_id)==1)
                $caterers = DB::table("categories")->
                join("category_caterer","category_caterer.category_id","=","categories.id")->
                join("caterers","caterers.id","=","category_caterer.caterer_id")->
                where('category_caterer.category_id', $categories_id[0])->get();
        }

        // if (!empty($request->all()['id'])) {
        //     $data=($request->all()['id']);
        //     $category_id = $request->query('id');
        //     // $data = 'ciao';
        //     $data = DB::table("categories")->
        //     join("category_caterer","category_caterer.category_id","=","categories.id")->
        //     join("caterers","caterers.id","=","category_caterer.caterer_id")->
        //     where('category_caterer.category_id', $category_id)->get();
        //     // $data = Caterer::with("categories")->get();
        // // dd($data);
        // }
        // else{
        //     $data = Caterer::with("categories")->get();
        // }
        // $data = Caterer::with("categories")->get();
        return response()->json([
            'success' => true,
            'results' => $caterers
        ], 200);
    }

    public function show($slug){
        $caterer_id = Caterer::where('slug', $slug)->value("id");
        $caterer = Caterer::with("categories")->where('slug', $slug)->first();
        $tipologies = Dish::all()->where('caterer_id', $caterer_id)->unique("tipologies")->pluck("tipologies");
        //If i have the caterer data and the tipologies data
        if($caterer && $tipologies){
            $dishesByTipologies = [];
            //for each tipology create an object in the dishesByTipologies array.
            //each object has the tipologies key with the name of the tipology and the dishes key with the dishes of the related tipology
            foreach($tipologies as $tipology){
                $elem = [];
                $elem["tipologies"] = $tipology;
                $elem["dishes"] = Dish::all()->where('caterer_id', $caterer_id)->where("tipologies",$tipology);
                $dishesByTipologies[] = $elem;
            }
            //In the response json send the caterer and the dishesByTipology array
            return response()->json([
                'success' => true,
                'results' => [
                    "caterer" => $caterer,
                    "dishesByTipologies" => $dishesByTipologies
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
