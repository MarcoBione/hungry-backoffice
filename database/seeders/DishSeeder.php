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
        $dishes = config("dataseeder.dishes");
        foreach($dishes as $dish){
            $new_dish = new Dish();
            $new_dish->name = $dish['name'];
            $new_dish->slug = Str::slug($new_dish->name, '-');
            $new_dish->description = $dish['description'];
            $new_dish->price = $dish['price'];
            $new_dish->visible = $dish['visible'];
            $new_dish->image = $dish['image'];
            $new_dish->tipologies = $dish['tipologies'];
            $new_dish->caterer_id = $dish['caterer_id'];
            $new_dish->save();
        }
    }
}
