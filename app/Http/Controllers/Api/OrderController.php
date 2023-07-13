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
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function store(Request $request){
        $array = $request->all();
        if(!empty($array)){
            $order = new Order();
            $order->receiver = $array["receiver"];
            $order->phone_number = $array["phoneNumber"];
            $order->notes = $array["notes"];
            $order->total_price = $array["total_price"];
            $order->address = $array["address"];
            $order->status = 'Pagato';
            //mail
            $order->save();
            //Create relations con i dishes
            foreach($array["dishes"] as $dish)
                $order->dishes()->attach($dish["id"],[
                    "quantity" => $dish["quantity"],
                    "notes" => ''
                ]);

            // $catererMail = DB::table("orders")->
            // join("dish_order","dish_order.order_id","=","orders.id")->
            // join("dishes","dishes.id","=","dish_order.dish_id")->
            // join("caterer", "caterers.id", "=", "dishes.caterer_id")->
            // join("users", "user.id", "=", "caterers.user_id")->
            // where("orders.id", $order->id)->value('users.email');
            // $catererName = User::where('users.mail', $catererMail)->value('name');

            // //send mail to the caterer
            //  Mail::to($catererMail)->send(new NewOrder($order, $catererName));
            // //send mail to the receiver
            //  Mail::to($order->email)->send(new OrderComplete($order));

            return response()->json([
                'success' => true,
                'message' => 'Richiesta eseguita con successo'
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Richiesta in errore: nessun campo è stato passato'
            ]);
        }
    }
}
