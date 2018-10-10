<?php

namespace App\Http\Controllers;

use App\EmployeeAssignToClient;
use App\User;
use Illuminate\Http\Request;

class EmployeeAssignToClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $employee=User::where('type','employee')
            ->where('status','active')
            ->get();
        $client=User::where('type','consumer')
            ->where('status','active')
            ->get();

        $employee_to_client_all=EmployeeAssignToClient::all();

        $employee_assign_to_client=new EmployeeAssignToClient();

        return view('employee_assign_to_client.index',compact('client','employee','employee_assign_to_client','employee_to_client_all'));

    }

    public function store(Request $request){

        $response = [];
        $response['result'] = 'error';
        $response['message'] = 'Unknown';
        $input = $request->all();

        if ($input['employee_users_id']=='' && $input['client_users_id']==''){

            $response['message'] = 'Please Select Employee and Client';
        }
        else {

            $check_exist = EmployeeAssignToClient::where('employee_users_id', $input['employee_users_id'])->where('client_users_id', $input['client_users_id'])->first();
            if (count($check_exist) > 0) {
                $response['message'] = 'Already exists.';
                return json_encode($response);
            }

            $model = new EmployeeAssignToClient();
            $model->employee_users_id = $input['employee_users_id'];
            $model->client_users_id = $input['client_users_id'];


            if ($model->save()) {

                $response['result'] = 'success';
                $response['message'] = 'Employee Assign To Client Services Created successfully.';

            } else {

                $response['message'] = 'Employee Assign To Client Services Not Created';
            }
        }

        return json_encode($response);
    }

    public function update(Request $request){

        $response = [];
        $response['result'] = 'error';
        $response['message'] = 'Unknown';
        //$input = $request->all();

        $model = EmployeeAssignToClient::where('id',$request->dataid)->first();

        $model->employee_users_id =$request->employee_users_id;
        $model->client_users_id = $request->client_users_id;


        if ($model->save()) {

            $response['result'] = 'success';
            $response['message'] = 'Employee Assign To Client Services Updated successfully.';

        } else {

            $response['message'] = 'Employee Assign To Client Services Not Updated';
        }

        return json_encode($response);
    }


    public function delete($id)
    {
        $response = [];
        $response['result'] = 'error';
        $response['message'] = 'Unknown';

        $data = EmployeeAssignToClient::where('id', $id)->first();


        try {
            if (count($data) > 0) {
                if ($data->delete()) {

                    $response['result'] = 'success';
                    $response['message'] = 'Employee Assign To Client Services removed successfully.';
                } else {
                    $response['message'] = 'Unable to remove Employee Assign To Client Services';
                }
            } else {
                $response['message'] = 'Employee Assign To Client Services data not found.';
            }
        } catch (\Throwable $e) {
            $response['message'] = $e->getMessage();
        }

        return json_encode($response);
    }

}
