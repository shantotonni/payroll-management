<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $service=Service::orderBy('created_at','desc')->get();
        return view('services.index',compact('service'));

    }

    public function create()
    {
        $services=new Service();

        return view('services.create',compact('services'));

    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'valid_from_date'=>'required',
            'valid_to_date'=>'required',
            'preferred_time'=>'required'
        ]);

        if ($validator->fails()) {

            return Redirect::route('services.create')->withErrors($validator)->withInput();
        }

        $service=new Service();
        $service->title=$request->title;
        $service->slug=$request->slug;
        $service->description=$request->description;
        $service->valid_from_date=$request->valid_from_date;
        $service->valid_to_date=$request->valid_to_date;
        $service->preferred_time=$request->preferred_time;
        $service->type=$request->type;
        $service->status=$request->status;
        $service->save();

        return Redirect::route('services.index')->with('msg','Service Created Successfully');

    }

    public function show($id){

        $services=Service::find($id);
        return view('services.show',compact('services'));
    }

    public function edit($id){

        $services=Service::find($id);

        return view('services.edit',compact('services'));
    }


    public function update(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'valid_from_date'=>'required',
            'valid_to_date'=>'required',
            'preferred_time'=>'required'
        ]);

        if ($validator->fails()) {

            return Redirect::route('services.edit')->withErrors($validator)->withInput();
        }

        $service=Service::find($id);
        $service->title=$request->title;
        $service->slug=$request->slug;
        $service->description=$request->description;
        $service->valid_from_date=$request->valid_from_date;
        $service->valid_to_date=$request->valid_to_date;
        $service->preferred_time=$request->preferred_time;
        $service->type=$request->type;
        $service->status=$request->status;
        $service->save();

        return Redirect::route('services.index')->with('msg','Service Update Successfully');
    }

    public function delete($id){

        $response = [];
        $response['result'] = 'error';
        $response['message'] = 'Unknown';

        $service = Service::where('id', $id)->first();

        try {
            if (count($service) > 0) {
                if ($service->delete()) {

                    $response['result'] = 'success';
                    $response['message'] = 'Service Deleted Successfully.';
                } else {
                    $response['message'] = 'Unable to remove Client';
                }
            } else {
                $response['message'] = 'Service data not found.';
            }
        } catch (\Throwable $e) {
            $response['message'] = $e->getMessage();
        }

        return json_encode($response);

    }


}
