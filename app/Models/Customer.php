<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $table = "customer";
    protected $fillable = ["nama_cus" , "email", "id_data_customer"] ;


    public function merk()
    {
        return $this->belongsTo(DataCustomer::class, 'id_data_customer');
    }
}
