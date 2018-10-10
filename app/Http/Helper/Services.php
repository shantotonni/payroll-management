<?php
/**
 * Created by PhpStorm.
 * User: shojib
 * Date: 1/10/18
 * Time: 4:12 PM
 */

namespace App\Http\Helper;

use App\ClientService;

class Services
{

    public function AllServices($id){

        $client=ClientService::where('client_users_id',$id)->get();
        return $client;
    }

}