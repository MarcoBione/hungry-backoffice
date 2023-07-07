<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Caterer;
use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use PhpParser\Node\Expr\Cast\Object_;

class CatererController extends Controller
{
    public function index()
    {
        $array = [1, 2, 3];
        $catererArr = DB::table("category_caterer")->whereIn('category_caterer.category_id', $array)->select("caterer_id")->groupBy('caterer_id')->get();
        $categoryArr = DB::table("category_caterer")->whereIn('category_caterer.category_id', $array)->get();
        $categoryIds= [];
        $selectedCat = collect([]);
            foreach($catererArr as $caterer){
                $selectedCat->push(
                    ['caterer_id' => $caterer->caterer_id,
                    'category_id[]' => $categoryIds
                    ]
                );
            }
            $data[] = $selectedCat;
            foreach($selectedCat as $cat){
                $catS = [];
                    foreach($categoryArr as $category){
                    if($category->caterer_id === $cat['caterer_id']){
                        if(!in_array($category->category_id, $cat['category_id[]']))
                            $catS[] = $category->category_id;
                    }
                    }
               $cat['category_id[]']= $catS;
               $selectedCat->put('category_id[]', $catS);
            //    dd($cat['category_id[]']);
             }
            return response()->json([
            'success' => true,
            'results' => $data
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
