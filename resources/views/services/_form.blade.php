
<script>

    function convert_to_slug(){
        var str = document.getElementById("title").value;
        str = str.replace(/[^a-zA-Z0-9\s]/g,"");
        str = str.toLowerCase();
        str = str.replace(/\s/g,'-');
        document.getElementById("slug").value = str;
    }

</script>

<div id="ht-inquiry-contact-container">
    <div class="form-horizontal" role="form">
        <fieldset>
            <div>
                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::label('title', 'Title ') !!}<span class="required"> * </span>
                                {!! Form::text('title',Input::old('title'),['id'=>'title','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter Title','onkeyup'=>"convert_to_slug();"]) !!}
                            </div>
                            @if ($errors->has('title'))
                                <div class="error" style="color: red">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::label('slug', 'Slug') !!}<span class="required"> * </span>
                                {!! Form::text('slug',Input::old('slug'),['id'=>'slug','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter Slug']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::label('description', 'Description:') !!}<span class="required"> * </span>
                                {!! Form::textarea('description',Input::old('description'),['id'=>'description','class' => 'form-control','required'=> 'required','Placeholder'=>'Enter Description']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::label('valid_from_date', 'Valid From Date:') !!} <span class="required"> * </span>
                                {!! Form::text('valid_from_date',Input::old('valid_from_date'),['data-provide'=>"datepicker",'class' => 'form-control datepicker','required'=> 'required','Placeholder'=>'YYYY/MM/DD']) !!}
                            </div>
                            @if ($errors->has('valid_from_date'))
                                <div class="error" style="color: red">{{ $errors->first('valid_from_date') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::label('valid_to_date', 'Valid To Date:') !!}  <span class="required"> * </span>
                                {!! Form::text('valid_to_date',Input::old('valid_to_date'),['data-provide'=>'datepicker','class' => 'form-control datepicker','required'=> 'required','Placeholder'=>'YYYY/MM/DD']) !!}
                            </div>
                            @if ($errors->has('valid_to_date'))
                                <div class="error" style="color: red">{{ $errors->first('valid_to_date') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <div class="col-xs-12 ">
                                {!! Form::label('preferred_time', 'Preferred Time') !!} <span class="required"> * </span>
                                <div class="bootstrap-timepicker timepicker">
                                {!! Form::text('preferred_time',Input::old('preferred_time'),['data-provide'=>'timepicker','id'=>'timepicker','class' => 'form-control','required'=> 'required','Placeholder'=>'H:M:S']) !!}
                                </div>
                            </div>
                            @if ($errors->has('preferred_time'))
                                <div class="error" style="color: red">{{ $errors->first('preferred_time') }}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::label('type', 'Service Type:') !!}
                                {!! Form::text('type',Input::old('type'),['id'=>'type','class' => 'form-control','Placeholder'=>'Enter Type']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::label('status', 'Status:') !!} <span class="required"> * </span>
                                <select required name="status" class="form-control" >
                                    <option @if($services->status == 'active') selected @endif value="active">Active</option>
                                    <option @if($services->status == 'inactive') selected @endif value="inactive">Inactive</option>
                                    <option @if($services->status == 'cancel') selected @endif value="cancel">Cancel</option>
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

</script>