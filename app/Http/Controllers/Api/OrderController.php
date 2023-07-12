<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderRequest;
use App\Mail\NewOrder;
use App\Mail\OrderComplete;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function store(StoreOrderRequest $request){
        $data =  $request->validated();
        $order = Order::create($data);

        $userMail = DB::table("orders")->
            join("dish_order","dish_order.order_id","=","orders.id")->
            join("dishes","dishes.id","=","dish_order.dish_id")->
            join("caterer", "caterers.id", "=", "dishes.caterer_id")->
            join("users", "user.id", "=", "caterers.user_id")->
            where("orders.id", $order->id)->value('users.email');
        $userName = User::where('users.mail', $userMail)->value('name');

         Mail::to($userMail)->send(new NewOrder($order, $userName));
         Mail::to($order->email)->send(new OrderComplete($order));

         return response()->json([
            'success' => true,
        ]);
    }
}
