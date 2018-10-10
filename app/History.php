<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table='client_service_history';

    protected $fillable = [
        'client_users_id',
        'employee_users_id',
        'date',
        'starting_time',
        'end_time',
        'comments',
        'status',
        'created_by',
        'updated_by',
    ];


    public function profile(){

        return $this->hasOne('App\UserProfile','user_id');

    }

    public function client(){

        return $this->belongsTo('App\User','client_users_id');
    }

    public function employee(){

        return $this->belongsTo('App\User','employee_users_id');

    }

}
