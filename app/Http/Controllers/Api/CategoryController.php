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
        $data = Category::paginate(3);
        return response()->json([
            'status' => 'success',
            'message' => 'Ok',
            'results' => $data
        ], 200);
    }

    // public function show(Category $category)
    // {
    //     $data = Caterer::where('id', $category->caterer_id)->paginate(3);
    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'Ok',
    //         'results' => $data
    //     ], 200);
    // }

}

