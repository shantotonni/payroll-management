<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryState extends Model
{

    protected $table='country_state';

    protected $fillable = [
        'country_id',
        'code',
        'title',
        'created_by',
        'updated_by',
    ];


    public function country(){

        return $this->belongsTo('App\Country','country_id');

    }

}
