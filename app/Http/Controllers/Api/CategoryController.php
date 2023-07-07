<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Caterer;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::with('caterers')->get();
        return response()->json([
            'success' => true,
            'results' => $data
        ], 200);
    }

    public function show($id){
        $category = Category::where("id",$id)->first();
        if($category){
            $caterers = [];
            foreach($category->caterers as $caterer){
                $caterers[] = Caterer::with("categories")->where("id",$caterer->id)->first();
            }
            return response()->json([
                "success" => true,
                "results" => [
                    "category" => $category,
                    "caterers" => $caterers
                ]
            ]);
        }else{
            return response()->json([
                'success' => false,
                'results' => 'La categoria specificata non esiste',
            ], 404);
        }

    }
}

