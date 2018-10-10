
<div id="ht-inquiry-contact-container">
    <div class="form-horizontal" role="form">
        <fieldset>
            <div>
                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::label('client_users_id', 'Client ') !!}<span class="required"> * </span>
                                <select required name="client_users_id" class="form-control" >
                                    @foreach($client as $value)
                                        @if($value->id==$history->client_users_id)
                                         <option value="{!! $value->id !!}" selected>{!! $value->first_name !!}</option>
                                        @else
                                            <option value="{!! $value->id !!}">{!! $value->first_name !!}</option>
                                            @endif
                                        @endforeach
                                </select>
                            </div>
                            @if ($errors->has('client_users_id'))
                                <div class="error" style="color: red">{{ $errors->first('client_users_id') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::label('employee_users_id', 'Employee ') !!}<span class="required"> * </span>
                                <select required name="employee_users_id" class="form-control" >
                                    @foreach($employee as $value)
                                        @if($value->id==$history->employee_users_id)
                                        <option selected value="{!! $value->id !!}">{!! $value->first_name !!}</option>
                                        @else
                                            <option value="{!! $value->id !!}">{!! $value->first_name !!}</option>
                                            @endif
                                    @endforeach
                                </select>
                            </div>
                            @if ($errors->has('employee_users_id'))
                                <div class="error" style="color: red">{{ $errors->first('employee_users_id') }}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::label('comments', 'Comments:') !!}<span class="required"> * </span>
                                {!! Form::textarea('comments',Input::old('comments'),['id'=>'comments','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter Comments']) !!}
                            </div>

                            @if ($errors->has('comments'))
                                <div class="error" style="color: red">{{ $errors->first('comments') }}</div>
                            @endif

                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::label('date', 'Date:') !!} <span class="required"> * </span>
                                {!! Form::text('date',Input::old('date'),['data-provide'=>"datepicker",'class' => 'form-control datepicker','required'=> 'required','Placeholder'=>'YYYY/MM/DD']) !!}
                            </div>
                            @if ($errors->has('date'))
                                <div class="error" style="color: red">{{ $errors->first('date') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <div class="col-xs-12 ">
                                {!! Form::label('starting_time', 'Starting Time') !!} <span class="required"> * </span>
                                <div class="bootstrap-timepicker timepicker">
                                    {!! Form::text('starting_time',Input::old('starting_time'),['data-provide'=>'timepicker','id'=>'timepicker','class' => 'form-control','required'=> 'required','Placeholder'=>'H:M:S']) !!}
                                </div>
                            </div>
                            @if ($errors->has('starting_time'))
                                <div class="error" style="color: red">{{ $errors->first('starting_time') }}</div>
                            @endif
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <div class="col-xs-12 ">
                                {!! Form::label('end_time', 'End Time') !!} <span class="required"> * </span>
                                <div class="bootstrap-timepicker timepicker">
                                {!! Form::text('end_time',Input::old('end_time'),['data-provide'=>'timepicker','id'=>'timepicker2','class' => 'form-control','required'=> 'required','Placeholder'=>'H:M:S']) !!}
                                </div>
                            </div>
                            @if ($errors->has('end_time'))
                                <div class="error" style="color: red">{{ $errors->first('end_time') }}</div>
                            @endif
                        </div>
                    </div>
                </div>


                <div class="row-fluid">

                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <div class="col-xs-12 ">
                                {!! Form::label('duration', 'Duration') !!} <span class="required"> * </span>
                                <div class="bootstrap-timepicker timepicker">
                                    {!! Form::text('duration',Input::old('duration'),['id'=>'duration','class' => 'form-control','required'=> 'required','Placeholder'=>'Duration']) !!}
                                </div>
                            </div>
                            @if ($errors->has('duration'))
                                <div class="error" style="color: red">{{ $errors->first('duration') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <div class="col-xs-12">
                                Status
                                <select required name="status" class="form-control" >
                                    <option @if($history->status == 'active') selected @endif value="active">Active</option>
                                    <option @if($history->status == 'inactive') selected @endif value="inactive">Inactive</option>
                                    <option @if($history->status == 'cancel') selected @endif value="cancel">Cancel</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>

<div class="pull-right">
    <button type="submit" style="margin-left: 16px" class="btn btn-primary">Submit</button>
    <a href="{!! route('services.index') !!}" style="margin-left: 16px" class="btn btn-danger">Cancel</a>
</div>
<br>
<br>


<script type="text/javascript">

    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd"
    });

    $('#timepicker').timepicker({
        timeFormat: 'H:i:s',

    });

    $('#timepicker2').timepicker({
        timeFormat: 'H:i:s',

    });

</script>