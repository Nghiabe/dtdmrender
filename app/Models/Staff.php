<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Staff extends Model
{

    public $timestamps = false ;
    protected $table = 'staff';
    protected $fillable = [ 'staff_name','staff_phone', 'staff_address','staff_position', 'id_user' ];

}
?>
