<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksi";
    protected $fillable = ["no_fak","id_customer","id_barang","jlh_trans"];

    public function customer()
    {
    return $this->belongsTo(Customer::class, 'id_customer');
    }

public function barang()
    {
    return $this->belongsTo(Barang::class, 'id_barang');
    }
}


