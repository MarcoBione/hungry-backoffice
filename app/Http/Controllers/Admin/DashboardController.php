<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Caterer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $caterer = Caterer::where('user_id', Auth::id())->first();
        $GenOrders = DB::table("orders")->
            join("dish_order","dish_order.order_id","=","orders.id")->
            join("dishes","dishes.id","=","dish_order.dish_id")->
            where("dishes.caterer_id",$caterer->id)->
            whereMonth("orders.created_at", '1')->
            distinct()
            ->sum('orders.total_price');
        $FebOrders = DB::table("orders")->
            join("dish_order","dish_order.order_id","=","orders.id")->
            join("dishes","dishes.id","=","dish_order.dish_id")->
            where("dishes.caterer_id",$caterer->id)->
            whereMonth("orders.created_at", '2')->
            distinct()->
            sum('orders.total_price');
        $MarOrders = DB::table("orders")->
            join("dish_order","dish_order.order_id","=","orders.id")->
            join("dishes","dishes.id","=","dish_order.dish_id")->
            where("dishes.caterer_id",$caterer->id)->
            whereMonth("orders.created_at", '3')->
            distinct()->
            sum('orders.total_price');
        $AprOrders = DB::table("orders")->
            join("dish_order","dish_order.order_id","=","orders.id")->
            join("dishes","dishes.id","=","dish_order.dish_id")->
            where("dishes.caterer_id",$caterer->id)->
            whereMonth("orders.created_at", '4')->
            distinct()->
            sum('orders.total_price');
        $MagOrders = DB::table("orders")->
            join("dish_order","dish_order.order_id","=","orders.id")->
            join("dishes","dishes.id","=","dish_order.dish_id")->
            where("dishes.caterer_id",$caterer->id)->
            whereMonth("orders.created_at", '5')->
            distinct()->
            sum('orders.total_price');
        $GiuOrders = DB::table("orders")->
            join("dish_order","dish_order.order_id","=","orders.id")->
            join("dishes","dishes.id","=","dish_order.dish_id")->
            where("dishes.caterer_id",$caterer->id)->
            whereMonth("orders.created_at", '6')->
            distinct()->
            sum('orders.total_price');
        $LugOrders = DB::table("orders")->
            join("dish_order","dish_order.order_id","=","orders.id")->
            join("dishes","dishes.id","=","dish_order.dish_id")->
            where("dishes.caterer_id",$caterer->id)->
            whereMonth("orders.created_at", '7')->
            distinct()->
            sum('orders.total_price');
        $AgoOrders = DB::table("orders")->
            join("dish_order","dish_order.order_id","=","orders.id")->
            join("dishes","dishes.id","=","dish_order.dish_id")->
            where("dishes.caterer_id",$caterer->id)->
            whereMonth("orders.created_at", '8')->
            distinct()->
            sum('orders.total_price');
        $SepOrders = DB::table("orders")->
            join("dish_order","dish_order.order_id","=","orders.id")->
            join("dishes","dishes.id","=","dish_order.dish_id")->
            where("dishes.caterer_id",$caterer->id)->
            whereMonth("orders.created_at", '9')->
            distinct()->
            sum('orders.total_price');
        $OttOrders = DB::table("orders")->
            join("dish_order","dish_order.order_id","=","orders.id")->
            join("dishes","dishes.id","=","dish_order.dish_id")->
            where("dishes.caterer_id",$caterer->id)->
            whereMonth("orders.created_at", '10')->
            distinct()->
            sum('orders.total_price');
        $NovOrders = DB::table("orders")->
            join("dish_order","dish_order.order_id","=","orders.id")->
            join("dishes","dishes.id","=","dish_order.dish_id")->
            where("dishes.caterer_id",$caterer->id)->
            whereMonth("orders.created_at", '11')->
            distinct()->
            sum('orders.total_price');
        $DicOrders = DB::table("orders")->
            join("dish_order","dish_order.order_id","=","orders.id")->
            join("dishes","dishes.id","=","dish_order.dish_id")->
            where("dishes.caterer_id",$caterer->id)->
            whereMonth("orders.created_at", '12')->
            distinct()->
            sum('orders.total_price');
        $data = [
            'gennaio' => $GenOrders,
            'febbraio' => $FebOrders,
            'marzo' => $MarOrders,
            'aprile' => $AprOrders,
            'maggio' => $MagOrders,
            'giugno' => $GiuOrders,
            'luglio' => $LugOrders,
            'agosto' => $AgoOrders,
            'settembre' => $SepOrders,
            'ottobre' => $OttOrders,
            'novembre' => $NovOrders,
            'dicembre' => $DicOrders,
        ];
        return view('admin.dashboard', $data);
    }
}
