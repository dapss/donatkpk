<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';
    protected $primaryKey = 'id_karyawan';
    protected $fillable = ['nama', 'alamat', 'gaji', 'telp'];

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'id_karyawan', 'id_karyawan');
    }
}