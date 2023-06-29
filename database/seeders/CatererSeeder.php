<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Caterer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CatererSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $ristoranti = [
            [
                'name' => 'Pizzeria Roma',
                'address' => 'Via Roma, 1',
                'image' => 'https://i.pinimg.com/564x/ae/5e/24/ae5e2403c0396bb3c16539f3879be22d.jpg',
                'phone_number' => '02 7056 9901'
            ],
            [
                'name' => 'Sushi Lab',
                'address' => 'Via Milano, 2',
                'image' => 'https://i.pinimg.com/564x/cc/8c/82/cc8c82057916ac5cb8ee7122e021e266.jpg',
                'phone_number' => '02 2193 0011'
            ],
            [
                'name' => 'Hong Kong',
                'address' => 'Via Venezia, 3',
                'image' => 'https://i.pinimg.com/564x/6d/be/82/6dbe82e9682e415915a5d9e7fb0e1c7b.jpg',
                'phone_number' => '02 9821 6634'
            ],
            [
                'name' => 'La Brace Food Experience',
                'address' => 'Via Firenze, 4',
                'image' => 'https://i.pinimg.com/564x/63/5e/3d/635e3d0fbec3931fba332535a6671a6a.jpg',
                'phone_number' => '02 0034 5671 '
            ],
            [
                'name' => 'Chiquito',
                'address' => 'Via Napoli, 5',
                'image' => 'https://i.pinimg.com/564x/86/bd/3c/86bd3c1bf93620167ab1485be959d3f2.jpg',
                'phone_number' => '02 4768 1121'
            ]
        ];

        foreach ($ristoranti as $ristorante) {
            $newCaterer = new Caterer();
            $newCaterer->name = $ristorante['name'];
            $newCaterer->address = $ristorante['address'];
            $newCaterer->image = $ristorante['image'];
            $newCaterer->phone_number = $ristorante['phone_number'];
            $newCaterer->slug = Str::slug($ristorante['name'], '-');
        }


    }
}
