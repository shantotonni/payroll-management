<?php

namespace App\Http\Controllers;

use App\AcknowledgementCheckBoxData;
use App\CheckBoxData;
use App\CountryState;
use App\Http\Requests\EmployeeRequest;
use App\TransactionCode;
use App\User;
use App\UserProfile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Mpdf\Config\ConfigVariables;
use Mpdf\Config\FontVariables;
use Mpdf\Mpdf;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['create', 'store', 'pdf_form', 'accountVerify']]);
    }

    public function index()
    {

        $user=Auth::user()->type;

        if ($user=='employee'){
            $employee = User::where('type', 'employee')
                 ->where('id',Auth::user()->id)
                ->orderBy('created_at', 'desc')
                ->get();

        }else{

            $employee = User::where('type', 'employee')
                ->orderBy('created_at', 'desc')
                ->get();
        }


        return view('employee.index', compact('employee'));
    }

    public function create()
    {

        $state = CountryState::pluck('title', 'id');
        $employee = new User();
        return view('employee.create', compact('employee', 'state'));
    }

    public function admin_create_employee()
    {
        $state = CountryState::pluck('title', 'id');
        $employee = new User();
        return view('employee.admin_create_employee', compact('employee', 'state'));
    }

    public function admin_create_employee_store(EmployeeRequest $request)
    {

        $transaction = TransactionCode::where('type', 'employee-id')->first();

        if (count($transaction) > 0) {
            $employee = $transaction;
            $employee_id = $employee->last_number;
            $employee_id = $employee_id + 1;
        } else {
            $employee_id = 1;
        }

        $employee_id = str_pad($employee_id, 6, '0', STR_PAD_LEFT);


        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->telephone_number = $request->telephone_number;
        $user->cell_phone = $request->cell_phone;
        $user->permanent_address = $request->permanent_address;
        $user->permanent_address_2 = $request->permanent_address_2;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->employee_id = $transaction->code . Carbon::now() . $employee_id;
        $user->employee_mi = $request->employee_mi;
        $user->employee_ssn = $request->employee_ssn;
        $user->zip_code = $request->zip_code;
        $user->date_of_birth = $request->date_of_birth;
        $user->type = $request->type;

        if ($user->save()) {

            $profile = new UserProfile();
            $profile->user_id = $user->id;
            $profile->question_1 = $request->question_1;
            $profile->indicate_licenses = $request->indicate_licenses;

            $profile->licence_number = $request->licence_number;
            $profile->licence_expiration_date = $request->licence_expiration_date;
            $profile->lowest_wage_per_hour = $request->lowest_wage_per_hour;
            $profile->lowest_wage_24_hour = $request->lowest_wage_24_hour;
            $profile->date_you_can_start = $request->date_you_can_start;

            $profile->question_2 = $request->question_2;
            $profile->question_3 = $request->question_3;
            $profile->question_4 = $request->question_4;
            $profile->question_5 = $request->question_5;
            $profile->question_6 = $request->question_6;
            $profile->question_7 = $request->question_7;
            $profile->question_8 = $request->question_8;
            $profile->question_9 = $request->question_9;

            $profile->question_4_answer = $request->question_4_answer;
            $profile->question_5_answer = $request->question_5_answer;
            $profile->question_6_answer_date = $request->question_6_answer_date;
            $profile->question_6_answer_location = $request->question_6_answer_location;
            $profile->question_6_answer_supervisor_name = $request->question_6_answer_supervisor_name;
            $profile->question_7_answer_explain = $request->question_7_answer_explain;
            $profile->question_7_answer_limitation = $request->question_7_answer_limitation;
            $profile->question_8_answer_date = $request->question_8_answer_date;
            $profile->question_8_answer_for_whate = $request->question_8_answer_for_whate;
            $profile->reference_company_name = $request->reference_company_name;
            $profile->reference_address = $request->reference_address;
            $profile->reference_person_name = $request->reference_person_name;
            $profile->reference_contact = $request->reference_contact;
            $profile->reference_position_in_company = $request->reference_position_in_company;
            $profile->reference_acquainted = $request->reference_acquainted;

            if ($profile->save()) {

                $transaction = TransactionCode::where('type', 'employee-id')->first();
                $transaction->last_number = $transaction->last_number + 1;
                $transaction->save();
            }


            return Redirect::route('employee.registration.index')->with('msg', 'Employee Registration Successfully');

        }

    }

    public function store(EmployeeRequest $request)
    {


        $transaction = TransactionCode::where('type', 'employee-id')->first();

        if (count($transaction) > 0) {
            $employee = $transaction;
            $employee_id = $employee->last_number;
            $employee_id = $employee_id + 1;
        } else {
            $employee_id = 1;
        }


        $employee_id = str_pad($employee_id, 6, '0', STR_PAD_LEFT);

        $pw = str_random(6);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt('employee');
        $user->verifyToken = Str::random(40);
        $user->gender = $request->gender;
        $user->telephone_number = $request->telephone_number;
        $user->cell_phone = $request->cell_phone;
        $user->permanent_address = $request->permanent_address;
        $user->permanent_address_2 = $request->permanent_address_2;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->employee_id = $transaction->code . Carbon::now() . $employee_id;
        $user->employee_mi = $request->employee_mi;
        $user->employee_ssn = $request->employee_ssn;
        $user->zip_code = $request->zip_code;
        $user->date_of_birth = $request->date_of_birth;
        $user->type = $request->type;
        $user->status = 'active';

        if ($user->save()) {

            $profile = new UserProfile();
            $profile->user_id = $user->id;
            $profile->question_1 = $request->question_1;
            $profile->indicate_licenses = $request->indicate_licenses;

            $profile->licence_number = $request->licence_number;
            $profile->licence_expiration_date = $request->licence_expiration_date;
            $profile->lowest_wage_per_hour = $request->lowest_wage_per_hour;
            $profile->lowest_wage_24_hour = $request->lowest_wage_24_hour;
            $profile->date_you_can_start = $request->date_you_can_start;

            $profile->question_2 = $request->question_2;
            $profile->question_3 = $request->question_3;
            $profile->question_4 = $request->question_4;
            $profile->question_5 = $request->question_5;
            $profile->question_6 = $request->question_6;
            $profile->question_7 = $request->question_7;
            $profile->question_8 = $request->question_8;
            $profile->question_9 = $request->question_9;

            $profile->question_4_answer = $request->question_4_answer;
            $profile->question_5_answer = $request->question_5_answer;
            $profile->question_6_answer_date = $request->question_6_answer_date;
            $profile->question_6_answer_location = $request->question_6_answer_location;
            $profile->question_6_answer_supervisor_name = $request->question_6_answer_supervisor_name;
            $profile->question_7_answer_explain = $request->question_7_answer_explain;
            $profile->question_7_answer_limitation = $request->question_7_answer_limitation;
            $profile->question_8_answer_date = $request->question_8_answer_date;
            $profile->question_8_answer_for_whate = $request->question_8_answer_for_whate;
            $profile->reference_company_name = $request->reference_company_name;
            $profile->reference_address = $request->reference_address;
            $profile->reference_person_name = $request->reference_person_name;
            $profile->reference_contact = $request->reference_contact;
            $profile->reference_position_in_company = $request->reference_position_in_company;
            $profile->reference_acquainted = $request->reference_acquainted;

            if ($profile->save()) {

                $transaction = TransactionCode::where('type', 'employee-id')->first();
                $transaction->last_number = $transaction->last_number + 1;
                $transaction->save();
            }

//
//            Mail::send('employee.mail', array('user' => $user, 'password' => $pw), function ($messeg) {
//
//                $messeg->to(Input::get('email'))->subject('Employee mail send');
//
//            });


           // return Redirect::route('login')->with('msg', 'Registration Successfully.Please Verify Your Email To Active Your Account');
            return Redirect::route('login')->with('msg', 'Registration Successfully.Please Login');

        }
    }


    public function edit($id)
    {

        $state = CountryState::pluck('title', 'id');
        $employee = User::find($id);
        return view('employee.edit', compact('employee', 'state'));
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->telephone_number = $request->telephone_number;
        $user->cell_phone = $request->cell_phone;
        $user->permanent_address = $request->permanent_address;
        $user->permanent_address_2 = $request->permanent_address_2;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->employee_mi = $request->employee_mi;
        $user->employee_ssn = $request->employee_ssn;
        $user->zip_code = $request->zip_code;
        $user->date_of_birth = $request->date_of_birth;
        $user->type = $request->type;

        if ($user->save()) {

            UserProfile::where('user_id', $user->id)->delete();

            $profile = new UserProfile();

            $profile->user_id = $user->id;
            $profile->question_1 = $request->question_1;
            $profile->indicate_licenses = $request->indicate_licenses;

            $profile->licence_number = $request->licence_number;
            $profile->licence_expiration_date = $request->licence_expiration_date;
            $profile->lowest_wage_per_hour = $request->lowest_wage_per_hour;
            $profile->lowest_wage_24_hour = $request->lowest_wage_24_hour;
            $profile->date_you_can_start = $request->date_you_can_start;

            $profile->question_2 = $request->question_2;
            $profile->question_3 = $request->question_3;
            $profile->question_4 = $request->question_4;
            $profile->question_5 = $request->question_5;
            $profile->question_6 = $request->question_6;
            $profile->question_7 = $request->question_7;
            $profile->question_8 = $request->question_8;
            $profile->question_9 = $request->question_9;

            $profile->question_4_answer = $request->question_4_answer;
            $profile->question_5_answer = $request->question_5_answer;
            $profile->question_6_answer_date = $request->question_6_answer_date;
            $profile->question_6_answer_location = $request->question_6_answer_location;
            $profile->question_6_answer_supervisor_name = $request->question_6_answer_supervisor_name;
            $profile->question_7_answer_explain = $request->question_7_answer_explain;
            $profile->question_7_answer_limitation = $request->question_7_answer_limitation;
            $profile->question_8_answer_date = $request->question_8_answer_date;
            $profile->question_8_answer_for_whate = $request->question_8_answer_for_whate;
            $profile->reference_company_name = $request->reference_company_name;
            $profile->reference_address = $request->reference_address;
            $profile->reference_person_name = $request->reference_person_name;
            $profile->reference_contact = $request->reference_contact;
            $profile->reference_position_in_company = $request->reference_position_in_company;
            $profile->reference_acquainted = $request->reference_acquainted;
            $profile->save();

            return Redirect::route('employee.registration.index', $id)->with('msg', 'Employee updated Successfully');

        }
    }

    public function show($id)
    {

        $employee = User::find($id);

        return view('employee.show', compact('employee'));
    }

    public function clientInactive($id)
    {

        $client = User::find($id);
        $client->status = 'inactive';
        $client->save();

        return \redirect()->back()->with('msg', 'Employee Inactive');

    }

    public function clientActive($id)
    {

        $client = User::find($id);
        $client->status = 'active';
        $client->save();

        return \redirect()->back()->with('msg', 'Employee Active');

    }


    public function delete($id)
    {

        $response = [];
        $response['result'] = 'error';
        $response['message'] = 'Unknown';

        $employee = User::where('id', $id)->first();

        try {
            if (count($employee) > 0) {
                if ($employee->delete()) {

                    $response['result'] = 'success';
                    $response['message'] = 'Employee Deleted Successfully.';
                } else {
                    $response['message'] = 'Unable to remove Employee';
                }
            } else {
                $response['message'] = 'Employee data not found.';
            }
        } catch (\Throwable $e) {
            $response['message'] = $e->getMessage();
        }

        return json_encode($response);

    }


    public function pdf_form()
    {

        $defaultConfig = (new ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];
        $client = [];

        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => [290, 336],
            'orientation' => 'L',
            'fontDir' => array_merge($fontDirs, [
                public_path() . '/pdffont',
            ]),
            'fontdata' => $fontData + [
                    'siyamrupali' => [
                        'R' => 'Siyamrupali.ttf',
                        'I' => 'Siyamrupali.ttf',
                    ]
                ]
        ]);

        $mpdf->allow_charset_conversion = true;
        $mpdf->charset = 'UTF-8';

        $view = \Illuminate\Support\Facades\View::make('employee._form_pdf', compact('client'));
        $html = $view->render();

        $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');

        $stylesheet = file_get_contents(public_path() . '/css/bootstrap.min.css');
        $mpdf->WriteHTML($stylesheet, 1);

        $mpdf->WriteHTML($html, 2);
        $mpdf->Output();
    }

    public function admin_employee_pdf($id)
    {


        $defaultConfig = (new ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];
        $employee = User::find($id);

        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => [290, 336],
            'orientation' => 'L',
            'fontDir' => array_merge($fontDirs, [
                public_path() . '/pdffont',
            ]),
            'fontdata' => $fontData + [
                    'siyamrupali' => [
                        'R' => 'Siyamrupali.ttf',
                        'I' => 'Siyamrupali.ttf',
                    ]
                ]
        ]);

        $mpdf->allow_charset_conversion = true;
        $mpdf->charset = 'UTF-8';

        $view = \Illuminate\Support\Facades\View::make('employee._pdf', compact('employee'));
        $html = $view->render();


        $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');

        $stylesheet = file_get_contents(public_path() . '/css/bootstrap.min.css');
        $mpdf->WriteHTML($stylesheet, 1);

        $mpdf->WriteHTML($html, 2);
        $mpdf->Output();


    }

    public function accountVerify($email, $verifyToken)
    {

        $user = User::where(['email' => $email, 'verifyToken' => $verifyToken])->first();

        if ($user) {

            User::where(['email' => $email, 'verifyToken' => $verifyToken])->update(['status' => 'active', 'verifyToken' => null]);

            return \redirect()->route('user.login')->with('msg', 'Thanks.For Activate Your Account.Please Login');
        } else {

            return 'User Not Found';
        }

    }

    public function updateImage(Request $request, $id)
    {

        $this->validate($request, [

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'

        ]);

        if ($request->has('image')) {

            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('employee');
            $image->move($destinationPath, $imagename);

            User::where('id', $id)->update(['image' => $imagename]);

            return \redirect()->back()->with('msg', 'Image Uploaded Successfully');
        }


    }


}
