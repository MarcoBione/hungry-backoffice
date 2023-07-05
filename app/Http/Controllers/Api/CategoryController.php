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
            'success' => false,
            'results' => $data
        ], 200);
    }

    public function show($id){
        $category = Category::with('caterers')->where("id",$id)->first();
        if($category){
            return response()->json([
                "success" => true,
                "results" => $category
            ]);
        }else{
            return response()->json([
                'success' => false,
                'results' => 'La categoria specificata non esiste',
            ], 404);
        }

    }
}

