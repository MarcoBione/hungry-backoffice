<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Caterer;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if(!$user->is_admin){
            $caterer = Caterer::where('user_id', Auth::id())->first();

            if($caterer){
                $caterer_id = $caterer->id;
                $orders = DB::table("orders")->
                join("dish_order","dish_order.order_id","=","orders.id")->
                join("dishes","dishes.id","=","dish_order.dish_id")->
                where("dishes.caterer_id",$caterer_id)->
                select("orders.*")->
                distinct()->
                orderBy("orders.id")->
                paginate(10);
            }
            else
                $orders = Order::where("id",-1)->paginate(10);
        }else
            $orders = Order::paginate(10);

        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     */
    public function show(Order $order)
    {
        $user = Auth::user();
        $id = Auth::id();
        if(!$user->is_admin){
             $order_user_id = DB::table("orders")->
                 join("dish_order","dish_order.order_id","=","orders.id")->
                 join("dishes","dishes.id","=","dish_order.dish_id")->
                 join("caterers", "caterers.id", "=", "caterer_id")
                    ->where('orders.id', $order->id)->
                 value('user_id');
                if($order_user_id !== $id){
                    abort('403');
                }
        }
        return view("admin.orders.show", compact("order"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     */
    public function edit(Order $order)
    {
        $user = Auth::user();
        $id = Auth::id();
        if(!$user->is_admin){
             $order_user_id = DB::table("orders")->
                 join("dish_order","dish_order.order_id","=","orders.id")->
                 join("dishes","dishes.id","=","dish_order.dish_id")->
                 join("caterers", "caterers.id", "=", "caterer_id")
                    ->where('orders.id', $order->id)->
                 value('user_id');
                if($order_user_id !== $id){
                    abort('403');
                }
        }
        return view('admin.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $data = $request->validated();
        $order->update($data);

        return redirect()->route('admin.orders.show', $order->id)->with('message', "L'ordine $order->id realizzato da $order->receiver il $order->created_at è stato modificato correttamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     */
    public function destroy(Order $order)
    {
        $user = Auth::user();
        $id = Auth::id();
        if(!$user->is_admin){
             $order_user_id = DB::table("orders")->
                 join("dish_order","dish_order.order_id","=","orders.id")->
                 join("dishes","dishes.id","=","dish_order.dish_id")->
                 join("caterers", "caterers.id", "=", "caterer_id")
                    ->where('orders.id', $order->id)->
                 value('user_id');
                if($order_user_id !== $id){
                    abort('403');
                }
        }
        $order->delete();
        return redirect()->route('admin.orders.index')->with('message', "L'ordine $order->id realizzato da $order->receiver il $order->created_at è stato eliminato correttamente");
    }
}
