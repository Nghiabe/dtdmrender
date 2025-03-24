<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Social extends Model
{

    public $timestamps = false ;
    protected $table = 'social';
    protected $fillable = ['provider_user_id', 'provider', 'id' ];
    protected $primarykey = 'user_id';

    public function login(){
        return $this->belongsTo('App\Models\User', 'id');
    }

    use HasFactory;
}
