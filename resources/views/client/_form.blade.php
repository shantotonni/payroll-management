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
                                  </div>
                                  <div class="col-xs-9">
                                      {!! Form::text('managed_medicaid_health_plan',$client->profile ? $client->profile->managed_medicaid_health_plan:'',['id'=>'managed_medicaid_health_plan','class' => 'form-control','Placeholder'=>'Enter Medicaid health plan you are in now']) !!}
                                      @if ($errors->has('managed_medicaid_health_plan'))
                                          <div class="error"
                                               style="color: red">{{ $errors->first('managed_medicaid_health_plan') }}</div>
                                      @endif
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
                                    </div>
                                    <div class="col-xs-9">
                                        {!! Form::text('managed_MLTC_plan',$client->profile ? $client->profile->managed_MLTC_plan:'',['id'=>'managed_MLTC_plan','class' => 'form-control','Placeholder'=>'Enter MLTC plan you are transferring to']) !!}
                                        @if ($errors->has('managed_MLTC_plan'))
                                            <div class="error"
                                                 style="color: red">{{ $errors->first('managed_MLTC_plan') }}</div>
                                        @endif
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
                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            {!! Form::label('first_name', 'First Name') !!}<span
                                                    class="required"> * </span>
                                            {!! Form::text('first_name',Input::old('first_name'),['id'=>'first_name','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter First Name']) !!}
                                        </div>
                                    </div>
                                    @if ($errors->has('first_name'))
                                        <div class="error" style="color: red">{{ $errors->first('first_name') }}</div>
                                    @endif
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            {!! Form::label('last_name', 'Last Name') !!}<span
                                                    class="required"> * </span>
                                            {!! Form::text('last_name',Input::old('last_name'),['id'=>'last_name','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter Last Name']) !!}
                                        </div>
                                    </div>
                                    @if ($errors->has('last_name'))
                                        <div class="error" style="color: red">{{ $errors->first('last_name') }}</div>
                                    @endif
                                </div>

                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('middle_initial', 'Middle Initial', ['class' => 'col-xs-12']) !!}
                                        <div class="col-xs-12">
                                            {!! Form::text('middle_initial',Input::old('middle_initial'),['id'=>'middle_initial','class' => 'form-control','Placeholder'=>'Enter Middle Initial']) !!}
                                        </div>
                                    </div>
                                    @if ($errors->has('middle_initial'))
                                        <div class="error"
                                             style="color: red">{{ $errors->first('middle_initial') }}</div>
                                    @endif
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            {!! Form::label('date_of_birth', 'Date of Birth') !!}<span
                                                    class="required"> * </span>
                                            {!! Form::text('date_of_birth',Input::old('date_of_birth'),['data-provide'=>"datepicker",'id'=>'date_of_birth','class' => 'form-control datepicker','required'=> 'required','Placeholder'=>'YYYY/MM/DD']) !!}
                                        </div>
                                    </div>
                                    @if ($errors->has('date_of_birth'))
                                        <div class="error"
                                             style="color: red">{{ $errors->first('date_of_birth') }}</div>
                                    @endif
                                </div>

                            </div>

                            <div class="row-fluid">
                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            {!! Form::label('medicaid_id', 'Medicaid ID') !!}
                                            {!! Form::text('medicaid_id',Input::old('medicaid_id'),['id'=>'medicaid_id','class' => 'form-control','Placeholder'=>'Enter Medicaid ID']) !!}
                                        </div>
                                    </div>
                                    @if ($errors->has('medicaid_id'))
                                        <div class="error" style="color: red">{{ $errors->first('medicaid_id') }}</div>
                                    @endif
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="checkbox-inline">
                                                    {!! Form::label('gender', 'Gender') !!}<span
                                                            class="required"> * </span>
                                                    <br>
                                                    <label for="gender" title="English">
                                                        {!! Form::radio('gender',1,(($client->gender==1)?1:0),['id'=>'gender','required'=> 'required','Placeholder'=>'Enter Medicaid ID']) !!}
                                                        <span>Male</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox-inline">
                                                    <br>
                                                    <label for="MaleValue1" title="English">
                                                        {!! Form::radio('gender',2,(($client->gender==2)?1:0),['id'=>'MaleValue1','required'=> 'required','Placeholder'=>'Enter Medicaid ID']) !!}
                                                        <span>Female</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-xs-12 col-sm-6" style="padding-left: 28px">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    {!! Form::label('telephone_number', 'Telephone Number(with Area Code)') !!}
                                                    <span class="required"> * </span>
                                                    {!! Form::text('telephone_number',Input::old('telephone_number'),['id'=>'telephone_number','class' => 'form-control','required'=> 'required','Placeholder'=>'Telephone Number (with Area Code)']) !!}
                                                </div>
                                            </div>
                                            @if ($errors->has('telephone_number'))
                                                <div class="error"
                                                     style="color: red">{{ $errors->first('telephone_number') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="type" value="consumer" class="form-control">

                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('cell_phone', 'Cell Phone (with Area Code)', ['class' => 'col-xs-12']) !!}
                                        <div class="col-xs-12">
                                            {!! Form::text('cell_phone',Input::old('cell_phone'),['id'=>'cell_phone','class' => 'form-control','required'=> 'required','Placeholder'=>'Cell Phone (with Area Code)']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row-fluid">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            {!! Form::label('permanent_address', 'Permanent Address') !!}<span
                                                    class="required"> * </span>
                                            {!! Form::text('permanent_address',Input::old('permanent_address'),['id'=>'permanent_address','class' => 'form-control','required'=> 'required','Placeholder'=>'Address Line 1']) !!}
                                        </div>
                                    </div>
                                    @if ($errors->has('permanent_address'))
                                        <div class="error"
                                             style="color: red">{{ $errors->first('permanent_address') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            {!! Form::label('permanent_address_2', 'Permanent Address Line 2') !!}
                                            {!! Form::text('permanent_address_2',Input::old('permanent_address_2'),['class' => 'form-control','Placeholder'=>'Address Line 2']) !!}
                                        </div>
                                    </div>
                                    @if ($errors->has('permanent_address_2'))
                                        <div class="error"
                                             style="color: red">{{ $errors->first('permanent_address_2') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row-fluid">
                                <div class="col-xs-12 col-sm-9">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    {!! Form::label('country', 'Country') !!}<span
                                                            class="required"> * </span>
                                                    {!! Form::Select('country',$country,236,['id'=>'country', 'class'=>'form-control ']) !!}
                                                </div>
                                            </div>
                                            @if ($errors->has('country'))
                                                <div class="error"
                                                     style="color: red">{{ $errors->first('country') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    {!! Form::label('state', 'State') !!}<span
                                                            class="required"> * </span>
                                                    {!! Form::Select('state',$state,33,['id'=>'state', 'class'=>'form-control ']) !!}
                                                </div>
                                            </div>
                                            @if ($errors->has('state'))
                                                <div class="error"
                                                     style="color: red">{{ $errors->first('state') }}</div>
                                            @endif
                                        </div>

                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    {!! Form::label('zip_code', 'Zip Code') !!}<span
                                                            class="required"> * </span>
                                                    {!! Form::text('zip_code',Input::old('zip_code'),['id'=>'zip_code','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter Zip Code']) !!}
                                                </div>
                                            </div>
                                            @if ($errors->has('zip_code'))
                                                <div class="error"
                                                     style="color: red">{{ $errors->first('zip_code') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            {!! Form::label('email', 'Email Address') !!}<span
                                                    class="required"> * </span>
                                            {!! Form::text('email',Input::old('email'),['id'=>'email','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter Email Address']) !!}
                                        </div>
                                    </div>
                                    @if ($errors->has('email'))
                                        <div class="error" style="color: red">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

        <div>

            <div style="border-bottom:1px solid #3678C0; margin-bottom:20px;">
                <h3 style="text-transform: uppercase;color: #448FC8;font-weight: bold">Authorized Representative</h3>
            </div>
            <div class="form-horizontal" role="form">
                <fieldset>
                    <div>
                        <div class="row-fluid">
                            <div class="col-xs-12 col-sm-3">
                                <div class="form-group">
                                    {!! Form::label('authorized_first_name', 'First Name', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('authorized_first_name',$client->profile ? $client->profile->authorized_first_name:'',['id'=>'authorized_first_name','class' => 'form-control','Placeholder'=>'Enter First Name']) !!}
                                    </div>
                                </div>
                                @if ($errors->has('authorized_first_name'))
                                    <div class="error"
                                         style="color: red">{{ $errors->first('authorized_first_name') }}</div>
                                @endif
                            </div>

                            <div class="col-xs-12 col-sm-3">
                                <div class="form-group">
                                    {!! Form::label('authorized_last_name', 'Last Name', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('authorized_last_name',$client->profile ? $client->profile->authorized_last_name:'',['id'=>'authorized_last_name','class' => 'form-control','Placeholder'=>'Enter Last Name']) !!}
                                    </div>
                                </div>
                                @if ($errors->has('authorized_last_name'))
                                    <div class="error"
                                         style="color: red">{{ $errors->first('authorized_last_name') }}</div>
                                @endif
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('authorized_middle_initial', 'Middle Initial', ['class' => 'col-xs-12']) !!}
                                            <div class="col-xs-12">
                                                {!! Form::text('authorized_middle_initial',$client->profile ? $client->profile->authorized_middle_initial:'',['id'=>'authorized_middle_initial','class' => 'form-control','Placeholder'=>'Enter Middle Initial']) !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('relationship_to_member', 'Relationship to Member', ['class' => 'col-xs-12']) !!}
                                            <div class="col-xs-12">
                                                {!! Form::text('relationship_to_member',$client->profile ? $client->profile->relationship_to_member:'',['id'=>'relationship_to_member','class' => 'form-control','Placeholder'=>'Relationship to Member']) !!}
                                            </div>
                                        </div>
                                        @if ($errors->has('relationship_to_member'))
                                            <div class="error"
                                                 style="color: red">{{ $errors->first('relationship_to_member') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">
                            <div class="col-xs-12 col-sm-9">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('authorized_address', 'Address', ['class' => 'col-xs-12']) !!}
                                            <div class="col-xs-12">
                                                {!! Form::text('authorized_address',$client->profile ? $client->profile->authorized__address:'',['id'=>'authorized_address', 'class'=>'form-control ']) !!}
                                            </div>
                                        </div>
                                        @if ($errors->has('authorized_address'))
                                            <div class="error"
                                                 style="color: red">{{ $errors->first('authorized_address') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('authorized_city', 'City', ['class' => 'col-xs-12']) !!}
                                            <div class="col-xs-12">
                                                {!! Form::text('authorized_city',$client->profile ? $client->profile->authorized_city:'',['id'=>'authorized_city','class' => 'form-control','Placeholder'=>'Enter City']) !!}
                                            </div>
                                        </div>
                                        @if ($errors->has('authorized_city'))
                                            <div class="error"
                                                 style="color: red">{{ $errors->first('authorized_city') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('authorized_country', 'Country', ['class' => 'col-xs-12']) !!}
                                            <div class="col-xs-12">
                                                {!! Form::Select('authorized_country',$country,236,['id'=>'authorized_country', 'class'=>'form-control ']) !!}
                                            </div>
                                        </div>
                                        @if ($errors->has('authorized_country'))
                                            <div class="error"
                                                 style="color: red">{{ $errors->first('authorized_country') }}</div>
                                        @endif
                                    </div>

                                    <div class="col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('authorized_state', 'State', ['class' => 'col-xs-12']) !!}
                                            <div class="col-xs-12">
                                                {!! Form::Select('authorized_state',$state,84,['id'=>'authorized_state', 'class'=>'form-control ']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-3">
                                <div class="form-group">
                                    {!! Form::label('authorized_zip_code', 'Zip Code', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('authorized_zip_code',$client->profile ? $client->profile->authorized_zip_code:'',['id'=>'authorized_zip_code','class' => 'form-control','Placeholder'=>'Enter Zip Code']) !!}
                                    </div>
                                </div>
                                @if ($errors->has('authorized_zip_code'))
                                    <div class="error"
                                         style="color: red">{{ $errors->first('authorized_zip_code') }}</div>
                                @endif
                            </div>

                        </div>

                        <div class="row-fluid">
                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('authorized_telephone_number', 'Telephone Number (with Area Code)', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('authorized_telephone_number',$client->profile ? $client->profile->authorized_telephone_number:'',['id'=>'authorized_telephone_number','class' => 'form-control','Placeholder'=>'Enter Telephone Number (with Area Code)']) !!}
                                    </div>
                                </div>
                                @if ($errors->has('authorized_telephone_number'))
                                    <div class="error"
                                         style="color: red">{{ $errors->first('authorized_telephone_number') }}</div>
                                @endif
                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('authorized_cell_phone', 'Cell Phone (with Area Code)', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('authorized_cell_phone',$client->profile ? $client->profile->authorized_cell_phone:'',['id'=>'authorized_cell_phone','class' => 'form-control','Placeholder'=>'Enter Cell Phone (with Area Code)']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('authorized_email_address', 'Email Address', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('authorized_email_address',$client->profile ? $client->profile->authorized_email_address:'',['id'=>'authorized_email_address','class' => 'form-control','Placeholder'=>'Enter Email Address']) !!}
                                    </div>
                                </div>
                                @if ($errors->has('authorized_email_address'))
                                    <div class="error"
                                         style="color: red">{{ $errors->first('authorized_email_address') }}</div>
                                @endif
                            </div>
                        </div>
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
                    That I must join a Managed Long Term Care Plan (MLTC Plan) to receive Medicaid community-based
                    long term care (cbltc) services in my county.

                </label>
            </div>
            <div class="checkbox">
                <label for="Value1" title="">
                    <input type="checkbox" name="acknowledgement_check_box_data[]" id="Value1" value="2">
                     That I must join a Managed Long Term Care Plan (MLTC Plan) to receive Medicaid
                    community-based
                    long term care (cbltc) services in my county.

                </label>
            </div>
            <div class="checkbox" style="width: 100%;">
                <label for="Value2" title="">
                    <input type="checkbox" name="acknowledgement_check_box_data[]" id="Value2" value="3">
                    <span>
                    The differences between a Medicaid health plan and a MLTC Plan and that I will lose some benefits.
                </span>
                </label>
            </div>

            <div class="checkbox" style="width: 100%;">
                <label for="Value3" title="">
                    <input type="checkbox" name="acknowledgement_check_box_data[]" id="Value3" value="4">
                    <span>
                    I may not be able to see my doctors if I change to a MLTC Plan.
                </span>
                </label>
            </div>

            <div class="checkbox" style="width: 100%;">
                <label for="Value4" title="">
                    <input type="checkbox" name="acknowledgement_check_box_data[]" id="Value4" value="5">
                    <span>The Conflict Free Evaluation and Enrollment Center (CFEEC) must determine I need more than 120
    days of cbltc services and that I am nursing home eligible, before I can join a plan. A CFEEC nurse will
    contact me to schedule an evaluation.</span>
                </label>
            </div>

            <div class="checkbox" style="width: 100%;">
                <label for="Value5" title="">
                    <input type="checkbox" name="acknowledgement_check_box_data[]" id="Value5" value="6">
                    <span>I give my Provider permission to give all needed medical information only if it is relevant to my request
    to transfer to a long term care plan. This may include any disability information needed to confirm
    needed services that are not available in my Medicaid health plan.</span>
                </label>
            </div>
        </div>

        <div class="title_bar" style="border-bottom:1px solid #3678C0; margin-bottom:20px;background-color: #3678C0;
    padding: 6px">
            <h3 style="color: white">SECTION 4. Physician Authorization</h3>
        </div>

        <div id="ht-inquiry-contact-container">
            <div class="form-horizontal" role="form">
                <fieldset>
                    <div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="row-fluid">
                                <p style="margin-left: 15px">
                                    A Physician must fill out this Section including the
                                    Provider Information/Signature Box listed below.
                                </p>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="row">
                                        <label class="col-xs-12">I</label>
                                        <div class="col-xs-12">
                                            {!! Form::text('physician_name',$client->profile ? $client->profile->physician_name:'',['id'=>'physician_name','class' => 'form-control','Placeholder'=>'Enter Physician Name']) !!}
                                        </div>
                                        {!! Form::label('authorized_email_address', 'Physician Name', ['class' => 'col-xs-12','style'=>'text-align:center']) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="row">
                                        <label class="col-xs-12">hereby confirm that</label>
                                        <div class="col-xs-12">
                                            {!! Form::text('patient_name',$client->profile ? $client->profile->patient_name:'',['id'=>'patient_name','class' => 'form-control','Placeholder'=>'Enter Patient Name']) !!}
                                        </div>
                                        {!! Form::label('patient_name', 'Patient Name', ['class' => 'col-xs-12','style'=>'text-align:center']) !!}
                                    </div>
                                </div>

                                <p style="margin-left: 15px">requires the service/services listed below which makes
                                    him/her a candidate to transfer from a Medicaid Health Plan to a Managed Long Term
                                    Care Plan.
                                </p>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <br>
            <div class="title_bar" style="border-bottom:1px solid #3678C0; margin-bottom:20px;">
                <h3>
                    <span>4a. Please add check mark <span class="glyphicon glyphicon-ok-circle"
                                                                               aria-hidden="true"
                                                                               style="font-size:20px;"></span> to all that apply.</span>
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
                                            <label for="Value10">
                                                {{--@foreach($client->check_box_data as $data)--}}
                                                    {{--@if($data->check_box_data == 1)--}}
                                                         <input type="checkbox"  name="check_box_data[]" id="Value10" value="1">
                                                   {{--@else--}}
                                                        {{--<input type="checkbox" name="check_box_data[]" id="Value10" value="1">--}}
                                                    {{--@endif--}}
                                                {{--@endforeach--}}
                                                <span>
                                                    Environmental Modification: Internal and external physical adaptations to the home, which are
necessary to assure the health, welfare, and safety of the individual, enable the individual to
function with greater independence in the home, and prevent institutionalization.
                                                </span>
                                            </label>

                                        </div>

                                        <div class="checkbox" style="width: 100%;">
                                                <label for="Value6" title="">
                                                 {{--@foreach($client->check_box_data as $data)--}}
                                                     {{--@if($data->check_box_data == 2)--}}
                                                        <input type="checkbox" name="check_box_data[]"  id="Value6" value="2">
                                                     {{--@else--}}
                                                        {{--<input type="checkbox" name="check_box_data[]" id="Value6" value="2">--}}

                                                     {{--@endif--}}
                                                 {{--@endforeach--}}
                                                        <span>Home Delivered Meals</span>
                                                </label>

                                        </div>

                                        <div class="checkbox" style="width: 100%;">


                                                    <label for="Value7" title="">
                                                        {{--@foreach($client->check_box_data as $data)--}}
                                                        {{--@if($data->check_box_data== 3 )--}}
                                                        <input type="checkbox" name="check_box_data[]" id="Value7" value="3">

                                                            {{--@else--}}
                                                            {{--<input type="checkbox" name="check_box_data[]" id="Value7" value="3">--}}
                                                        {{--@endif--}}
                                                        {{--@endforeach--}}
                                                            <span>Social Day Care</span>
                                                    </label>



                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="title_bar" style="border-bottom:1px solid #3678C0; margin-bottom:20px;">
                <h3>
                    <span>4b. Provider Information/Signature</span>
                </h3>
            </div>
            <div class="form-horizontal" role="form">
                <fieldset>
                    <div>
                        <div class="row-fluid">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('provider_name', 'Physician Name', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('provider_name',$client->profile ? $client->profile->provider_name:'',['id'=>'provider_name','class' => 'form-control','Placeholder'=>'Enter Physician Name']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('provider_speciality', 'Specialty', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('provider_speciality',$client->profile ? $client->profile->provider_speciality:'',['id'=>'provider_speciality','class' => 'form-control','Placeholder'=>'Enter Specialty']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('provider_licence', 'License #:', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('provider_licence',$client->profile ? $client->profile->provider_licence:'',['id'=>'provider_licence','class' => 'form-control','Placeholder'=>'Enter License']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('provider_name_of_client', 'Name of Clinic/Facility:', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('provider_name_of_client',$client->profile ? $client->profile->provider_name_of_client:'',['id'=>'provider_name_of_client','class' => 'form-control','Placeholder'=>'Enter Name of Clinic/Facility']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">
                            <div class="col-xs-12 col-sm-12">
                                <div class="form-group">
                                    {!! Form::label('provider_address', 'Address:', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('provider_address',$client->profile ? $client->profile->provider_address:'',['id'=>'provider_address','class' => 'form-control','Placeholder'=>'Enter Address']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('provider_city', 'City:', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('provider_city',$client->profile ? $client->profile->provider_city:'',['id'=>'provider_city','class' => 'form-control','Placeholder'=>'Enter City']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="form-group">
                                    {!! Form::label('provider_state', 'State:', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('provider_state',$client->profile ? $client->profile->provider_state:'',['id'=>'provider_state','class' => 'form-control','Placeholder'=>'Enter City']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="form-group">
                                    {!! Form::label('provider_zip_code', 'Zip Code:', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('provider_zip_code',$client->profile ? $client->profile->provider_zip_code:'',['id'=>'provider_zip_code','class' => 'form-control','Placeholder'=>'Enter City']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('provider_phone', 'Phone:', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('provider_phone',$client->profile ? $client->profile->provider_phone:'',['id'=>'provider_phone','class' => 'form-control','Placeholder'=>'Enter Phone']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('provider_fax', 'Fax:', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('provider_fax',$client->profile ? $client->profile->provider_fax:'',['id'=>'provider_fax','class' => 'form-control','Placeholder'=>'Enter Fax']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">
                            <div class="col-xs-12 col-sm-12">
                                <div class="form-group">
                                    {!! Form::label('provider_signature', 'Signature (sign digitally):', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('provider_signature',$client->profile ? $client->profile->provider_signature:'',['id'=>'provider_signature','class' => 'form-control','Placeholder'=>'Enter Signature (sign digitally)']) !!}
                                    </div>
                                </div>
                            </div>
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
                        <br>

                        <div class="row-fluid">
                            <div class="col-xs-12 col-sm-12">
                                <br>
                                <h3 style="font-size: 15px">Plan Representative: </h3>
                                <br>
                                <div class="form-group">
                                    {!! Form::label('representative_name', 'Name:', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('representative_name',$client->profile ? $client->profile->representative_name:'',['id'=>'representative_name','class' => 'form-control','Placeholder'=>'Enter Name']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('representative_title', 'Title:', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('representative_title',$client->profile ? $client->profile->representative_title:'',['id'=>'title','class' => 'form-control','Placeholder'=>'Enter Title']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('representative_date', 'Date:', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('representative_date',$client->profile ? $client->profile->representative_date:'',['data-provide'=>"datepicker",'id'=>'date','class' => 'form-control datepicker','Placeholder'=>'Enter Date']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('representative_signature', 'Signature:', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('representative_signature',$client->profile ? $client->profile->representative_signature:'',['id'=>'provider_signature','class' => 'form-control','Placeholder'=>'Enter Signature (sign digitally)']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('representative_phone', 'Phone Number:', ['class' => 'col-xs-12']) !!}
                                    <div class="col-xs-12">
                                        {!! Form::text('representative_phone',$client->profile ? $client->profile->representative_phone:'',['id'=>'representative_phone','class' => 'form-control','Placeholder'=>'Enter Phone']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <br>
                                <button type="submit" class="btn btn-primary btn-lg btn-block btn-huge">Submit</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
     </div>


 </div>


        <script type="text/javascript">

            $('.datepicker').datepicker({

                autoclose: true,
                format: "yyyy-mm-dd"

            });

            $('#timepicker').timepicker({
                timeFormat: 'H:i:s',

            });

        </script>

        <br>
        <br>