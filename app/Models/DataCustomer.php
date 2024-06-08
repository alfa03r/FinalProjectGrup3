<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCustomer extends Model
{
    use HasFactory;
    protected $table = "data_customer";
    protected $fillable = ["phone","alamat","kd_pos","kota"];
}
