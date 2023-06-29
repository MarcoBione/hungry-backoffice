<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ordersData = config('dataseeder.orders');
        foreach ($ordersData as $orderData) {
            $order = new Order();
            $order->receiver = $orderData->receiver;
            $order->phone_number = $orderData->phone_number;
            $order->status = $orderData->status;
            $order->notes = $orderData->notes;
            $order->total_price = $orderData->total_price;
            $order->address = $orderData->address;
            $order->save();
        }
    }
}
