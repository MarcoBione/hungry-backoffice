<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;
use Illuminate\Support\Str;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dishes = [
            [
                'name' => 'Margherita',
                'description' => 'Pomodoro, mozzarella, basilico',
                'price' => 7.00,
                'visible' => true,
                'image'=> '',
                'tipologies'=> 'pizza, pizza rossa'
            ],
            [
                'name' => 'Ravioli al vapore',
                'description' => '',
                'price' => 5.00,
                'visible' => true,
                'image'=> '',
                'tipologies'=> 'primi piatti'
            ],
            [
                'name' => 'Branzino all\'isolana',
                'description' => 'pesce al forno con pomodorini e olive',
                'price' => 17.00,
                'visible' => true,
                'image'=> '',
                'tipologies'=> 'secondi, secondi di pesce'
            ],
            [
                'name' => 'Hamburger Classico',
                'description' => 'Hamburger di chianina con pomodoro a fette, lattuga, maionese',
                'price' => 13.00,
                'visible' => true,
                'image'=> '',
                'tipologies'=> 'hamburger'
            ],
            [
                'name' => 'Involtini primavera',
                'description' => 'verza, carote, zucchine',
                'price' => 5.00,
                'visible' => true,
                'image'=> '',
                'tipologies'=> 'antipasti, vegetariano'
            ],
            [
                'name' => 'Tiramisu',
                'description' => '',
                'price' => 6.00,
                'visible' => false,
                'image'=> '',
                'tipologies'=> 'dolci e dessert'
            ],
            [
                'name' => 'Cheung Fun con Manzo',
                'description' => 'rotolo di vermicelli al vapore cantonese',
                'price' => 8.00,
                'visible' => true,
                'image'=> '',
                'tipologies'=> 'secondi, secondi di carne'
            ],
            [
                'name' => 'Patatine fritte',
                'description' => '',
                'price' => 5.00,
                'visible' => true,
                'image'=> '',
                'tipologies'=> 'snack, contorni, prodotto surgelato'
            ],
            [
                'name' => 'Capricciosa',
                'description' => 'pomodoro, mozzarella di Bufala, carciofi, funghi, cotto e olive',
                'price' => 13.50,
                'visible' => true,
                'image'=> '',
                'tipologies'=> 'pizza, pizza rossa'
            ],
            [
                'name' => 'Pancit Bihon',
                'description' => 'tipico piatto della cucina filippina con spaghetit di riso, maiale e gamberi',
                'price' => 7.50,
                'visible' => true,
                'image'=> '',
                'tipologies'=> 'primi piatti'
            ],
            [
                'name' => 'Pork Bicol',
                'description' => 'pancetta di maiale con latte di cocco',
                'price' => 13.00,
                'visible' => true,
                'image'=> '',
                'tipologies'=> 'antipasto, piccante'
            ],
            [
                'name' => 'Birra Heineken',
                'description' => '33cl',
                'price' => 4.00,
                'visible' => true,
                'image'=> '',
                'tipologies'=> 'bevande'
            ],
            [
                'name' => 'Coca cola',
                'description' => 'lattina',
                'price' => 2.50,
                'visible' => true,
                'image'=> '',
                'tipologies'=> 'bevande'
            ],
            [
                'name' => 'Grigliata mista',
                'description' => '',
                'price' => 18.00,
                'visible' => true,
                'image'=> '',
                'tipologies'=> 'secondi, secondi di carne, grill'
            ],
            [
                'name' => 'Spaghetti alla carbonara',
                'description' => '',
                'price' => 6.90,
                'visible' => true,
                'image'=> '',
                'tipologies'=> 'primi piatti'
            ],
        ];
        foreach($dishes as $dish){
            $new_dish = new Dish();
            $new_dish->name = $dish['name'];
            $new_dish->slug = Str::slug($new_dish->name, '-');
            $new_dish->description = $dish['description'];
            $new_dish->price = $dish['price'];
            $new_dish->visible = $dish['visible'];
            $new_dish->image = $dish['image'];
            $new_dish->tipologies = $dish['tipologies'];
            $new_dish->save();
        }
    }
}
