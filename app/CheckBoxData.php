<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckBoxData extends Model
{
    protected $table='check_box_data';


    protected $fillable = [
        'users_id',
        'check_box_data'
    ];


    public function check_box_data(){

        return $this->belongsTo('App\User','user_id');

    }
}
