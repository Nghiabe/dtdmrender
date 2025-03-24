<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false ;
    protected $table = 'products';
    protected $fillable = [ 'product_id','Title', 'Category_ID', 'Price','Discount', 'Thumbnail', 'quantity', 'hot', 'sale', 'new' ];

}
