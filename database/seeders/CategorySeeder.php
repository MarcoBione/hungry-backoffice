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
                'name' => 'Pizza',
                'description' => 'Le migliori pizze fatte in casa.',
                'image' => 'https://esempio.com/immagini/pizza.jpg',
            ],
            [
                'name' => 'Hamburger',
                'description' => 'Gustosi hamburger con ingredienti freschi.',
                'image' => 'https://esempio.com/immagini/hamburger.jpg',
            ],
            [
                'name' => 'Pasta',
                'description' => 'Deliziose paste fatte a mano.',
                'image' => 'https://esempio.com/immagini/pasta.jpg',
            ],
            [
                'name' => 'Sushi',
                'description' => 'Sushi fresco e autentico.',
                'image' => 'https://esempio.com/immagini/sushi.jpg',
            ],
            [
                'name' => 'Gelato',
                'description' => 'Gelato artigianale in una varietà di gusti.',
                'image' => 'https://esempio.com/immagini/gelato.jpg',
            ],
            [
                'name' => 'Barbecue',
                'description' => 'Carne alla griglia succulenta e marinata.',
                'image' => 'https://esempio.com/immagini/barbecue.jpg',
            ],
            [
                'name' => 'Caffè',
                'description' => 'Aromi intensi e prelibati di caffè.',
                'image' => 'https://esempio.com/immagini/caffe.jpg',
            ],
            [
                'name' => 'Vegetariano',
                'description' => 'Piatti vegetariani gustosi e salutari.',
                'image' => 'https://esempio.com/immagini/vegetariano.jpg',
            ],
            [
                'name' => 'Pesce',
                'description' => 'Pesce fresco e delizioso.',
                'image' => 'https://esempio.com/immagini/frutti_di_mare.jpg',
            ],
            [
                'name' => 'Dolci',
                'description' => 'Dolci deliziosi e irresistibili.',
                'image' => 'https://esempio.com/immagini/dolci.jpg',
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
