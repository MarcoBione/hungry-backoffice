<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Caterer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatererController extends Controller
{
    public function index()
    {
        $data = Caterer::paginate(10);
        return response()->json([
            'status' => 'success',
            'message' => 'Ok',
            'results' => $data
        ], 200);
    }

    public function show($slug){

    }

    public function indexByCategory($id){
        $category = Category::where("id",$id)->first();
        if($category){
            $caterers = $category->caterers;
            if($caterers){
                return response()->json([
                    "success" => true,
                    "results" => $caterers
                ]);
            }else{
                return response()->json([
                    "success" => false,
                    "results" => "Ristoranti non trovati!"
                ]);
            }
        }else{
            return response()->json([
                "success" => false,
                "results" => "Categoria non trovata!"
            ]);
        }
    }
}
