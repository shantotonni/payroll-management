<?php

namespace App\Http\Controllers;

use App\EmployeeService;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AssignToEmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $employee=User::where('type','employee')
            ->where('status','active')
            ->get();
        $service=Service::where('status','active')->get();
        $employee_service_all=EmployeeService::join('users','employee_services.employee_users_id','=','users.id')
        ->join('services','employee_services.services_id','=','services.id')
        ->select ("users.first_name", "services.title","employee_services.*")
        ->where('users.type','employee')
        ->get();

        $employee_service=new EmployeeService();

        return view('assign_employee.index',compact('employee','service','employee_service','employee_service_all'));

    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'employee_users_id' => 'required',
            'services_id' => 'required',
        ]);

        if ($validator->fails()) {

            $response['message'] = 'Pleas Select Employee and Services ';
            return json_encode($response);
        }

        $response = [];
        $response['result'] = 'error';
        $response['message'] = 'Unknown';
        $input = $request->all();

        $model = new EmployeeService();
        $model->employee_users_id = $input['employee_users_id'];
        $model->services_id = $input['services_id'];


        if ($model->save()) {

            $response['result'] = 'success';
            $response['message'] = 'Employee Services Created successfully.';

        } else {

            $response['message'] = 'Employee Services Not Created';
        }

        return json_encode($response);
    }

    public function update(Request $request){

        $response = [];
        $response['result'] = 'error';
        $response['message'] = 'Unknown';
        //$input = $request->all();

        $model = EmployeeService::where('id',$request->dataid)->first();

        $model->employee_users_id =$request->employee_users_id;
        $model->services_id = $request->services_id;


        if ($model->save()) {

            $response['result'] = 'success';
            $response['message'] = 'Employee Services Updated successfully.';

        } else {

            $response['message'] = 'Employee Services Not Updated';
        }

        return json_encode($response);
    }


    public function delete($id)
    {
        $response = [];
        $response['result'] = 'error';
        $response['message'] = 'Unknown';

        $data = EmployeeService::where('id', $id)->first();

        try {
            if (count($data) > 0) {
                if ($data->delete()) {

                    $response['result'] = 'success';
                    $response['message'] = 'Assign Employee Services removed successfully.';
                } else {
                    $response['message'] = 'Unable to remove Assign Employee Services';
                }
            } else {
                $response['message'] = 'Assign Employee Services data not found.';
            }
        } catch (\Throwable $e) {
            $response['message'] = $e->getMessage();
        }

        return json_encode($response);
    }



}
