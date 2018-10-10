<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'verifyToken',
        'password',
        'middle_initial',
        'medicaid_id',
        'gender',
        'telephone_number',
        'cell_phone',
        'permanent_address',
        'city',
        'country',
        'state',
        'zip_code',
        'date_of_birth',
        'type',
        'created_by',
        'updated_by',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile(){

        return $this->hasOne('App\UserProfile','user_id');

    }

    public function check_box_data(){

        return $this->hasMany('App\CheckBoxData','users_id');

    }

    public function acknowledgement_check_box_data(){

        return $this->hasMany('App\AcknowledgementCheckBoxData','users_id');

    }


}
