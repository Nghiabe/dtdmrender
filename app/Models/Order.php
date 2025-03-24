<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Order extends Model
{

    public $timestamps = false ;
    protected $table = 'order';
    protected $fillable = [ 'customer_id','order_note', 'order_status','order_date', 'ship', 'coupon', 'total' ];

}
?>
