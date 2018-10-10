<?php

namespace App\Http\Controllers;

use App\History;
use App\Service;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'test']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $client = User::where('type', 'consumer')->get();
        $employee = User::where('type', 'employee')->get();

        $report = History::join('client_services', 'client_service_history.client_users_id', '=', 'client_services.client_users_id')
            ->join('services', 'client_services.services_id', '=', 'services.id')
            ->select('client_service_history.id as history_id', 'client_service_history.*', 'client_services.*', 'services.*')
            ->groupBy('client_service_history.client_users_id')
            ->count();


        return view('home', compact('client', 'employee', 'services', 'report'));
    }

    public function test()
    {
        return view('test');
    }

    public function userList()
    {

        $user = User::all();

        return view('profile.index', compact('user'));

    }


}
