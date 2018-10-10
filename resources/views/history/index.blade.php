@extends('layouts.master')

@section('title')
    Employee Assign To Client List | MNN Home Care
@endsection

@section('content')

<div id="pjax_options" class="padding-top">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{!! route('home') !!}">Dashboard
                <li><a href="{!! route('history.index') !!}">Employee Assign To Client</a></li>
            </ul>

            <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left: 0px;">
                <div class="row">

                    {{-------------- Filter :Starts -------------------------------------------}}
                    {!! Form::open(['method' =>'GET','route'=> 'history.filter']) !!}

                    <div id="index-search">

                        <div class="col-sm-4">
                            {!! Form::label('start_date', 'From') !!} <span class="required"> * </span>
                            {!! Form::text('start_date',@Input::get('start_date')? Input::get('start_date') : null,['class' => 'form-control datepicker','placeholder'=>'From','data-provide'=>"datepicker"]) !!}
                            @if ($errors->has('start_date'))
                                <div class="error" style="color: red;font-size: 12px">{{ $errors->first('start_date') }}</div>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            {!! Form::label('end_date', 'To') !!} <span class="required"> * </span>
                            {!! Form::text('end_date',@Input::get('end_date')? Input::get('end_date') : null,['class' => 'form-control datepicker','placeholder'=>'To','data-provide'=>"datepicker"]) !!}
                            @if ($errors->has('end_date'))
                                <div class="error" style="color: red;font-size: 12px">{{ $errors->first('end_date') }}</div>
                            @endif
                        </div>

                        <div style="padding-top: 35px">
                            {!! Form::submit('Search', array('class'=>'btn btn-info','id'=>'button', 'data-placement'=>'right')) !!}

                        </div>

                    </div>

                    {!! Form::close() !!}

                    {{-------------- Filter :Ends -------------------------------------------}}

                </div>
            </div>
            <br>
            <br>

            @if(\Illuminate\Support\Facades\Auth::user()->type=='admin')
            <ul class="breadcrumb pull-right" style="padding-right: 0px">
             <li>
                 <a href="{!! route('history.create') !!}" class="btn btn-success btn-sm"><i class="fa fa-plus-square" aria-hidden="true">
                     </i>
                     <span style="margin-left: 10px">Add Employee Assign To Client</span>
                 </a>
             </li>
            </ul>
            @endif

            <br>
            <br>

            @if(session()->has('msg'))
                <div class="alert alert-success">
                    {{ session()->get('msg') }}
                </div>
            @endif
            @if(session()->has('delete'))
                <div class="alert alert-danger">
                    {{ session()->get('delete') }}
                </div>
            @endif

             <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading"  style="background-color: #bdf0fb;font-size: 18px;text-transform: uppercase">Employee Assign To Client List</div>
                        <div class="panel-body">
                            <table class="projects-table data_table">
                                <thead style="background-color: #064685;color: white">
                                <tr>
                                    <th class="table-project-cell">
                                      <span>
                                        Serial No
                                      </span>
                                    </th>
                                    <th class="table-project-cell">
                                      <span>
                                        Client Name
                                      </span>
                                    </th>
                                    <th class="table-project-cell">
                                      <span>
                                        Employee Name
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                        Date
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                         Starting Time
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                         End Time
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                        Duration
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                        Comments
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                         Status
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                         Action
                                      </span>
                                    </th>

                                </tr>
                                </thead>
                                <?php
                                $i=1;
                                ?>

                                <tbody class="customers">
                                @if(count($history)>0)

                                    @foreach($history as $value)

                                        <tr id="srow_11303763">
                                            <td>{!! $i++ !!}</td>
                                            <td>{!! isset($value->client)?$value->client->first_name:'' !!}</td>
                                            <td>{!! isset($value->employee)?$value->employee->first_name:'' !!}</td>

                                            <td>{!! $value->date !!}</td>
                                            <td>{!! $value->starting_time !!}</td>
                                            <td>{!! $value->end_time !!}</td>
                                            <td>{!! $value->duration !!}</td>
                                            <td>{!! substr($value->comments,0,20) !!}</td>
                                            <td>{!! ucfirst($value->status) !!}</td>
                                            <td class="jq-dropdown-container">
                                                <div class="project-options-trigger" data-jq-dropdown="#project-options-dropdown-11303763"></div>
                                                <li class="button-dropdown" style="list-style: none">
                                                    <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary btn-sm">
                                                        <span><i class="fa fa-cog" aria-hidden="true"></i> <span>Action</span> ▼</span>
                                                    </a>
                                                    <ul class="dropdown-menu" style=" border-radius:2px;border-style: hidden;box-shadow: 0 0 0 1px #2772A7;">
                                                        <li>
                                                            <a href="{!! route('history.edit',$value->id) !!}" style="color: #2772A7;font-size: 12px">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span style="margin-left: 5px">Edit</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{!! route('history.show',$value->id) !!}" style="color: #2772A7;font-size: 12px" >
                                                                <i class="fa fa-eye" aria-hidden="true"></i> <span style="margin-left: 5px">View</span>
                                                            </a>
                                                        </li>

                                                        @if(\Illuminate\Support\Facades\Auth::user()->type=='admin')
                                                        <li>
                                                            @if($value->status=='active')
                                                            <a href="{!! route('history.inactive',['id' => $value->id,'inactive' => 'inactive']) !!}" style="color: #2772A7;font-size: 12px" >
                                                                <i class="fa fa-times" aria-hidden="true"></i>
                                                                <span style="margin-left: 5px">Inactive</span>
                                                            </a>
                                                                @endif

                                                            @if($value->status=='inactive')
                                                                    <a href="{!! route('history.active',['id' => $value->id,'active' => 'active']) !!}" style="color: #2772A7;font-size: 12px" >
                                                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                                        <span style="margin-left: 5px">Active</span>
                                                                    </a>
                                                                @endif
                                                        </li>

                                                        @endif

                                                        <li>
                                                            <a href="" class="attribute_option_remove_btn" data-href="{!! route('history.delete',$value->id) !!}" style="color: #2772A7;font-size: 12px" data-id="{{$value->id}}" >
                                                                <i class="fa fa-trash" aria-hidden="true"></i> <span style="margin-left: 5px">Delete</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>
                                            </td>
                                        </tr>

                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
              </div>
        </div>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
</div>

<script>

    $(document).delegate('.attribute_option_remove_btn','click',function () {
        var url = $(this).attr('data-href');

        bootbox.confirm({
            message: "Are you sure?",
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'No',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if(result){

                    $.ajax({
                        url: url,
                        type: 'POST',
                        dataType: "json",
                        data: {_token: '{!! csrf_token() !!}'},
                        async: true,
                        success: function (data) {
                            if(data.result == 'success'){

                                toastr.success(data.message);
                                $.pjax.reload('#pjax_options');

                            }else{
                                toastr.error(data.message);
                            }
                        }
                    });

                }
            }
        });

        return false;
    });

    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd"
    });

</script>


@endsection
