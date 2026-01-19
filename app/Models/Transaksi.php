<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'tb_transaksi';
    public $timestamps = false;

    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'waktu_transaksi',
        'nama_pelanggan',
        'id_layanan',
        'berat',
        'keterangan',
        'pembayaran',
    ];

    public function layanan(){
        return $this->belongsTo(Layanan::class, 'id_layanan','id_layanan');
    }
}
