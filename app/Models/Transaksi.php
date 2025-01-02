<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = ['id_detail_transaksi', 'id_karyawan', 'tanggal'];

    public function detailTransaksi()
    {
        return $this->belongsTo(DetailTransaksi::class, 'id_detail_transaksi', 'id_detail_transaksi');
    }

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan', 'id_karyawan');
    }
}