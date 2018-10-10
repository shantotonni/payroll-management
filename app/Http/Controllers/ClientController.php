<?php

namespace App\Http\Controllers;

use App\AcknowledgementCheckBoxData;
use App\CheckBoxData;
use App\Country;
use App\CountryState;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\EmployeeRequest;
use App\User;
use App\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Mpdf\Config\ConfigVariables;
use Mpdf\Config\FontVariables;
use Mpdf\Mpdf;
use Symfony\Component\HttpKernel\Client;


class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['create', 'store','pdf_form']]);
    }

    public function index(){

        $user=Auth::user()->type;
        if ($user=='admin'){
            $client=User::where('type','consumer')
                ->orderBy('created_at','desc')->get();

        }else{

            $client=[];
        }


        return view('client.index',compact('client'));
    }

    public function create(){

        $country=Country::pluck('title','id');
        $state=CountryState::pluck('title','id');
        $client = new User();
        return view('client.create',compact('client','country','state'));

    }
    public function admin_create_client(){

        $country=Country::pluck('title','id');
        $state=CountryState::pluck('title','id');
        $client = new User();
        return view('client.admin_create_client',compact('client','country','state'));

    }

    public function admin_create_client_store(ClientRequest $request)
    {


        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->middle_initial = $request->middle_initial;
        $user->medicaid_id = $request->medicaid_id;
        $user->gender = $request->gender;
        $user->telephone_number = $request->telephone_number;
        $user->cell_phone = $request->cell_phone;
        $user->permanent_address = $request->permanent_address;
        $user->permanent_address_2 = $request->permanent_address_2;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->zip_code = $request->zip_code;
        $user->date_of_birth = $request->date_of_birth;
        $user->type = $request->type;

        if ($user->save()) {

            $profile = new UserProfile();
            $profile->user_id = $user->id;
            $profile->managed_medicaid_health_plan=$request->managed_medicaid_health_plan;
            $profile->managed_MLTC_plan=$request->managed_MLTC_plan;

            $profile->authorized_first_name = $request->authorized_first_name;
            $profile->authorized_last_name = $request->authorized_last_name;
            $profile->authorized_middle_initial = $request->authorized_middle_initial;
            $profile->relationship_to_member = $request->relationship_to_member;
            $profile->authorized_address = $request->authorized_address;
            $profile->authorized_city = $request->authorized_city;
            $profile->authorized_country = $request->authorized_country;
            $profile->authorized_state = $request->authorized_state;
            $profile->authorized_zip_code = $request->authorized_zip_code;
            $profile->authorized_telephone_number = $request->authorized_telephone_number;
            $profile->authorized_cell_phone = $request->authorized_cell_phone;
            $profile->authorized_email_address = $request->authorized_email_address;
            $profile->physician_name = $request->physician_name;
            $profile->patient_name = $request->patient_name;
            $profile->provider_name = $request->provider_name;
            $profile->provider_speciality = $request->provider_speciality;
            $profile->provider_licence = $request->provider_licence;
            $profile->provider_name_of_client = $request->provider_name_of_client;
            $profile->provider_address = $request->provider_address;
            $profile->provider_city = $request->provider_city;
            $profile->provider_state = $request->provider_state;
            $profile->provider_zip_code = $request->provider_zip_code;
            $profile->provider_phone = $request->provider_phone;
            $profile->provider_fax = $request->provider_fax;
            $profile->provider_signature = $request->provider_signature;

            $profile->representative_name = $request->representative_name;
            $profile->representative_title = $request->representative_title;
            $profile->representative_date = $request->representative_date;
            $profile->representative_signature = $request->representative_signature;
            $profile->representative_phone = $request->representative_phone;
            $profile->save();

            return Redirect::route('client.registration.index')->with('msg', 'Client Registration Successfully');

        }
    }


    public function store(ClientRequest $request){

        $input = Input::all();

        $acknowledgement_check_box_data = $input['acknowledgement_check_box_data'];
        $check_box_data = $input['check_box_data'];

        $user=new User();
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->middle_initial=$request->middle_initial;
        $user->medicaid_id=$request->medicaid_id;
        $user->gender=$request->gender;
        $user->telephone_number=$request->telephone_number;
        $user->cell_phone=$request->cell_phone;
        $user->permanent_address=$request->permanent_address;
        $user->permanent_address_2 = $request->permanent_address_2;
        $user->city=$request->city;
        $user->country=$request->country;
        $user->state=$request->state;
        $user->zip_code=$request->zip_code;
        $user->date_of_birth=$request->date_of_birth;
        $user->type=$request->type;
        $user->password=bcrypt($request->password);

        if ( $user->save()){

            $profile=new UserProfile();
            $profile->user_id=$user->id;
            $profile->managed_medicaid_health_plan=$request->managed_medicaid_health_plan;
            $profile->managed_MLTC_plan=$request->managed_MLTC_plan;
           // $profile->acknowledgement=$acknowledgement;

            $profile->authorized_first_name=$request->authorized_first_name;
            $profile->authorized_last_name=$request->authorized_last_name;
            $profile->authorized_middle_initial=$request->authorized_middle_initial;
            $profile->relationship_to_member=$request->relationship_to_member;
            $profile->authorized_address=$request->authorized_address;
            $profile->authorized_city=$request->authorized_city;
            $profile->authorized_country=$request->authorized_country;
            $profile->authorized_state=$request->authorized_state;
            $profile->authorized_zip_code=$request->authorized_zip_code;
            $profile->authorized_telephone_number=$request->authorized_telephone_number;
            $profile->authorized_cell_phone=$request->authorized_cell_phone;
            $profile->authorized_email_address=$request->authorized_email_address;
            $profile->physician_name=$request->physician_name;
            $profile->patient_name=$request->patient_name;
            $profile->provider_name=$request->provider_name;
            $profile->provider_speciality=$request->provider_speciality;
            $profile->provider_licence=$request->provider_licence;
            $profile->provider_name_of_client=$request->provider_name_of_client;
            $profile->provider_address=$request->provider_address;
            $profile->provider_city=$request->provider_city;
            $profile->provider_state=$request->provider_state;
            $profile->provider_zip_code=$request->provider_zip_code;
            $profile->provider_phone=$request->provider_phone;
            $profile->provider_fax=$request->provider_fax;
            $profile->provider_signature=$request->provider_signature;
            $profile->representative_name = $request->representative_name;
            $profile->representative_title = $request->representative_title;
            $profile->representative_date = $request->representative_date;
            $profile->representative_signature = $request->representative_signature;
            $profile->representative_phone = $request->representative_phone;
            $profile->save();

             if ($acknowledgement_check_box_data!=''){

                 foreach ($acknowledgement_check_box_data as $value){

                     $checkbox_one= new AcknowledgementCheckBoxData();
                     $checkbox_one->users_id=$user->id;
                     $checkbox_one->acknowledgement_check_box_data=$value;
                     $checkbox_one->save();
                 }
             }
             if ($check_box_data!=''){

                 foreach ($check_box_data as $item){

                     $checkbox_data= new CheckBoxData();
                     $checkbox_data->users_id=$user->id;
                     $checkbox_data->check_box_data=$item;
                     $checkbox_data->save();
                 }
             }

            return Redirect::route('client.registration.create')->with('msg','Client Registration Successfully');

        }
    }


    public function edit($id){

        $country=Country::pluck('title','id');
        $state=CountryState::pluck('title','id');
        $client=User::find($id);
        return view('client.edit',compact('client','country','state'));

    }

    public function update(Request $request,$id){

        $user=User::find($id);
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->middle_initial=$request->middle_initial;
        $user->medicaid_id=$request->medicaid_id;
        $user->gender=$request->gender;
        $user->telephone_number=$request->telephone_number;
        $user->cell_phone=$request->cell_phone;
        $user->permanent_address=$request->permanent_address;
        $user->permanent_address_2 = $request->permanent_address_2;
        $user->city=$request->city;
        $user->country=$request->country;
        $user->state=$request->state;
        $user->zip_code=$request->zip_code;
        $user->date_of_birth=$request->date_of_birth;
        $user->type=$request->type;

        if ( $user->update()){

            UserProfile::where('user_id',$user->id)->delete();

            $profile=new UserProfile();
            $profile->user_id=$user->id;
            $profile->managed_medicaid_health_plan=$request->managed_medicaid_health_plan;
            $profile->managed_MLTC_plan=$request->managed_MLTC_plan;

            $profile->authorized_first_name=$request->authorized_first_name;
            $profile->authorized_last_name=$request->authorized_last_name;
            $profile->authorized_middle_initial=$request->authorized_middle_initial;
            $profile->relationship_to_member=$request->relationship_to_member;
            $profile->authorized_address=$request->authorized_address;
            $profile->authorized_city=$request->authorized_city;
            $profile->authorized_country=$request->authorized_country;
            $profile->authorized_state=$request->authorized_state;
            $profile->authorized_zip_code=$request->authorized_zip_code;
            $profile->authorized_telephone_number=$request->authorized_telephone_number;
            $profile->authorized_cell_phone=$request->authorized_cell_phone;
            $profile->authorized_email_address=$request->authorized_email_address;
            $profile->physician_name=$request->physician_name;
            $profile->patient_name=$request->patient_name;
            $profile->provider_name=$request->provider_name;
            $profile->provider_speciality=$request->provider_speciality;
            $profile->provider_licence=$request->provider_licence;
            $profile->provider_name_of_client=$request->provider_name_of_client;
            $profile->provider_address=$request->provider_address;
            $profile->provider_city=$request->provider_city;
            $profile->provider_state=$request->provider_state;
            $profile->provider_zip_code=$request->provider_zip_code;
            $profile->provider_phone=$request->provider_phone;
            $profile->provider_fax=$request->provider_fax;
            $profile->provider_signature=$request->provider_signature;
            $profile->representative_name = $request->representative_name;
            $profile->representative_title = $request->representative_title;
            $profile->representative_date = $request->representative_date;
            $profile->representative_signature = $request->representative_signature;
            $profile->representative_phone = $request->representative_phone;
            $profile->save();

            return Redirect::route('client.registration.index',$id)->with('msg','Client Registration updated Successfully');

        }
    }

    public function show($id){

        $client=User::find($id);

        return view('client.show',compact('client'));
    }

    public function clientInactive($id){

        $client=User::find($id);
        $client->status='inactive';
        $client->save();

        return \redirect()->back()->with('msg','Client Inactive');

    }

    public function clientActive($id){

        $client=User::find($id);
        $client->status='active';
        $client->save();

        return \redirect()->back()->with('msg','Client Active');

    }


    public function delete($id){

        $response = [];
        $response['result'] = 'error';
        $response['message'] = 'Unknown';

        $client = User::where('id', $id)->first();

        try {
            if (count($client) > 0) {
                if ($client->delete()) {

                    $response['result'] = 'success';
                    $response['message'] = 'Client Deleted Successfully.';
                } else {
                    $response['message'] = 'Unable to remove Client';
                }
            } else {
                $response['message'] = 'Client data not found.';
            }
        } catch (\Throwable $e) {
            $response['message'] = $e->getMessage();
        }

        return json_encode($response);

    }

    public function admin_client_pdf($id){


        $defaultConfig = (new ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];
        $client=User::find($id);

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

        $mpdf->allow_charset_conversion=true;
        $mpdf->charset='UTF-8';

        $view = \Illuminate\Support\Facades\View::make('client._pdf', compact('client'));
        $html = $view->render();


        $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');

        $stylesheet = file_get_contents(public_path().'/css/bootstrap.min.css');
        $mpdf->WriteHTML($stylesheet,1);

        $mpdf->WriteHTML($html,2);
        $mpdf->Output();


    }

    public function pdf_form(){

        $defaultConfig = (new ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];
        $client=[];

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

        $mpdf->allow_charset_conversion=true;
        $mpdf->charset='UTF-8';

        $view = \Illuminate\Support\Facades\View::make('client._form_pdf',compact('client'));
        $html = $view->render();

        $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');

        $stylesheet = file_get_contents(public_path().'/css/bootstrap.min.css');
        $mpdf->WriteHTML($stylesheet,1);

        $mpdf->WriteHTML($html,2);
        $mpdf->Output();
    }




}
