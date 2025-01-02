<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donat extends Model
{
    use HasFactory;

    protected $table = 'donat';
    protected $primaryKey = 'id_donat';
    protected $fillable = ['nama', 'deskripsi', 'harga'];

    public function donutCreations()
    {
        return $this->hasMany(DonutCreation::class, 'id_donat', 'id_donat');
    }
}