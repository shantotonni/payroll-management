
<div id="ht-inquiry-contact-container">

    <div class="form-horizontal" role="form">
        <fieldset>
            <div>
                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::label('title', 'Title', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('title',Input::old('title'),['id'=>'title','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter Title']) !!}
                            </div>
                            @if ($errors->has('title'))
                                <div class="error" style="color: red">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::label('slug', 'Slug', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('slug',Input::old('slug'),['id'=>'slug','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter Slug']) !!}
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group">
                            {!! Form::label('description', 'Description:', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::textarea('description',Input::old('description'),['id'=>'description','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter Description']) !!}
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            {!! Form::label('valid_from_date', 'Valid From Date:', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::date('valid_from_date',Input::old('valid_from_date'),['id'=>'valid_from_date','data-provide'=>"datepicker",'class' => 'form-control k-input','required'=> 'required','Placeholder'=>'YYYY/MM/DD']) !!}
                            </div>
                            @if ($errors->has('valid_from_date'))
                                <div class="error" style="color: red">{{ $errors->first('valid_from_date') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            {!! Form::label('valid_to_date', 'Valid To Date:', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::date('valid_to_date',Input::old('valid_to_date'),['id'=>'valid_to_date','class' => 'form-control k-input','required'=> 'required','Placeholder'=>'YYYY/MM/DD']) !!}
                            </div>
                            @if ($errors->has('valid_to_date'))
                                <div class="error" style="color: red">{{ $errors->first('valid_to_date') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            {!! Form::label('preferred_time', 'Preferred Time', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::time('preferred_time',Input::old('preferred_time'),['id'=>'preferred_time','class' => 'form-control k-input','required'=> 'required','Placeholder'=>'YYYY/MM/DD']) !!}
                            </div>
                            @if ($errors->has('preferred_time'))
                                <div class="error" style="color: red">{{ $errors->first('preferred_time') }}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::label('type', 'Service Type:', ['class' => 'col-xs-12']) !!}
                            <div class="col-xs-12">
                                {!! Form::text('type',Input::old('type'),['id'=>'type','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter Phone']) !!}
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </fieldset>
    </div>
</div>

<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
<br>
<br>

<script>
    $('.datepicker').datepicker();
</script>