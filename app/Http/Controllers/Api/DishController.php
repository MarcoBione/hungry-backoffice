<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index(){
        $data = Dish::with('caterer')->paginate(10);
        return response()->json([
            'success' => false,
            'results' => $data
        ]);
    }
    public function show($slug){
        $data = Dish::with('caterer')->where('slug', $slug)->first();
        if($data){
            return response()->json([
                'success' => false,
                'results' => $data
            ]);
        } else {
            return response()->json([
                'success' => false,
                'results' => 'Il piatto specificato non esiste',
            ], 404);
        }
    }
}
