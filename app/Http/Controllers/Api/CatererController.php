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
    public function index(Request $request)
    {
        if (!empty($request->all()['id'])) {
            $array = $request->all()['id'];
            $catererIds= [];
            foreach($array as $a){
                $catererIds[] = DB::table("category_caterer")->select('caterer_id')->where('category_id', $a)->get();
            }
            foreach($catererIds as $cat){
            foreach($cat as $cc){
                $el[] = $cc->caterer_id;
            }
            }
            $countEl = array_count_values($el);
            $catererArr = array_keys($countEl, count($array));
            $data = Caterer::with('categories')->whereIn('id', $catererArr)->get();
            }else{
                $data = Caterer::with("categories")->get();
            }
        if(count($data) > 0){
            return response()->json([
            'success' => true,
            'results' => $data
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'results' => 'Il ristorante specificato non esiste',
            ]);
        }
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
