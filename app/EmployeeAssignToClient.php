<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeAssignToClient extends Model
{
    protected $table='employee_assign_to_client';


    protected $fillable = [
        'employee_users_id',
        'client_users_id'
    ];


    public function employee(){

        return $this->belongsTo('App\User','employee_users_id');

    }

    public function client(){

        return $this->belongsTo('App\User','client_users_id');

    }
}
