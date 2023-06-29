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

        $caterers = config('dataseeder.caterers');

        foreach ($caterers as $caterer) {
            $newCaterer = new Caterer();
            $newCaterer->name = $caterer['name'];
            $newCaterer->address = $caterer['address'];
            $newCaterer->image = $caterer['image'];
            $newCaterer->phone_number = $caterer['phone_number'];
            $newCaterer->slug = Str::slug($caterer['name'], '-');
        }


    }
}
