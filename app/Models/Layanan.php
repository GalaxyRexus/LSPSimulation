<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Transaksi;

class Layanan extends Model
{
    public $timestamps = false;

    protected $primarykey = 'id_layanan';
    protected $table = "tb_layanan";

   protected $fillable = ['nama_layanan','harga_per_kg'];

   public function Layanan (){

    return $this->hasMany(Transaksi::class,'layanan','nama_layanan');

   }
}
