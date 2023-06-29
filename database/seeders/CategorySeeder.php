<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            [
                'name' => 'Pizzeria',
                'description' => 'Le migliori pizze genuine come quelle fatte in casa.',
                'image' => 'https://esempio.com/immagini/pizza.jpg',
            ],
            [
                'name' => 'Hamburgeria',
                'description' => 'Gustosi hamburger con ingredienti freschi.',
                'image' => 'https://esempio.com/immagini/hamburger.jpg',
            ],
            [
                'name' => 'kebab',
                'description' => 'Ottimo kebab di qualitá garatita',
                'image' => 'https://esempio.com/immagini/kebab.jpg',
            ],
            [
                'name' => 'Sushi',
                'description' => 'Sushi fresco e autentico.',
                'image' => 'https://esempio.com/immagini/sushi.jpg',
            ],
            [
                'name' => 'Thailandese',
                'description' => '',
                'image' => 'https://esempio.com/immagini/thai.jpg',
            ],
            [
                'name' => 'Cinese',
                'description' => 'Sapori orientali decisi dagli aromi vari e intriganti.',
                'image' => 'https://esempio.com/immagini/cinese.jpg',
            ],
            [
                'name' => 'Italiano',
                'description' => 'Piatti italiani pieni di tradizione e gusto',
                'image' => 'https://esempio.com/immagini/italiano.jpg',
            ],
            [
                'name' => 'Piadineria',
                'description' => 'Piadine di tutti i tipi e condimenti a scelta.',
                'image' => 'https://esempio.com/immagini/piadineria.jpg',
            ],
            [
                'name' => 'Messicano',
                'description' => 'Prelibatezze dai sapori forti e speziati.',
                'image' => 'https://esempio.com/immagini/messican.jpg',
            ],
            [
                'name' => 'Gelateria',
                'description' => 'Gelato artigianale in una varietà di gusti.',
                'image' => 'https://esempio.com/immagini/gelato.jpg',
            ],
        ];


        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category['name'];
            $newCategory->description = $category['description'];
            $newCategory->image = $category['image'];
            $newCategory->save();
        }
    }
}
