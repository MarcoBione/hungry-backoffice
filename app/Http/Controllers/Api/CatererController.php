<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Caterer;
use Illuminate\Http\Request;

class CatererController extends Controller
{
    public function index(Request $request)
    {
        $data = Caterer::paginate(3);
        return response()->json([
            'status' => 'success',
            'message' => 'Ok',
            'results' => $data
        ], 200);
    }
}
