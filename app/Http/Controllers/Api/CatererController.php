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
            'success' => false,
            'results' => $data
        ], 200);
    }

    public function show($slug){
        $data =  Caterer::with('dishes', 'categories')->where('slug', $slug)->first();
        if($data){
            return response()->json([
                'success' => false,
                'results' => $data
            ]);
        } else {
            return response()->json([
                'success' => false,
                'results' => 'Il ristorante specificato non esiste',
            ], 404);
        }
    }
}
