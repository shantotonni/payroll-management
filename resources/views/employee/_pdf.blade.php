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
                            <h4 style="padding:10px;background-color:#3678C0; color:#fff">CFEEC Evaluation Request Form </h4>
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

                {!! Form::model(['files'=> true]) !!}

                <div>
                    <div id="caller-contact-container">
                        <div class="form-horizontal" role="form">

                            {!! csrf_field() !!}

                            <div class="title_bar" style="border-bottom:1px solid #3678C0; margin-bottom:20px;background-color: #3678C0;padding: 4px">
                                <h4 style="color: white">SECTION 2. Caregiver Information</h4>
                            </div>

                            <div id="caller-contact-container">
                                <div class="form-horizontal" role="form">
                                    <fieldset>
                                        <div>
                                            <div class="row-fluid">
                                                <div class="row">
                                                    <div style="width: 550px;margin-left: 30px">
                                                        {!! Form::label('fast_name', 'First Name:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -15px">
                                                         {{ $employee->first_name }}
                                                        </div>

                                                    </div>
                                                    <br>

                                                    <div style="margin-left: 630px;width: 500px;padding-top: -35px">
                                                        {!! Form::label('fast_name', 'MI:') !!}
                                                        <div style="border-bottom: 1px solid black;padding-top: -15px;margin-left: 40px;position: fixed">
                                                            {{ $employee->employee_mi }}
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="row">
                                                    <div style="width: 550px;margin-left: 30px">
                                                        {!! Form::label('last_name', 'Last Name:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -15px">
                                                            {{ $employee->first_name }}
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>

                                                <br>

                                                <div class="row">
                                                    <div style="width: 1100px;margin-left: 30px">
                                                        {!! Form::label('Address Line 1', 'Address Line 1:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                            {{ $employee->permanent_address }}
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>

                                                <br>

                                                <div class="row">
                                                    <div style="width: 1100px;margin-left: 30px">
                                                        {!! Form::label('Address Line 2', 'Address Line 2:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                            {{ $employee->permanent_address_2 }}
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>

                                                <br>

                                                <div class="row">
                                                    <div style="width: 350px;margin-left: 30px">
                                                        {!! Form::label('city', 'City:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                            {{ $employee->city }}
                                                        </div>

                                                    </div>

                                                    <div style="margin-left: 400px;width: 350px;padding-top: -15px">
                                                        {!! Form::label('state', 'State') !!}
                                                        <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 100px">
                                                            {{ $employee->state }}
                                                        </div>
                                                    </div>

                                                    <div style="margin-left: 780px;width: 350px;padding-top: -15px">
                                                        {!! Form::label('zip', 'Zip') !!}
                                                        <div style="border-bottom: 1px solid black;padding-top: -25px;margin-left: 60px">
                                                            {{ $employee->zip_code }}

                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                                <br>

                                                <div class="row">
                                                    <div style="width: 550px;margin-left: 30px">
                                                        {!! Form::label('dath_of_birth', 'Date of Birth:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                            {{ $employee->date_of_birth }}
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div style="width: 550px;margin-left: 30px">
                                                        {!! Form::label('ssn', 'SSN:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                            {{ $employee->employee_ssn }}
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div style="width: 550px;margin-left: 30px">
                                                        {!! Form::label('phone', 'Phone:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                            {{ $employee->telephone_number }}
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div style="width: 550px;margin-left: 30px">
                                                        {!! Form::label('mobile', 'Mobile:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                            {{ $employee->cell_phone }}
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div style="width: 550px;margin-left: 30px">
                                                        {!! Form::label('email', 'Email Address:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 100px;padding-top: -20px">
                                                            {{ $employee->email }}
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>

                                                <br>
                                                <br>

                                            </div>
                                            <br>
                                            <br>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div>

                            <div style="margin-bottom:20px">
                                <h3 style="color: #3864e1;padding:10px;background-color:#3678C0; color:#fff">SECTION 2.General Questions</h3>
                            </div>

                            <br>
                            <div class="form-horizontal" role="form">
                                <fieldset>
                                    <div>
                                        <div class="row-fluid">
                                            <div class="row">
                                                <div style="width: 550px;margin-left: 30px">
                                                    {!! Form::label('fast_name', 'Which Position are you applying for:') !!}
                                                    <div style="border-bottom: 1px solid black;margin-left: 230px;padding-top: -20px">
                                                        {{ isset($employee->profile)?$employee->profile->question_1:'' }}
                                                    </div>
                                                </div>
                                                <br>

                                                <div style="margin-left: 630px;width: 500px;padding-top: -35px">
                                                    {!! Form::label('fast_name', 'Please indicate any licenses held:') !!}
                                                    <div style="border-bottom: 1px solid black;padding-top: -20px;margin-left: 230px">
                                                        {{ isset($employee->profile)?$employee->profile->indicate_licenses:'' }}
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <br>

                                            <div class="row">
                                                <div style="width: 550px;margin-left: 30px">
                                                    {!! Form::label('fast_name', 'Licence number:') !!}
                                                    <div style="border-bottom: 1px solid black;margin-left: 150px;padding-top: -20px">
                                                        {{ isset($employee->profile)?$employee->profile->licence_number:'' }}
                                                    </div>

                                                </div>
                                                <br>

                                                <div style="margin-left: 630px;width: 500px;padding-top: -35px">
                                                    {!! Form::label('fast_name', 'License expiration date:') !!}
                                                    <div style="border-bottom: 1px solid black;padding-top: -20px;margin-left: 180px">
                                                        {{ isset($employee->profile)?$employee->profile->licence_expiration_date:'' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <br>

                                        <div class="row">
                                            <div style="width: 550px;margin-left: 30px">
                                                {!! Form::label('fast_name', 'Lowest Acceptable Wage Per Hour:') !!}
                                                <div style="border-bottom: 1px solid black;margin-left: 230px;padding-top: -20px">
                                                    {{ isset($employee->profile)?$employee->profile->lowest_wage_per_hour:'' }}
                                                </div>

                                            </div>
                                            <br>

                                            <div style="margin-left: 630px;width: 500px;padding-top: -35px">
                                                {!! Form::label('fast_name', 'Lowest Acceptable Wage for a 24 Hour Live-in:') !!}
                                                <div style="border-bottom: 1px solid black;padding-top: -20px;margin-left: 300px">
                                                    {{ isset($employee->profile)?$employee->profile->lowest_wage_24_hour:'' }}
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <br>

                                        <div class="row">
                                            <div style="width: 550px;margin-left: 30px">
                                                {!! Form::label('fast_name', 'Date you can start:') !!}
                                                <div style="border-bottom: 1px solid black;margin-left: 150px;padding-top: -20px">
                                                    {{ isset($employee->profile)?$employee->profile->date_you_can_start:'' }}
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="form-group" style="margin-left: 30px">
                                                {!! Form::label('question_2', '1. How did you hear about us?', ['class' => 'col-xs-12']) !!}
                                                <div class="checkbox-inline" >
                                                    {!! Form::radio('question_2',1,((isset($employee->profile)?$employee->profile->question_2==1:'')?1:0),['id'=>'question_2_1']) !!}
                                                    <label for="question_2_1" title="English">
                                                       <span style="padding-left: 20px"> Word of Mouth</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox-inline" style="margin-left: 120px;padding-top: -20px">
                                                    {!! Form::radio('question_2',2,((isset($employee->profile)?$employee->profile->question_2==2:'')?1:0),['id'=>'question_2_2']) !!}
                                                    <label for="question_2_2" title="English">
                                                        <span>Job Fair</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox-inline" style="margin-left: 200px;padding-top: -20px">
                                                    {!! Form::radio('question_2',3,((isset($employee->profile)?$employee->profile->question_2==3:'')?1:0),['id'=>'question_2_3']) !!}
                                                    <label for="question_2_3" title="English">
                                                        <span>Newspaper</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox-inline" style="margin-left: 300px;padding-top: -20px">
                                                    {!! Form::radio('question_2',4,((isset($employee->profile)?$employee->profile->question_2==4:'')?1:0),['id'=>'question_2_4']) !!}
                                                    <label for="question_2_4" title="English">
                                                        <span>Craigs List</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox-inline" style="margin-left: 400px;padding-top: -20px">
                                                    {!! Form::radio('question_2',5,((isset($employee->profile)?$employee->profile->question_2==5:'')?1:0),['id'=>'question_2_5']) !!}
                                                    <label for="question_2_5" title="English">
                                                        <span>Other Caregiver</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="form-group" style="margin-left: 30px">
                                                {!! Form::label('question_2', '2. Are you a US citizen or legally eligible to hold employment in USA?', ['class' => 'col-xs-12']) !!}
                                                <div class="checkbox-inline" >
                                                    {!! Form::radio('question_3',1,((isset($employee->profile)?$employee->profile->question_3==1:'')?1:0),['id'=>'question_3_1']) !!}
                                                    <label for="question_2_1" title="English">
                                                       <span style="padding-left: 20px"> Yes</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox-inline" style="margin-left: 120px;padding-top: -20px">
                                                    {!! Form::radio('question_3',2,((isset($employee->profile)?$employee->profile->question_3==2:'')?1:0),['id'=>'question_3_2']) !!}
                                                    <label for="question_2_2" title="English">
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                                </div>
                                            </div>

                                           <br>
                                            <div class="row">
                                                <div class="form-group" style="margin-left: 30px">
                                                    {!! Form::label('question_2','3.Are you at least 18 years old?', ['class' => 'col-xs-12']) !!}
                                                    <div class="checkbox-inline" >
                                                        {!! Form::radio('question_4',1,((isset($employee->profile)?$employee->profile->question_4==1:'')?1:0),['id'=>'question_4_1']) !!}
                                                        <label for="question_2_1" title="English">
                                                           <span style="padding-left: 20px"> Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-inline" style="margin-left: 120px;padding-top: -20px">
                                                        {!! Form::radio('question_4',2,((isset($employee->profile)?$employee->profile->question_4==2:'')?1:0),['id'=>'question_4_2']) !!}
                                                        <label for="question_2_2" title="English">
                                                            <span>No</span>
                                                        </label>
                                                    </div>
                                                    <br>
                                                    <div style="width: 750px;margin-left: 15px">
                                                        {!! Form::label('fast_name', 'If NO, how many months before you turn 18?') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 330px;padding-top: -20px">
                                                            {{ isset($employee->profile)?$employee->profile->date_you_can_start:'' }}
                                                        </div>

                                                    </div>
                                                </div>
                                             </div>

                                           <br>
                                            <div class="row">
                                                <div class="form-group" style="margin-left: 30px">
                                                    {!! Form::label('question_2','4.Are you related to anyone employed by our company?', ['class' => 'col-xs-12']) !!}
                                                    <div class="checkbox-inline" >
                                                        {!! Form::radio('question_5',1,((isset($employee->profile)?$employee->profile->question_5==1:'')?1:0),['id'=>'question_5_1']) !!}
                                                        <label for="question_2_1" title="English">
                                                           <span style="padding-left: 20px"> Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-inline" style="margin-left: 120px;padding-top: -20px">
                                                        {!! Form::radio('question_5',2,((isset($employee->profile)?$employee->profile->question_5==2:'')?1:0),['id'=>'question_5_2']) !!}
                                                        <label for="question_2_2" title="English">
                                                            <span>No</span>
                                                        </label>
                                                    </div>
                                                    <br>
                                                    <div style="width: 750px;margin-left: 15px">
                                                        {!! Form::label('fast_name', 'If yes, name of the person, relationship and location employed:') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 430px;padding-top: -20px">
                                                            {{ isset($employee->profile)?$employee->profile->question_5_answer:'' }}
                                                        </div>

                                                    </div>
                                                </div>
                                             </div>
                                           <br>
                                            <div class="row">
                                                <div class="form-group" style="margin-left: 30px">
                                                    {!! Form::label('question_2','5.Have you ever worked for our company?', ['class' => 'col-xs-12']) !!}
                                                    <div class="checkbox-inline" >
                                                        {!! Form::radio('question_6',1,((isset($employee->profile)?$employee->profile->question_6==1:'')?1:0),['id'=>'question_6_1']) !!}
                                                        <label for="question_2_1" title="English">
                                                           <span style="padding-left: 20px"> Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-inline" style="margin-left: 120px;padding-top: -20px">
                                                        {!! Form::radio('question_6',2,((isset($employee->profile)?$employee->profile->question_6==2:'')?1:0),['id'=>'question_6_2']) !!}
                                                        <label for="question_2_2" title="English">
                                                            <span>No</span>
                                                        </label>
                                                    </div>
                                                    <br>

                                                        <div style="width: 300px;margin-left: 10px">
                                                            {!! Form::label('city', 'If YES, give date:') !!}
                                                            <div style="border-bottom: 1px solid black;margin-left: 110px;padding-top: -20px">
                                                                {{ isset($employee->profile)?$employee->profile->question_6_answer_date:'' }}
                                                            </div>
                                                        </div>

                                                        <div style="margin-left: 320px;width: 300px;padding-top: -15px">
                                                            {!! Form::label('state', 'If YES, enter location:') !!}
                                                            <div style="border-bottom: 1px solid black;padding-top: -20px;margin-left: 150px">
                                                                {{ isset($employee->profile)?$employee->profile->question_6_answer_location:'' }}
                                                            </div>
                                                        </div>

                                                        <div style="margin-left: 640px;width: 400px;padding-top: -15px">
                                                            {!! Form::label('zip', 'If YES, enter Supervisors Name:') !!}
                                                            <div style="border-bottom: 1px solid black;padding-top: -20px;margin-left: 210px">
                                                                {{ isset($employee->profile)?$employee->profile->question_6_answer_supervisor_name:'' }}
                                                            </div>
                                                        </div>

                                                </div>
                                             </div>
                                              <br>
                                            <div class="row">
                                                <div class="form-group" style="margin-left: 30px">
                                                    {!! Form::label('question_2','6.Do you have any disabilities that may limit your ability to perform the work for which you are applying?', ['class' => 'col-xs-12']) !!}
                                                    <div class="checkbox-inline" >
                                                        {!! Form::radio('question_7',1,((isset($employee->profile)?$employee->profile->question_7==1:'')?1:0),['id'=>'question_7_1']) !!}
                                                        <label for="question_2_1" title="English">
                                                           <span style="padding-left: 20px"> Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-inline" style="margin-left: 120px;padding-top: -20px">
                                                        {!! Form::radio('question_7',2,((isset($employee->profile)?$employee->profile->question_7==2:'')?1:0),['id'=>'question_7_2']) !!}
                                                        <label for="question_2_2" title="English">
                                                            <span>No</span>
                                                        </label>
                                                    </div>
                                                    <br>

                                                        <div style="width: 350px;margin-left: 10px">
                                                            {!! Form::label('city', 'If YES, please explain:') !!}
                                                            <div style="border-bottom: 1px solid black;margin-left: 150px;padding-top: -20px">
                                                                {{ isset($employee->profile)?$employee->profile->question_7_answer_explain:'' }}
                                                            </div>
                                                        </div>

                                                        <div style="margin-left: 370px;width: 700px;padding-top: -15px">
                                                            {!! Form::label('state', 'If YES, what can be done to accomodate your limitation?') !!}
                                                            <div style="border-bottom: 1px solid black;padding-top: -20px;margin-left: 360px">
                                                                {{ isset($employee->profile)?$employee->profile->question_7_answer_limitation:'' }}
                                                            </div>
                                                        </div>

                                                  </div>
                                             </div>

                                        <br>
                                            <div class="row">
                                                <div class="form-group" style="margin-left: 30px">
                                                    {!! Form::label('question_2','7.Have you ever been convicted (found guilty) of attempting or committing any crime other than a minor traffic violation?', ['class' => 'col-xs-12']) !!}
                                                    <div class="checkbox-inline" >
                                                        {!! Form::radio('question_8',1,((isset($employee->profile)?$employee->profile->question_8==1:'')?1:0),['id'=>'question_8_1']) !!}
                                                        <label for="question_2_1" title="English">
                                                           <span style="padding-left: 20px"> Yes</span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-inline" style="margin-left: 120px;padding-top: -20px">
                                                        {!! Form::radio('question_8',2,((isset($employee->profile)?$employee->profile->question_8==2:'')?1:0),['id'=>'question_8_2']) !!}
                                                        <label for="question_2_2" title="English">
                                                            <span>No</span>
                                                        </label>
                                                    </div>
                                                    <br>

                                                    <div style="width: 350px;margin-left: 10px">
                                                        {!! Form::label('city', 'If YES, give date::') !!}
                                                        <div style="border-bottom: 1px solid black;margin-left: 150px;padding-top: -20px">
                                                            {{ isset($employee->profile)?$employee->profile->question_8_answer_date:'' }}
                                                        </div>
                                                    </div>

                                                        <div style="margin-left: 400px;width: 400px;padding-top: -15px">
                                                            {!! Form::label('state', 'IF YES, for what?') !!}
                                                            <div style="border-bottom: 1px solid black;padding-top: -20px;margin-left: 120px">
                                                                {{ isset($employee->profile)?$employee->profile->question_8_answer_for_whate:'' }}
                                                            </div>
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

                        <div class="title_bar" style="border-bottom:1px solid #3678C0; margin-bottom:20px;background-color: #3678C0;padding: 4px">
                            <h4 style="color: white">SECTION 3.Referencesn</h4>
                        </div>

                    <div class="row">
                        <div class="form-group" style="margin-left: 30px">
                            {!! Form::label('question_2','4.Are you related to anyone employed by our company?', ['class' => 'col-xs-12']) !!}
                            <div class="checkbox-inline" >
                                {!! Form::radio('question_9',1,((isset($employee->profile)?$employee->profile->question_9==1:'')?1:0),['id'=>'question_9_1']) !!}
                                <label for="question_2_1" title="English">
                                    <span style="padding-left: 20px"> Yes</span>
                                </label>
                            </div>
                            <div class="checkbox-inline" style="margin-left: 120px;padding-top: -20px">
                                {!! Form::radio('question_9',2,((isset($employee->profile)?$employee->profile->question_9==2:'')?1:0),['id'=>'question_9_2']) !!}
                                <label for="question_2_2" title="English">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div style="width: 550px;margin-left: 30px">
                            {!! Form::label('provider_name', 'Company Name:') !!}
                            <div style="border-bottom: 1px solid black;margin-left: 120px;padding-top: -20px">
                                {{ isset($employee->profile)?$employee->profile->reference_company_name:'' }}
                            </div>
                        </div>
                        <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                            {!! Form::label('provider_speciality', 'Address:') !!}
                            <div style="border-bottom: 1px solid black;padding-top: -20px;margin-left: 100px">
                                {{ isset($employee->profile)?$employee->profile->reference_address:'' }}
                            </div>
                        </div>
                    </div>

                    <br>
                    <br>

                    <div class="row">
                        <div style="width: 550px;margin-left: 30px">
                            {!! Form::label('provider_name', 'Person Name:') !!}
                            <div style="border-bottom: 1px solid black;margin-left: 120px;padding-top: -20px">
                                {{ isset($employee->profile)?$employee->profile->reference_person_name:'' }}
                            </div>

                        </div>

                        <div style="margin-left: 600px;width: 500px;padding-top: -15px">
                            {!! Form::label('provider_speciality', 'How should I contact them?:') !!}
                            <div style="border-bottom: 1px solid black;padding-top: -20px;margin-left: 190px">
                                {{ isset($employee->profile)?$employee->profile->reference_contact:'' }}
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div style="width: 500px;margin-left: 30px">
                            {!! Form::label('provider_name', 'Position in Company:') !!}
                            <div style="border-bottom: 1px solid black;margin-left: 140px;padding-top: -20px">
                                {{ isset($employee->profile)?$employee->profile->reference_position_in_company:'' }}
                            </div>

                        </div>

                        <div style="margin-left: 600px;width: 530px;padding-top: -15px">
                            {!! Form::label('provider_speciality', 'How many years have you been acquainted?') !!}
                            <div style="border-bottom: 1px solid black;padding-top: -20px;margin-left: 300px">
                                {{ isset($employee->profile)?$employee->profile->reference_acquainted:'' }}
                            </div>
                        </div>
                    </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
<br>
<br>
    <h4 class="text-center" style="background-color: #3678C0;padding: 15px"><a href="" style="color: white;">Developed & Maintained By Exclusive Web Services</a></h4>
</div>

</body>
</html>
