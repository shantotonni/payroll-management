<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeService extends Model
{
    protected $table='employee_services';


    protected $fillable = [
        'employee_users_id',
        'services_id'
    ];


}
