@extends('layouts.master')

@section('title')
    View Client | MNN Home Care
@endsection

@section('content')

    <div class="padding-top">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{!! route('home') !!}">Dashboard</a></li>
                    <li><a href="{!! route('client.registration.index') !!}">Client</a></li>
                    <li class="active">show</li>
                </ul>

                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #bdf0fb">
                            Client Information
                            <a href="{!! route('client.registration.index') !!}" class="btn btn-success btn-xs pull-right">Back To Client</a>
                        </div>
                        <h3 class="text-center" style="color: green;text-decoration: underline">Information</h3>
                        <div class="panel-body">
                            <div class="modal-body">
                                <div style="">
                                    <table id="" class="table table-bordered table-hover table-striped">
                                        <tr>
                                            <th class="col-lg-4">First Name : </th>
                                            <td>{!! $client->first_name !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Last Name : </th>
                                            <td>{!! $client->last_name !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Email : </th>
                                            <td>{!! $client->email !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Country :</th>
                                            <td>
                                                @if($client->country=='236')
                                                    United State
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Date Of Birth : </th>
                                            <td colspan="2">{!! $client->date_of_birth !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Client Type :</th>
                                            <td>{!! $client->type !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Authorized Name : </th>
                                            <td>{!! isset($client->profile) ? $client->profile->authorized_first_name:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4"> Gender : </th>
                                            @if($client->gender==1)
                                                <td>Male</td>
                                            @endif
                                            @if($client->gender==2)
                                                <td>Female</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Status : </th>
                                            <td>{!! ucfirst($client->status) !!}</td>
                                        </tr>

                                        <tr>
                                            <th class="col-lg-4">Medicaid health plan you are in now: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->managed_medicaid_health_plan:'' !!}</td>
                                        </tr>

                                        <tr>
                                            <th class="col-lg-4">MLTC plan you are transferring to: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->managed_MLTC_plan:'' !!}</td>
                                        </tr>

                                        <tr>
                                            <th class="col-lg-4">Authorised First Name: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->authorized_first_name:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Authorised Last Name: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->authorized_last_name:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Authorised Last Name: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->authorized_middle_initial:'' !!}</td>
                                        </tr>


                                    </table>
                                </div>
                            </div>
                        </div>

                        <h3 class="text-center" style="color: green;text-decoration: underline">Authorised Information</h3>
                        <div class="panel-body">
                            <div class="modal-body">
                                <div style="">
                                    <table id="" class="table table-bordered table-hover table-striped">

                                        <tr>
                                            <th class="col-lg-4">First Name: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->authorized_first_name:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Last Name: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->authorized_last_name:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Middle Initial: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->authorized_middle_initial:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Relationship to Member: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->relationship_to_member:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Address: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->authorized_address:'' !!}</td>
                                        </tr>
                                         <tr>
                                            <th class="col-lg-4">City: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->authorized_city:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Country: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->authorized_country:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">State: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->authorized_state:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Zip Code: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->authorized_zip_code:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Telephone Number (with Area Code): </th>
                                            <td>{!! isset($client->profile) ? $client->profile->authorized_telephone_number:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Cell Phone (with Area Code): </th>
                                            <td>{!! isset($client->profile) ? $client->profile->authorized_cell_phone:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Email Address: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->authorized_email_address:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Physician Name: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->physician_name:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Patient Name: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->patient_name:'' !!}</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>

                        <h3 class="text-center" style="color: green;text-decoration: underline">Provider Information</h3>
                        <div class="panel-body">
                            <div class="modal-body">
                                <div style="">
                                    <table id="" class="table table-bordered table-hover table-striped">

                                        <tr>
                                            <th class="col-lg-4">Physician Name: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->provider_name:'' !!}</td>
                                        </tr>

                                        <tr>
                                            <th class="col-lg-4">Specialty: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->provider_speciality:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">License: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->provider_licence:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Name of Clinic/Facility: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->provider_name_of_client:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Address: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->provider_address:'' !!}</td>
                                        </tr>

                                        <tr>
                                            <th class="col-lg-4">City: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->provider_city:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Country: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->provider_county:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">State: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->provider_state:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Zip Code: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->provider_zip_code:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Phone: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->provider_phone:'' !!}</td>
                                        </tr>

                                        <tr>
                                            <th class="col-lg-4">Fax: </th>
                                            <td>{!! isset($client->profile) ? $client->profile->provider_fax:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Signature (sign digitally): </th>
                                            <td>{!! isset($client->profile) ? $client->profile->provider_signature:'' !!}</td>
                                        </tr>


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
