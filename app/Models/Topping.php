<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topping extends Model
{
    use HasFactory;

    // protected $table = 'topping';
    // protected $primaryKey = 'id_topping';
    // protected $fillable = ['nama', 'deskripsi'];

    // public function donutCreations()
    // {
    //     return $this->hasMany(DonutCreation::class, 'id_topping', 'id_topping');
    // }

    protected $primaryKey = 'id_topping';
    protected $fillable = ['name', 'description', 'price', 'image', 'status'];
}