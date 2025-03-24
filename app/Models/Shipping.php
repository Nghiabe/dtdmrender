<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
        'shipping_name','customer_id', 'shipping_address', 'shipping_phone','shipping_email','shipping_notes','shipping_method'
    ];
    protected $primaryKey = 'shipping_id';
    protected $table = 'tbl_shippping';
}
