<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";
    protected $fillable = ["nama" , "jenis" , "id_merk" , "harga", "stok" ,"satuan"] ;


    public function merk()
    {
        return $this->belongsTo(Merk::class, 'id_merk');
    }
}


