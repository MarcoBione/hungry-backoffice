<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Caterer;
use Illuminate\Http\Request;

class CatererController extends Controller
{
    public function index()
    {
        $data = Caterer::paginate(10)->with();
        return response()->json([
            'status' => 'success',
            'message' => 'Ok',
            'results' => $data
        ], 200);
    }

    public function show($slug){
        $data = Caterer::with('dishes', 'categories')->where('slug', $slug)->first();
        if($data){
            return response()->json([
                'status' => 'success',
                'message' => 'Ok',
                'results' => $data
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Error',
            ], 404);
        }
    }
}
