<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glaze extends Model
{
    use HasFactory;

    // protected $table = 'glaze';
    // protected $primaryKey = 'id_glaze';
    // protected $fillable = ['nama', 'deskripsi'];

    // public function donutCreations()
    // {
    //     return $this->hasMany(DonutCreation::class, 'id_glaze', 'id_glaze');
    // }

    protected $primaryKey = 'id_glaze';
    protected $fillable = ['name', 'description', 'price', 'image', 'status'];
}