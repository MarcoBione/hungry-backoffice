<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'class', 'image'];

    public function caterers()
    {
        return $this->belongsToMany(Caterer::class);
    }
}
