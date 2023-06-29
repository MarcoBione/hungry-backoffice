<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    //protected $fillable = ['slug', 'name', 'description', 'price', 'visible', 'image', 'tipologies', 'caterer_id'];

    // public function caterer(){
    //     return $this->belongsTo(Caterer::class);
    // }
    // public function orders(){
    //     return $this->belongsToMany(Order::class);
    // }
}
