<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientService extends Model
{
    protected $table='client_services';


    protected $fillable = [
        'client_users_id',
        'services_id'
    ];


    public function services(){

        return $this->belongsTo('App\Service','services_id');

    }
}
