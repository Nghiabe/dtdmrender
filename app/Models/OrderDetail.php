<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;

class OrderDetail extends Model
{

    public $timestamps = false ;
    protected $table = 'order_details';
    protected $fillable = [ 'order_id','product_id', 'price', 'quantity'];

}
?>
