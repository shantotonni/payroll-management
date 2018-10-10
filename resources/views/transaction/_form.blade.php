
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

                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    {!! Form::label('type', 'Type:') !!} <span class="required"> * </span>
                                    <select required name="type" class="form-control" >
                                        <option @if($transaction->type == 'client-id') selected @endif value="client-id">Client Id</option>
                                        <option @if($transaction->type == 'employee-id') selected @endif value="employee-id">Employee Id</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::label('code', 'Code') !!} <span class="required"> * </span>
                                {!! Form::text('code',Input::old('code'),['class' => 'form-control','required'=> 'required','Placeholder'=>'Code']) !!}
                            </div>
                            @if ($errors->has('code'))
                                <div class="error" style="color: red">{{ $errors->first('code') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::label('last_number', 'Last Number:') !!}  <span class="required"> * </span>
                                {!! Form::text('last_number',Input::old('last_number'),['class' => 'form-control','required'=> 'required','Placeholder'=>'Last Number']) !!}
                            </div>
                            @if ($errors->has('last_number'))
                                <div class="error" style="color: red">{{ $errors->first('last_number') }}</div>
                            @endif
                        </div>
                    </div>

                </div>

                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::label('increment', 'Increment:') !!}
                                {!! Form::text('increment',Input::old('increment'),['id'=>'increment','class' => 'form-control','Placeholder'=>'Enter Increment']) !!}
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
                                    <option @if($transaction->status == 'active') selected @endif value="active">Active</option>
                                    <option @if($transaction->status == 'inactive') selected @endif value="inactive">Inactive</option>
                                    <option @if($transaction->status == 'cancel') selected @endif value="cancel">Cancel</option>
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
    <a href="{!! route('transaction.index') !!}" style="margin-left: 16px" class="btn btn-danger">Cancel</a>
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