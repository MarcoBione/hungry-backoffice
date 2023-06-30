<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caterer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'image', 'phone_number', 'slug'];


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function dishes(){
        return $this->belongsToMany(Dish::class);
    }
}
