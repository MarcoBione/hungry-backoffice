<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function dishes()
    {
        return $this->belongsToMany(Dish::class)->withPivot("quantity","notes");
    }
}
