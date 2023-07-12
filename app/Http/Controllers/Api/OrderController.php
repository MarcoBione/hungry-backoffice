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
    public function store($dataFromFront){
        $order = new Order();
        $order->receiver = $dataFromFront->receiver;
        $order->phone_number = $dataFromFront->phoneNumber;
        $order->notes = $dataFromFront->notes;
        //mail
        $order->save();
        //Create relations con i dishes

        $userMail = DB::table("orders")->
            join("dish_order","dish_order.order_id","=","orders.id")->
            join("dishes","dishes.id","=","dish_order.dish_id")->
            join("caterer", "caterers.id", "=", "dishes.caterer_id")->
            join("users", "user.id", "=", "caterers.user_id")->
            where("orders.id", $order->id)->value('users.email');
        $userName = User::where('users.mail', $userMail)->value('name');

        //send mail to the caterer
         Mail::to($catererMail)->send(new NewOrder($order));
        //send mail to the receiver
         Mail::to($order->email)->send(new OrderComplete($order));

         return response()->json([
            'success' => true,
        ]);
    }
}
