<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donut extends Model
{
    use HasFactory;

    // // Tentukan nama tabel jika tidak sesuai dengan konvensi penamaan
    // protected $table = 'donuts';

    // // Tentukan kolom yang dapat diisi secara massal
    // protected $fillable = [
    //     'name',
    //     'description',
    //     'price',
    //     'image',
    //     'is_featured',
    // ];

    // // Jika Anda memiliki relasi dengan model lain, misalnya ulasan
    // public function reviews()
    // {
    //     return $this->hasMany(Review::class);
    // }

    // protected $table = 'tabel_donat';
    protected $primaryKey = 'id_donut';
    protected $fillable = ['name', 'description', 'price', 'image', 'status', 'is_bestseller'];
}