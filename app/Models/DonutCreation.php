<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonutCreation extends Model
{
    use HasFactory;

    protected $table = 'donut_creation';
    protected $primaryKey = 'id_creation';
    protected $fillable = ['id_donat', 'id_glaze', 'id_topping', 'total_harga'];

    public function donat()
    {
        return $this->belongsTo(Donat::class, 'id_donat', 'id_donat');
    }

    public function glaze()
    {
        return $this->belongsTo(Glaze::class, 'id_glaze', 'id_glaze');
    }

    public function topping()
    {
        return $this->belongsTo(Topping::class, 'id_topping', 'id_topping');
    }
}