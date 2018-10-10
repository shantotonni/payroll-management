<?php

namespace App\Http\Controllers;

use App\ClientService;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AssignForClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $client=User::where('type','consumer')
            ->where('status','active')
            ->get();
        $service=Service::where('status','active')->get();
        $client_service_all=ClientService::join('users','client_services.client_users_id','=','users.id')
            ->join('services','client_services.services_id','=','services.id')
            ->select ("users.first_name", "services.title","client_services.*")
            ->where('users.type','consumer')
            ->get();
       // dd($client_service_all);

        $client_service=new ClientService();

        return view('assign_client.index',compact('client','service','client_service','client_service_all'));

    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'client_users_id' => 'required',
            'services_id' => 'required',
        ]);

        if ($validator->fails()) {

            $response['message'] = 'Pleas Select Client and Services ';
            return json_encode($response);
        }



        $response = [];
        $response['result'] = 'error';
        $response['message'] = 'Unknown';
        $input = $request->all();

        $model = new ClientService();
        $model->client_users_id = $input['client_users_id'];
        $model->services_id = $input['services_id'];

        if ($model->save()) {

            $response['result'] = 'success';
            $response['message'] = 'Client Services Created successfully.';

        } else {

            $response['message'] = 'Client Services Not Created';
        }

        return json_encode($response);


    }

    public function update(Request $request){

        $response = [];
        $response['result'] = 'error';
        $response['message'] = 'Unknown';
        //$input = $request->all();

        $model = ClientService::where('id',$request->dataid)->first();

        $model->client_users_id =$request->client_users_id;
        $model->services_id = $request->services_id;

        if ($model->save()) {

            $response['result'] = 'success';
            $response['message'] = 'Client Services Updated successfully.';

        } else {

            $response['message'] = 'Client Services Not Updated';
        }

        return json_encode($response);
    }


    public function delete($id)
    {
        $response = [];
        $response['result'] = 'error';
        $response['message'] = 'Unknown';

        $data = ClientService::where('id', $id)->first();

        try {
            if (count($data) > 0) {
                if ($data->delete()) {

                    $response['result'] = 'success';
                    $response['message'] = 'Assign Client Services removed successfully.';
                } else {
                    $response['message'] = 'Unable to remove Assign Client Services';
                }
            } else {
                $response['message'] = 'Assign Client Services data not found.';
            }
        } catch (\Throwable $e) {
            $response['message'] = $e->getMessage();
        }

        return json_encode($response);
    }


}
