<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{

    public function index(){

        $employee=User::where('id',Auth::user()->id)->first();

        return view('profile.show',compact('employee'));

    }
}
