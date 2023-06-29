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
        $tempArr = [
            [
                "receiver" => "Francesco",
                "phone_number" => "5163497403",
                "status" => "Confermato",
                "notes" => "Il campanello è rotto, urlare quando si è dal cancello",
                "total_price" => 20.5,
                "address" => "Giuseppe Sacconi, 5",
            ],
            [
                "receiver" => "Luca",
                "phone_number" => "3448496195",
                "status" => "Confermato",
                "notes" => "Bussare 3 volte di fila per favore",
                "total_price" => 18.2,
                "address" => "Via Veronese Guarino, 10",
            ],
            [
                "receiver" => "Marta",
                "phone_number" => "8987089354",
                "status" => "Confermato",
                "notes" => "Pulitevi le scarpe prima di entrare",
                "total_price" => 15,
                "address" => "Via Tito Livio, 3",
            ],
            [
                "receiver" => "Erika",
                "phone_number" => "1881621025",
                "status" => "Confermato",
                "notes" => "Non mandate Filiberto a fare la consegna, è un maleducato",
                "total_price" => 6.9,
                "address" => "Via Cadore, 10",
            ],
            [
                "receiver" => "Luana",
                "phone_number" => "7387907535",
                "status" => "Confermato",
                "notes" => "Ho fame, muovetevi",
                "total_price" => 17.5,
                "address" => "Via K.Adenauer, 3",
            ]
            ];
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
