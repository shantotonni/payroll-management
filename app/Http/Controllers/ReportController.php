<?php

namespace App\Http\Controllers;

use App\History;
use App\Service;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $report = History::join('client_services', 'client_service_history.client_users_id', '=', 'client_services.client_users_id')
            ->join('services', 'client_services.services_id', '=', 'services.id')
            ->select('client_service_history.id as history_id','client_service_history.*','client_services.*','services.*')
            ->groupBy('client_service_history.client_users_id')
            ->get();


        return view('report.index', compact('report'));
    }


    public function show($id)
    {

        $report = History::join('client_services', 'client_service_history.client_users_id', '=', 'client_services.client_users_id')
            ->join('services', 'client_services.services_id', '=', 'services.id')
            ->select('client_service_history.id as history_id','client_service_history.*','client_services.*','services.*')
            ->where('client_service_history.id',$id)
            ->groupBy('client_service_history.client_users_id')
            ->first();
        //dd($report);

        return view('report.show', compact('report'));


    }

    public function reportServiceShow($id)
    {
        $services=Service::find($id);

        return view('report.service_show',compact('services'));

    }


}
