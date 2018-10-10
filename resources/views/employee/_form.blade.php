<div>

    {!! csrf_field() !!}

    <div class="title_bar" style="border-bottom:1px solid #3678C0; margin-bottom:20px;background-color: #3678C0;padding: 5px 5px">
        <h3 style="color: white;padding: 3px;">SECTION 1. Caregiver Information</h3>
    </div>
    <br>

    <div id="caller-contact-container">
        <div class="form-horizontal" role="form">
            <fieldset>
                <div>
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-4">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    {!! Form::label('first_name', 'First Name') !!}<span class="required"> * </span>
                                    {!! Form::text('first_name',Input::old('first_name'),['id'=>'first_name','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter First Name']) !!}
                                </div>
                                @if ($errors->has('first_name'))
                                    <div class="error" style="color: red">{{ $errors->first('first_name') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    {!! Form::label('last_name', 'Last Name') !!}<span class="required"> * </span>
                                    {!! Form::text('last_name',Input::old('last_name'),['id'=>'last_name','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter Last Name']) !!}
                                </div>
                                @if ($errors->has('last_name'))
                                    <div class="error" style="color: red">{{ $errors->first('last_name') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-offset-1 col-sm-4">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    {!! Form::label('employee_mi', 'MI') !!}
                                    {!! Form::text('employee_mi',Input::old('employee_mi'),['id'=>'employee_mi','class' => 'form-control','Placeholder'=>'Enter Employee MI']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    {!! Form::label('permanent_address', 'Address Line 1') !!}<span class="required"> * </span>
                                    {!! Form::text('permanent_address',Input::old('permanent_address'),['id'=>'permanent_address','class' => 'form-control','required'=> 'required','Placeholder'=>'Address Line 1']) !!}
                                </div>
                            </div>
                            @if ($errors->has('permanent_address'))
                                <div class="error" style="color: red">{{ $errors->first('permanent_address') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                                {!! Form::label('permanent_address_2', 'Address Line 2', ['class' => 'col-xs-12']) !!}
                                <div class="col-xs-12">
                                    {!! Form::text('permanent_address_2',Input::old('permanent_address_2'),['id'=>'permanent_address_2','class' => 'form-control','Placeholder'=>'Address Line 2']) !!}
                                </div>
                            </div>
                            @if ($errors->has('permanent_address_2'))
                                <div class="error" style="color: red">{{ $errors->first('permanent_address_2') }}</div>
                            @endif
                        </div>
                    </div>


                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-12">
                            <div class="row">

                                <div class="col-xs-12 col-sm-4">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            {!! Form::label('city', 'City') !!}<span class="required"> * </span>
                                            {!! Form::text('city',Input::old('city'),['id'=>'city','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter City']) !!}
                                        </div>
                                    </div>
                                    @if ($errors->has('city'))
                                        <div class="error" style="color: red">{{ $errors->first('city') }}</div>
                                    @endif
                                </div>

                                <div class="col-xs-12 col-sm-4">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            {!! Form::label('state', 'State') !!}<span class="required"> * </span>
                                            {!! Form::Select('state',$state,33,['id'=>'state', 'class'=>'form-control ']) !!}
                                        </div>
                                    </div>
                                    @if ($errors->has('state'))
                                        <div class="error" style="color: red">{{ $errors->first('state') }}</div>
                                    @endif
                                </div>

                                <div class="col-xs-12 col-sm-4">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            {!! Form::label('zip_code', 'Zip Code') !!}<span class="required"> * </span>
                                            {!! Form::text('zip_code',Input::old('zip_code'),['id'=>'zip_code','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter Zip Code']) !!}
                                        </div>
                                    </div>
                                    @if ($errors->has('zip_code'))
                                        <div class="error" style="color: red">{{ $errors->first('zip_code') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>

                    <input type="hidden" name="type" value="employee" class="form-control">


                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-8">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    {!! Form::label('date_of_birth', 'Date of Birth') !!}<span class="required"> * </span>
                                    {!! Form::text('date_of_birth',Input::old('date_of_birth'),['data-provide'=>'datepicker','id'=>'date_of_birth','class' => 'form-control datepicker','required'=> 'required','Placeholder'=>'DD/MM/YYYY']) !!}

                                </div>
                            </div>
                            @if ($errors->has('date_of_birth'))
                                <div class="error" style="color: red">{{ $errors->first('date_of_birth') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-8">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    {!! Form::label('employee_ssn', 'SSN') !!}
                                    {!! Form::text('employee_ssn',Input::old('employee_ssn'),['id'=>'employee_ssn','class' => 'form-control','Placeholder'=>'Enter Employee MI']) !!}
                                </div>
                            </div>
                            @if ($errors->has('employee_ssn'))
                                <div class="error" style="color: red">{{ $errors->first('employee_ssn') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-8">

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        {!! Form::label('telephone_number', 'Phone') !!}<span class="required"> * </span>
                                        {!! Form::text('telephone_number',Input::old('telephone_number'),['id'=>'telephone_number','class' => 'form-control','required'=> 'required','Placeholder'=>'Telephone Number (with Area Code)']) !!}
                                    </div>
                                </div>
                                @if ($errors->has('telephone_number'))
                                    <div class="error" style="color: red">{{ $errors->first('telephone_number') }}</div>
                                @endif
                            </div>
                    </div>

                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-8">
                            <div class="form-group">
                                {!! Form::label('cell_phone', 'Mobile', ['class' => 'col-xs-12']) !!}
                                <div class="col-xs-12">
                                    {!! Form::text('cell_phone',Input::old('cell_phone'),['id'=>'cell_phone','class' => 'form-control','required'=> 'required','Placeholder'=>'Cell Phone (with Area Code)']) !!}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-8">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    {!! Form::label('email', 'Email Address') !!}<span class="required"> * </span>
                                    {!! Form::text('email',Input::old('email'),['id'=>'email','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter Email Address']) !!}
                                </div>

                            </div>
                            @if ($errors->has('email'))
                                <div class="error" style="color: red">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                    </div>
            </fieldset>
        </div>
    </div>
</div>

<div>

    <div style="border-bottom:1px solid #3678C0; margin-bottom:20px;background-color: #3678C0;
    padding: 10px;">
        <h3 style="color: white">SECTION 2.General Questions</h3>
    </div>
    <div class="form-horizontal" role="form">
        <fieldset>
            <div>
                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            {!! Form::label('question_1', 'Which Position are you applying for', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('question_1',$employee->profile ? $employee->profile->question_1:'',['id'=>'question_1','class' => 'form-control','Placeholder'=>'Answer The Question']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            {!! Form::label('indicate_licenses', 'Please indicate any licenses held:', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('indicate_licenses',$employee->profile ? $employee->profile->indicate_licenses:'',['id'=>'indicate_licenses','class' => 'form-control','Placeholder'=>'Enter Indicate Licenses']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            {!! Form::label('licence_number', 'Licence number', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('licence_number',$employee->profile ? $employee->profile->licence_number:'',['id'=>'licence_number','class' => 'form-control','Placeholder'=>'Enter Licence number']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-12">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('licence_expiration_date', 'License expiration date:', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('licence_expiration_date',$employee->profile ? $employee->profile->licence_expiration_date:'',['data-provide'=>'datepicker','id'=>'licence_expiration_date','class' => 'form-control datepicker','Placeholder'=>'Enter License expiration Date']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('lowest_wage_per_hour', 'Lowest Acceptable Wage Per Hour:', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::number('lowest_wage_per_hour',$employee->profile ? $employee->profile->lowest_wage_per_hour:'',['id'=>'lowest_wage_per_hour','class' => 'form-control','Placeholder'=>'Enter Lowest Acceptable Wage Per Hour']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('lowest_wage_24_hour', 'Lowest Acceptable Wage for a 24 Hour Live-in:', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::number('lowest_wage_24_hour',$employee->profile ? $employee->profile->lowest_wage_24_hour:'',['id'=>'lowest_wage_24_hour','class' => 'form-control','Placeholder'=>'Enter Lowest Acceptable Wage for a 24 Hour Live-in']) !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            {!! Form::label('date_you_can_start', 'Date you can start:', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('date_you_can_start',$employee->profile ? $employee->profile->date_you_can_start:'',['data-provide'=>'datepicker','id'=>'date_you_can_start','class' => 'form-control datepicker','Placeholder'=>'Enter Date you can start:']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-xs-12 col-sm-12">
                            <div class="row">
                                <div class="form-group">
                                    {!! Form::label('question_2', '1. How did you hear about us?', ['class' => 'col-xs-12']) !!}
                                    <div class="checkbox-inline" >
                                        <label for="question_2_1" title="English">
                                            {!! Form::radio('question_2',1,((isset($employee->profile)?$employee->profile->question_2==1:'')?1:0),['id'=>'question_2_1']) !!}
                                           Word of Mouth
                                        </label>
                                    </div>
                                    <div class="checkbox-inline">
                                        <label for="question_2_2" title="English">
                                            {!! Form::radio('question_2',2,((isset($employee->profile)?$employee->profile->question_2==2:'')?1:0),['id'=>'question_2_2']) !!}
                                            <span>Job Fair</span>
                                        </label>
                                    </div>
                                    <div class="checkbox-inline">
                                        <label for="question_2_3" title="English">
                                            {!! Form::radio('question_2',3,((isset($employee->profile)?$employee->profile->question_2==3:'')?1:0),['id'=>'question_2_3']) !!}
                                            <span>Newspaper</span>
                                        </label>
                                    </div>
                                    <div class="checkbox-inline">
                                        <label for="question_2_4" title="English">
                                            {!! Form::radio('question_2',4,((isset($employee->profile)?$employee->profile->question_2==4:'')?1:0),['id'=>'question_2_4']) !!}
                                            <span>Craigs List</span>
                                        </label>
                                    </div>
                                    <div class="checkbox-inline">
                                        <label for="question_2_5" title="English">
                                            {!! Form::radio('question_2',5,((isset($employee->profile)?$employee->profile->question_2==5:'')?1:0),['id'=>'question_2_5']) !!}
                                            <span>Other Caregiver</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-xs-12 col-sm-12">
                            <div class="row">
                                <div class="form-group">
                                    {!! Form::label('question_3', '2. Are you a US citizen or legally eligible to hold employment in USA?', ['class' => 'col-xs-12']) !!}
                                    <div class="checkbox-inline" >
                                        <label for="question_3_1" title="English">
                                            {!! Form::radio('question_3',1,((isset($employee->profile)?$employee->profile->question_3==1:'')?1:0),['id'=>'question_3_1']) !!}
                                            <span>Yes</span>
                                        </label>
                                    </div>
                                    <div class="checkbox-inline">
                                        <label for="question_3_2" title="English">
                                            {!! Form::radio('question_3',2,((isset($employee->profile)?$employee->profile->question_3==2:'')?1:0),['id'=>'question_3_2']) !!}
                                            <span>No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-xs-12 col-sm-12">
                            <div class="row">
                                <div class="form-group">
                                    {!! Form::label('question_4', '3.Are you at least 18 years old?', ['class' => 'col-xs-12']) !!}
                                    <div class="checkbox-inline" >
                                        <label for="question_4_1" title="English">
                                            {!! Form::radio('question_4',1,((isset($employee->profile)?$employee->profile->question_4==1:'')?1:0),['id'=>'question_4_1']) !!}
                                            <span>Yes</span>
                                        </label>
                                    </div>
                                    <div class="checkbox-inline">
                                        <label for="question_4_2" title="English">
                                            {!! Form::radio('question_4',2,((isset($employee->profile)?$employee->profile->question_4==2:'')?1:0),['id'=>'question_4_2']) !!}
                                            <span>No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::label('question_4_answer', 'If NO, how many months before you turn 18?', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('question_4_answer',$employee->profile ? $employee->profile->question_4_answer:'',['id'=>'question_4_answer','class' => 'form-control','Placeholder'=>'Enter Answer:']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-xs-12 col-sm-12">
                            <div class="row">
                                <div class="form-group">
                                    {!! Form::label('question_5', '4.Are you related to anyone employed by our company?', ['class' => 'col-xs-12']) !!}
                                    <div class="checkbox-inline" >
                                        <label for="question_5_1" title="English">
                                            {!! Form::radio('question_5',1,((isset($employee->profile)?$employee->profile->question_5==1:'')?1:0),['id'=>'question_5_1']) !!}
                                            <span>Yes</span>
                                        </label>
                                    </div>
                                    <div class="checkbox-inline">
                                        <label for="question_5_2" title="English">
                                            {!! Form::radio('question_5',2,((isset($employee->profile)?$employee->profile->question_5==2:'')?1:0),['id'=>'question_5_2']) !!}
                                            <span>No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::label('question_5_answer', 'If yes, name of the person, relationship and location employed:', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('question_5_answer',$employee->profile ? $employee->profile->question_5_answer:'',['id'=>'question_5_answer','class' => 'form-control','Placeholder'=>'Enter Answer:']) !!}
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-xs-12 col-sm-12">
                            <div class="row">
                                <div class="form-group">
                                    {!! Form::label('question_6', '5.Have you ever worked for our company?', ['class' => 'col-xs-12']) !!}
                                    <div class="checkbox-inline" >
                                        <label for="question_6_1" title="English">
                                            {!! Form::radio('question_6',1,((isset($employee->profile)?$employee->profile->question_6==1:'')?1:0),['id'=>'question_6_1']) !!}
                                            <span>Yes</span>
                                        </label>
                                    </div>
                                    <div class="checkbox-inline">
                                        <label for="question_6_2" title="English">
                                            {!! Form::radio('question_6',2,((isset($employee->profile)?$employee->profile->question_6==2:'')?1:0),['id'=>'question_6_2']) !!}
                                            <span>No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            {!! Form::label('question_6_answer_date', 'If YES, give date:', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('question_6_answer_date',$employee->profile ? $employee->profile->question_6_answer_date:'',['data-provide'=>'datepicker','id'=>'question_6_answer_date','class' => 'form-control datepicker','Placeholder'=>'Enter Answer:']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            {!! Form::label('question_6_answer_location', 'If YES, enter location:', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('question_6_answer_location',$employee->profile ? $employee->profile->question_6_answer_location:'',['id'=>'question_6_answer_location','class' => 'form-control','Placeholder'=>'Enter Answer:']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            {!! Form::label('question_6_answer_supervisor_name', 'If YES, enter Supervisors Name:', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('question_6_answer_supervisor_name',$employee->profile ? $employee->profile->question_6_answer_supervisor_name:'',['id'=>'question_6_answer_supervisor_name','class' => 'form-control','Placeholder'=>'Enter Answer:']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-xs-12 col-sm-12">
                            <div class="row">
                                <div class="form-group">
                                    {!! Form::label('question_7', '6.Do you have any disabilities that may limit your ability to perform the work for which you are applying?', ['class' => 'col-xs-12']) !!}
                                    <div class="checkbox-inline" >
                                        <label for="question_7_1" title="English">
                                            {!! Form::radio('question_7',1,((isset($employee->profile)?$employee->profile->question_7==1:'')?1:0),['id'=>'question_7_1']) !!}
                                            <span>Yes</span>
                                        </label>
                                    </div>
                                    <div class="checkbox-inline">
                                        <label for="question_7_2" title="English">
                                            {!! Form::radio('question_7',2,((isset($employee->profile)?$employee->profile->question_7==2:'')?1:0),['id'=>'question_7_2']) !!}
                                            <span>No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::label('question_7_answer_explain', 'If YES, please explain:', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('question_7_answer_explain',$employee->profile ? $employee->profile->question_7_answer_explain:'',['id'=>'question_7_answer_explain','class' => 'form-control','Placeholder'=>'Enter Answer:']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::label('question_7_answer_limitation', 'If YES, what can be done to accomodate your limitation?', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('question_7_answer_limitation',$employee->profile ? $employee->profile->question_7_answer_limitation:'',['id'=>'question_7_answer_limitation','class' => 'form-control','Placeholder'=>'Enter Answer:']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-xs-12 col-sm-12">
                            <div class="row">
                                <div class="form-group">
                                    {!! Form::label('question_8', '7.Have you ever been convicted (found guilty) of attempting or committing any crime other than a minor traffic violation?', ['class' => 'col-xs-12']) !!}
                                    <div class="checkbox-inline" >
                                        <label for="question_8_1" title="English">
                                            {!! Form::radio('question_8',1,((isset($employee->profile)?$employee->profile->question_8==1:'')?1:0),['id'=>'question_8_1']) !!}
                                            <span>Yes</span>
                                        </label>
                                    </div>
                                    <div class="checkbox-inline">
                                        <label for="question_8_2" title="English">
                                            {!! Form::radio('question_8',2,((isset($employee->profile)?$employee->profile->question_8==2:'')?1:0),['id'=>'question_8_2']) !!}
                                            <span>No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::label('question_8_answer_date', 'If YES, give date:', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('question_8_answer_date',$employee->profile ? $employee->profile->question_8_answer_date:'',['data-provide'=>'datepicker','id'=>'question_8_answer_date','class' => 'form-control datepicker','Placeholder'=>'Enter Answer:']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::label('question_8_answer_for_whate', 'IF YES, for what?', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('question_8_answer_for_whate',$employee->profile ? $employee->profile->question_8_answer_for_whate:'',['id'=>'question_8_answer_for_whate','class' => 'form-control','Placeholder'=>'Enter Answer:']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>

<div id="ht-inquiry-contact-container">

    <div class="title_bar" style="border-bottom:1px solid #3678C0; margin-bottom:20px;background-color: #3678C0;
    padding: 10px">
        <h3 style="color: white">
            <span>SECTION 3.References</span>
        </h3>
    </div>

    <div class="form-horizontal" role="form">
        <fieldset>
            <div>
                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-xs-12 col-sm-12">
                            <div class="row">
                                <div class="form-group">
                                    {!! Form::label('question_9', 'May we contact your references?', ['class' => 'col-xs-12']) !!}
                                    <div class="checkbox-inline" >
                                        <label for="question_9_1" title="English">
                                            {!! Form::radio('question_9',1,((isset($employee->profile)?$employee->profile->question_9==1:'')?1:0),['id'=>'question_9_1']) !!}
                                            <span>Yes</span>
                                        </label>
                                    </div>
                                    <div class="checkbox-inline">
                                        <label for="question_9_2" title="English">
                                            {!! Form::radio('question_9',2,((isset($employee->profile)?$employee->profile->question_9==2:'')?1:0),['id'=>'question_9_2']) !!}
                                            <span>No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::label('reference_company_name', 'Company Name', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('reference_company_name',$employee->profile ? $employee->profile->reference_company_name:'',['id'=>'reference_company_name','class' => 'form-control','Placeholder'=>'Enter Company Name']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::label('reference_address', 'Address', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('reference_address',$employee->profile ? $employee->profile->reference_address:'',['id'=>'reference_address','class' => 'form-control','Placeholder'=>'Enter Address']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::label('reference_person_name:', 'Person Name:', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('reference_person_name',$employee->profile ? $employee->profile->reference_person_name:'',['id'=>'reference_person_name','class' => 'form-control','Placeholder'=>'Enter Persone Name']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::label('reference_contact', 'How should I contact them?', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('reference_contact',$employee->profile ? $employee->profile->reference_contact:'',['id'=>'reference_contact','class' => 'form-control','Placeholder'=>'How should I contact them?']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::label('reference_position_in_company', 'Position in Company:', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('reference_position_in_company',$employee->profile ? $employee->profile->reference_position_in_company:'',['id'=>'reference_position_in_company','class' => 'form-control','Placeholder'=>'Enter Position']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::label('reference_acquainted', 'How many years have you been acquainted?', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('reference_acquainted',$employee->profile ? $employee->profile->reference_acquainted:'',['id'=>'reference_acquainted','class' => 'form-control','Placeholder'=>'Enter How many years have you been acquainted?']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-2 text-center">
                        <button type="submit" class="btn btn-primary btn-lg btn-block btn-huge">Submit</button>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>


<br>
<br>

<script>

    $('.datepicker').datepicker({
        autoclose: true,
        format: "dd-mm-yyyy"
    });

</script>