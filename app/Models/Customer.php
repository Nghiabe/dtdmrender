<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;

class Customer extends Model
{

    public $timestamps = false ;
    protected $table = 'customer';
    protected $fillable = [ 'id_user','FullName', 'Name', 'email','Address', 'phone', 'note' ];

}
?>
