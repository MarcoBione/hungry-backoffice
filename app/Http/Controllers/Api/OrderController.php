<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Mail\NewOrder;
use App\Mail\OrderComplete;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function store(Request $request){
         $data =  $request->validated();
         $order = Order::create($data);

         Mail::to('info@fashionshop.com')->send(new NewOrder($order));
         Mail::to($order->email)->send(new OrderComplete($order));

         return response()->json([
            'success' => true,
        ]);
    }
}
