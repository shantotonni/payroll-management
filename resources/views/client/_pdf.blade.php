<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://mnnhomecare.com/wp-content/uploads/2017/08/cropped-lgo-192x192.png" type="image/x-icon" />
    <!-- CSRF Token -->
    <style>

    </style>

</head>

<body>

<div class="clearfix main-wrapper">
    <h3 class="text-center" style="background-color: #3678C0;color: white;padding: 15px">M & N HOME CARE SERVICES, LLC</h3>
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5" style="padding-right: 650px">
                            <h2 style="padding:10px;background-color:#3678C0; color:#fff">CFEEC Evaluation Request Form </h2>
                        </div>
                        <div class="col-xs-12 col-sm-offset-2 col-sm-5" style="padding-left: 800px;padding-top: -65px">
                            <div style="float:right;margin-right:15px;">
                                <img src="{{ asset('img/1.jpg') }}" style="width: auto; height: 80px;">
                            </div>
                        </div>
                    </div>
                </div>

                <p style="font-size:18px; font-weight:bold;">For Mainstream plan member requiring<br>
                    non-covered LTC benefits
                </p>
                <br>

                {!! Form::model($client,['files'=> true, 'route'=> ['client.registration.update',$client->id],]) !!}

                <div>
                    <div class="title_bar" style="border-bottom:1px solid #3678C0; margin-bottom:20px;background-color: #3678C0;
    padding: 6px">
                        <h3 style="color: white">SECTION 1. Managed Care Plan Information</h3>
                    </div>
                    <div id="caller-contact-container">
                        <div class="form-horizontal" role="form">
                            <fieldset>
                                <div>
                                    <div class="row-fluid">
                                        <div class="col-xs-12 col-sm-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        {!! Form::label('managed_medicaid_health_plan', 'Medicaid health plan you are in now:') !!}
                                                        <span class="required">*</span>
                                                    </div>
                                                    <div class="col-xs-8" style="border-bottom: 1px solid black;">
                                                        {{ $client->profile->managed_medicaid_health_plan }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div>
                                    <div class="row-fluid">
                                        <div class="col-xs-12 col-sm-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        {!! Form::label('managed_MLTC_plan', 'MLTC plan you are transferring to:') !!}
                                                        <span class="required"> * </span>
                                                    </div>
                                                    <div class="col-xs-8" style="border-bottom: 1px solid black;">
                                                        {{ $client->profile->managed_MLTC_plan }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>


                            {!! csrf_field() !!}

                            <div class="title_bar" style="border-bottom:1px solid #3678C0; margin-bottom:20px;background-color: #3678C0;
    padding: 6px">
                                <h3 style="color: white">SECTION 2. Plan Member Information</h3>
                            </div>

                            <div id="caller-contact-container">
                                <div class="form-horizontal" role="form">
                                    <fieldset>
                                        <div>
                                            <div class="row-fluid">
                                                <div class="row">
                                                    <div style="width: 350px;margin-left: 30px">
                                                        {!! Form::label('fast_name', 'First Name:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                            {{ $client->first_name }}
                                                        </div>

                                                    </div>


                                                    <div style="margin-left: 400px;width: 350px;padding-top: -15px">
                                                       {!! Form::label('fast_name', 'Last Name:') !!}
                                                        <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 100px">
                                                            {{ $client->last_name }}
                                                        </div>
                                                    </div>

                                                    <div style="margin-left: 780px;width: 350px;padding-top: -15px">
                                                        {!! Form::label('middle_initial', 'Middle Initial:') !!}
                                                        <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 100px">
                                                            {{ $client->middle_initial }}
                                                        </div>
                                                    </div>

                                                </div>
                                                <br>

                                                <div class="row">
                                                    <div style="width: 350px;margin-left: 30px">
                                                        {!! Form::label('date_of_birth', 'Date of Birth:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                            {{ $client->date_of_birth }}
                                                        </div>

                                                    </div>

                                                    <div style="margin-left: 400px;width: 350px;padding-top: -15px">
                                                        {!! Form::label('medicaid_id', 'Medicaid ID:') !!}
                                                        <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 100px">
                                                            {{ $client->medicaid_id }}
                                                        </div>
                                                    </div>

                                                    <div style="margin-left: 780px;width: 350px;padding-top: -15px">
                                                        {!! Form::label('gender', 'Gender:') !!}
                                                        <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 100px">
                                                            @if($client->gender==1)
                                                                Male
                                                                @else
                                                                Female
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="row">
                                                    <div style="width: 550px;margin-left: 30px">
                                                        {!! Form::label('telephone_number', 'Telephone Number:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 150px;padding-top: -20px">
                                                            {{ $client->telephone_number }}
                                                        </div>

                                                    </div>

                                                    <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                                                        {!! Form::label('cell_phone', 'Cell Phone:') !!}
                                                        <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 100px">
                                                            {{ $client->cell_phone }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <div style="width: 550px;margin-left: 30px">
                                                        {!! Form::label('permanent_address', 'Permanent Address:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 150px;padding-top: -20px">
                                                            {{ $client->permanent_address }}
                                                        </div>

                                                    </div>

                                                    <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                                                        {!! Form::label('permanent_address_2', 'Permanent Address Line 2:') !!}
                                                        <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 200px">
                                                            {{ $client->permanent_address_2 }}
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                                <br>

                                                <div class="row">
                                                    <div style="width: 550px;margin-left: 30px">
                                                        {!! Form::label('country', 'Country:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 150px;padding-top: -20px">
                                                            {{ $client->country }}
                                                        </div>

                                                    </div>

                                                    <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                                                        {!! Form::label('state', 'State:') !!}
                                                        <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 100px">
                                                            {{ $client->state }}
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="row">
                                                    <div style="width: 550px;margin-left: 30px">
                                                        {!! Form::label('zip_code', 'Zip Code:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 150px;padding-top: -20px">
                                                            {{ $client->zip_code }}
                                                        </div>

                                                    </div>

                                                    <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                                                        {!! Form::label('email', 'Email Address:') !!}
                                                        <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 130px">
                                                            {{ $client->email }}
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <br>
                                            <br>

                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div>

                            <div style="border-bottom:1px solid #3678C0; margin-bottom:20px">
                                <h3 style="color: #3864e1">Authorized Representative</h3>
                            </div>
                            <div class="form-horizontal" role="form">
                                <fieldset>
                                    <div>
                                        <div class="row-fluid">

                                            <div class="row">
                                                <div style="width: 350px;margin-left: 30px">
                                                    {!! Form::label('authorized_first_name', 'First Name:') !!}
                                                    <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                        {{ $client->profile ? $client->profile->authorized_first_name:'' }}
                                                    </div>

                                                </div>


                                                <div style="margin-left: 400px;width: 350px;padding-top: -15px">
                                                    {!! Form::label('authorized_last_name', 'Last Name:') !!}
                                                    <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 100px">
                                                        {{ $client->profile ? $client->profile->authorized_last_name:'' }}

                                                    </div>
                                                </div>

                                                <div style="margin-left: 780px;width: 350px;padding-top: -15px">
                                                    {!! Form::label('middle_initial', 'Middle Initial:') !!}
                                                    <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 100px">
                                                        {{ $client->profile ? $client->profile->authorized_middle_initial:'' }}
                                                    </div>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="row">
                                                <div style="width: 550px;margin-left: 30px">
                                                    {!! Form::label('relationship_to_member', 'Relationship to Member:') !!}
                                                    <div style="border-bottom: 1px solid black;margin-left: 180px;padding-top: -20px">
                                                        {{ $client->profile ? $client->profile->relationship_to_member:'' }}

                                                    </div>

                                                </div>

                                                <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                                                    {!! Form::label('address', 'Address:') !!}
                                                    <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 100px">
                                                        {{ $client->profile ? $client->profile->authorized_address:'' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div style="width: 350px;margin-left: 30px">
                                                {!! Form::label('authorized_city', 'City:') !!}
                                                <div style="border-bottom: 1px solid black;margin-left: 50px;padding-top: -20px">
                                                    {{ $client->profile ? $client->profile->authorized_city:'' }}
                                                </div>

                                            </div>

                                            <div style="margin-left: 400px;width: 350px;padding-top: -15px">
                                                {!! Form::label('authorized_country', 'Country:') !!}
                                                <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 80px">
                                                    {{ $client->profile ? $client->profile->authorized_country:'' }}

                                                </div>
                                            </div>

                                            <div style="margin-left: 780px;width: 350px;padding-top: -15px">
                                                {!! Form::label('authorized_state', 'State:') !!}
                                                <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 60px">
                                                    {{ $client->profile ? $client->profile->authorized_state:'' }}
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div style="width: 550px;margin-left: 30px">
                                                {!! Form::label('authorized_zip_code', 'Zip Code:') !!}
                                                <div style="border-bottom: 1px solid black;margin-left: 80px;padding-top: -20px">
                                                    {{ $client->profile ? $client->profile->authorized_zip_code:'' }}

                                                </div>

                                            </div>

                                            <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                                                {!! Form::label('authorized_telephone_number', 'Telephone Number:') !!}
                                                <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 140px">
                                                    {{ $client->profile ? $client->profile->authorized_telephone_number:'' }}
                                                </div>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div style="width: 550px;margin-left: 30px">
                                                {!! Form::label('authorized_cell_phone', 'Cell Phone:') !!}
                                                <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                    {{ $client->profile ? $client->profile->authorized_cell_phone:'' }}

                                                </div>

                                            </div>

                                            <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                                                {!! Form::label('authorized_email_address', 'Email Address:') !!}
                                                <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 140px">
                                                    {{ $client->profile ? $client->profile->authorized_email_address:'' }}
                                                </div>
                                            </div>
                                        </div>

                                        <br>

                                    </div>
                                </fieldset>
                            </div>
                        </div>

                        <div class="title_bar" style="border-bottom:1px solid #3678C0; margin-bottom:20px;background-color: #3678C0;
    padding: 6px">
                            <h3 style="color: white">SECTION 3. Acknowledgement / Release of Medical Information</h3>
                        </div>

                        <p style="margin-left: 15px"><strong>I understand:</strong></p>

                        <div id="ht-inquiry-location-container" style="margin-left: 15px">

                            <div class="checkbox">
                                <label for="Value0" title="">
                                    <input type="checkbox" name="acknowledgement_check_box_data[]" id="Value0" value="1">
                                  1.  That I must join a Managed Long Term Care Plan (MLTC Plan) to receive Medicaid community-based
                                    long term care (cbltc) services in my county.

                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="Value1" title="">
                                    <input type="checkbox" name="acknowledgement_check_box_data[]" id="Value1" value="2">
                                    2. That I must join a Managed Long Term Care Plan (MLTC Plan) to receive Medicaid
                                    community-based
                                    long term care (cbltc) services in my county.

                                </label>
                            </div>
                            <div class="checkbox" style="width: 100%;">
                                <label for="Value2" title="">
                                    <input type="checkbox" name="acknowledgement_check_box_data[]" id="Value2" value="3">
                                    <span>
                  3.  The differences between a Medicaid health plan and a MLTC Plan and that I will lose some benefits.
                </span>
                                </label>
                            </div>

                            <div class="checkbox" style="width: 100%;">
                                <label for="Value3" title="">
                                    <input type="checkbox" name="acknowledgement_check_box_data[]" id="Value3" value="4">
                                    <span>
                  4.  I may not be able to see my doctors if I change to a MLTC Plan.
                </span>
                                </label>
                            </div>

                            <div class="checkbox" style="width: 100%;">
                                <label for="Value4" title="">
                                    <input type="checkbox" name="acknowledgement_check_box_data[]" id="Value4" value="5">
                                    <span>
                                        5. The Conflict Free Evaluation and Enrollment Center (CFEEC) must determine I need more than 120
    days of cbltc services and that I am nursing home eligible, before I can join a plan. A CFEEC nurse will
    contact me to schedule an evaluation.</span>
                                </label>
                            </div>

                            <div class="checkbox" style="width: 100%;">
                                <label for="Value5" title="">
                                    <input type="checkbox" name="acknowledgement_check_box_data[]" id="Value5" value="6">
                                    <span>
                                        6. I give my Provider permission to give all needed medical information only if it is relevant to my request
    to transfer to a long term care plan. This may include any disability information needed to confirm
    needed services that are not available in my Medicaid health plan.</span>
                                </label>
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class="title_bar" style="border-bottom:1px solid #3678C0; margin-bottom:20px;background-color: #3678C0;
    padding: 6px">
                            <h3 style="color: white">SECTION 4. Physician Authorization</h3>
                        </div>

                        <div id="ht-inquiry-contact-container">
                            <div class="row-fluid">
                                <p style="margin-left: 15px">A Physician must fill out this Section including the
                                    Provider Information/Signature Box listed below.</p>

                                <div class="row">
                                    <div style="width: 550px;margin-left: 30px">
                                        {!! Form::label('physician_name', 'Physician Name:') !!}
                                        <div style="border-bottom: 1px solid black;margin-left: 120px;padding-top: -20px">
                                            {{ $client->profile ? $client->profile->physician_name:'' }}

                                        </div>

                                    </div>

                                    <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                                        {!! Form::label('patient_name', 'Patient Name:') !!}
                                        <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 120px">
                                            {{ $client->profile ? $client->profile->patient_name:'' }}
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <p style="margin-left: 15px">requires the service/services listed below which makes
                                    him/her a candidate to transfer from a Medicaid Health Plan to a Managed Long Term
                                    Care Plan.</p>
                            </div>
                            <br>
                            <br>

                            <div class="title_bar" style="border-bottom:1px solid #3678C0; margin-bottom:20px;background-color: #3678C0;
    padding: 6px">
                                <h3>
                                   <span style="color: white">
                                   4a. Please add check mark
                                       <span class="glyphicon glyphicon-ok-circle" aria-hidden="true" style="font-size:20px;">

                                       </span> to all that apply.
                                   </span>
                                </h3>
                            </div>

                            <div class="form-horizontal" role="form">
                                <fieldset>
                                    <div>
                                        <div class="row-fluid">
                                            <div class="col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <div class="col-xs-12 col-sm-12">
                                                        <div class="checkbox" style="width: 100%;">
                                                            <label for="Value10" title="">
                                                                <input type="checkbox" name="check_box_data[]" id="Value10" value="1">
                                                                <span>
                                                                    1. Environmental Modification: Internal and external physical adaptations to the home, which are
necessary to assure the health, welfare, and safety of the individual, enable the individual to
function with greater independence in the home, and prevent institutionalization.</span>
                                                            </label>
                                                        </div>
                                                        <div class="checkbox" style="width: 100%;">
                                                            <label for="Value6" title="">
                                                                <input type="checkbox" name="check_box_data[]" id="Value6" value="2">
                                                                <span>
                                                                    2. Home Delivered Meals</span>
                                                            </label>
                                                        </div>
                                                        <div class="checkbox" style="width: 100%;">
                                                            <label for="Value7" title="">
                                                                <input type="checkbox" name="check_box_data[]" id="Value7" value="3">
                                                                <span>
                                                                    3. Social Day Care</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="title_bar" style="border-bottom:1px solid #3678C0; margin-bottom:20px;background-color: #3678C0;
    padding: 6px">
                                <h3>
                                    <span style="color: white">4b. Provider Information/Signature</span>
                                </h3>
                            </div>
                            <div class="form-horizontal" role="form">
                                <fieldset>
                                    <div>
                                        <div class="row-fluid">

                                            <div class="row">
                                                <div style="width: 550px;margin-left: 30px">
                                                    {!! Form::label('provider_name', 'Physician Name:') !!}
                                                    <div style="border-bottom: 1px solid black;margin-left: 120px;padding-top: -20px">
                                                        {{ $client->profile ? $client->profile->provider_name:'' }}

                                                    </div>

                                                </div>

                                                <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                                                    {!! Form::label('provider_speciality', 'Specialty:') !!}
                                                    <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 100px">
                                                        {{ $client->profile ? $client->profile->provider_speciality:'' }}
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div style="width: 550px;margin-left: 30px">
                                                    {!! Form::label('provider_licence', 'License #:') !!}
                                                    <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                        {{ $client->profile ? $client->profile->provider_licence:'' }}

                                                    </div>

                                                </div>

                                                <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                                                    {!! Form::label('provider_name_of_client', 'Name of Clinic/Facility:') !!}
                                                    <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 150px">
                                                        {{ $client->profile ? $client->profile->provider_name_of_client:'' }}
                                                    </div>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="row">
                                                <div style="width: 550px;margin-left: 30px">
                                                    {!! Form::label('provider_address', 'Address :') !!}
                                                    <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                        {{ $client->profile ? $client->profile->provider_address:'' }}

                                                    </div>

                                                </div>

                                                <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                                                    {!! Form::label('provider_city', 'City:') !!}
                                                    <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 80px">
                                                        {{ $client->profile ? $client->profile->provider_city:'' }}
                                                    </div>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div style="width: 550px;margin-left: 30px">
                                                    {!! Form::label('provider_state', 'State :') !!}
                                                    <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                        {{ $client->profile ? $client->profile->provider_state:'' }}

                                                    </div>

                                                </div>

                                                <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                                                    {!! Form::label('provider_zip_code', 'Zip Code:') !!}
                                                    <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 80px">
                                                        {{ $client->profile ? $client->profile->provider_zip_code:'' }}
                                                    </div>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div style="width: 550px;margin-left: 30px">
                                                    {!! Form::label('provider_phone', 'Phone :') !!}
                                                    <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                        {{ $client->profile ? $client->profile->provider_phone:'' }}

                                                    </div>

                                                </div>

                                                <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                                                    {!! Form::label('provider_fax', 'Fax:') !!}
                                                    <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 80px">
                                                        {{ $client->profile ? $client->profile->provider_fax:'' }}
                                                    </div>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div style="width: 550px;margin-left: 30px">
                                                    {!! Form::label('provider_signature', 'Signature (sign digitally):') !!}
                                                    <div style="border-bottom: 1px solid black;margin-left: 180px;padding-top: -20px">
                                                        {{ $client->profile ? $client->profile->provider_signature:'' }}

                                                    </div>
                                                </div>
                                            </div>
                                            <br>

                                        </div>

                                        <div class="row-fluid">
                                            <div class="col-xs-12 col-sm-12">
                                                <div class="title_bar" style="background-color: #3678C0;padding: 6px">
                                                    <h2 style="color: white">SECTION 5. Managed Long Term Care Plan (MLTC Plan)</h2>
                                                </div>
                                                <br>
                                                <p>Provide the name of the MLTC Plan representative who is submitting this form
                                                    on behalf of the applicant.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <h3 style="font-size: 15px;margin-left: 16px;text-decoration: underline">Plan Representative: </h3>

                                            <div class="row">
                                                <div style="width: 550px;margin-left: 30px">
                                                    {!! Form::label('representative_name', 'Name :') !!}
                                                    <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                        {{ $client->profile ? $client->profile->representative_name:'' }}

                                                    </div>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="row">
                                                <div style="width: 550px;margin-left: 30px">
                                                    {!! Form::label('representative_title', 'Title :') !!}
                                                    <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                        {{ $client->profile ? $client->profile->representative_title:'' }}

                                                    </div>

                                                </div>

                                                <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                                                    {!! Form::label('representative_date', 'Date:') !!}
                                                    <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 80px">
                                                        {{ $client->profile ? $client->profile->representative_date:'' }}
                                                    </div>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="row">
                                                <div style="width: 550px;margin-left: 30px">
                                                    {!! Form::label('representative_signature', 'Signature :') !!}
                                                    <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                        {{ $client->profile ? $client->profile->representative_signature:'' }}

                                                    </div>

                                                </div>

                                                <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                                                    {!! Form::label('representative_phone', 'Phone Number:') !!}
                                                    <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 120px">
                                                        {{ $client->profile ? $client->profile->representative_phone:'' }}
                                                    </div>
                                                </div>
                                            </div>

                                        </div>




                                    </div>
                                </fieldset>
                            </div>
                        </div>

                        <br>
                        <br>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

</div>
    </div>
    <h4 class="text-center" style="background-color: #3678C0;padding: 15px"><a href="" style="color: white;">Developed & Maintained By Exclusive Web Services</a></h4>
</div>

</body>
</html>
