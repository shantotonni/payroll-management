@extends('layouts.master')

@section('title')
    Employee Assign To Client | MNN Home Care
@endsection

@section('content')

    <div id="pjax_options" class="padding-top">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{!! route('home') !!}">Dashboard</a></li>
                    <li><a href="{!! route('services.index') !!}">Services</a> </li>
                    <li><a href="{!! route('employee.assign.to.client.index') !!}">Employee Assign To Client</a> </li>
                </ul>

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
                    {!! csrf_field() !!}

                    <div class="row">
                        <div class="form-group col-md-12">
                            <button  class="add_new_btn btn btn-gap-v btn-info pull-right" type="button"><span class="fa fa-plus"></span> <span style="margin-left: 5px">Add Employee Assign To Client</span></button>
                        </div>
                    </div>

                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="heading">All Assigned Clients</div>
                            <div class="panel-body">

                                <div class="form-row hide" id="add_new_option">
                                    {!! Form::model($employee_assign_to_client,['route'=> ['employee.assign.to.client.store'],"class"=>"employee_to_client_service"]) !!}
                                  <div class="row">
                                      <div class="form-group col-md-6">
                                          <select id="inputState" name="employee_users_id" class="form-control">
                                              <option value="">Please Select Employee</option>
                                              @foreach($employee as $value)
                                                  <option value="{!! $value->id !!}">{!! $value->first_name !!}</option>
                                              @endforeach
                                          </select>
                                      </div>

                                      <div class="form-group col-md-6">
                                          <select id="inputState" name="client_users_id" class="form-control">
                                              <option value="">Please Select Client</option>
                                              @foreach($client as $value)
                                                  <option value="{!! $value->id !!}">{!! $value->first_name !!}</option>
                                              @endforeach
                                          </select>
                                      </div>
                                  </div>


                                    <div class="action_column" style="text-align: right">
                                        <div class="form-group">
                                        <button  class="dynaform_saveeeeeee_btn btn btn-success" type="submit" id="submit"><span class="fa fa-check"></span></button>
                                        <button data-href="" class="attribute_option_remove btn btn-gap-v btn-danger" type="button" ><span class="fa fa-remove"></span></button>
                                    </div>
                                    </div>

                                    {!! Form::close() !!}
                                    <br>
                                </div>


                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-md-12">
                                        <table class="projects-table">
                                            <thead style="background-color: #064685;color: white">
                                            <tr>
                                                <th class="table-project-cell text-center-important">
                                  <span>
                                   Employee Name
                                  </span>
                                                </th>
                                                <th class="table-project-cell text-center-important">
                                      <span>
                                       Client Name
                                      </span>
                                                </th>
                                                <th class="table-project-cell text-center-important">
                                      <span>
                                       Action
                                      </span>
                                                </th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>

                                @foreach($employee_to_client_all as $value)
                                    <?php
                                    $employee_select = [];
                                    if(count($employee) > 0){
                                        foreach ($employee as $i){
                                            $employee_select[$i->id] = $i->first_name;
                                        }
                                    }

                                    $client_select=[];

                                    if(count($client) > 0){
                                        foreach ($client as $e){
                                            $client_select[$e->id] = $e->first_name;
                                        }
                                    }
                                    ?>

                                    <div class="form-row">
                                        {!! Form::model($value,['route'=> ['employee.assign.to.client.update',$value->id],"class"=>"employee_to_client_service"]) !!}

                                        <input class="form-control" name="dataid" value="{{ $value->id }}" type="hidden">

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                {!! Form::select('employee_users_id',$employee_select,isset($value->employee)?$value->first_name:'',['id'=>'inputState','class'=>'form-control','disabled'=>'disabled']) !!}
                                            </div>

                                            <div class="form-group col-md-6">
                                                {!! Form::select('client_users_id',$client_select,isset($value->client)?$value->first_name:'',['id'=>'inputState','class'=>'form-control','disabled'=>'disabled']) !!}
                                            </div>
                                        </div>
                                        <div class="action_column" style="text-align: right">
                                        <div class="form-group">
                                            <button  class="dynaform_saveeeeeee_btn btn btn-success hide" type="submit" id="submit"><span class="fa fa-check"></span></button>
                                            <button class="dynaform_edit_btn btn btn-info" type="button" data-id="{{$value->id}}"><span class="fa fa-pencil-square-o"></span></button>
                                            <button data-href="{!! route('employee.assign.to.client.delete',$value->id) !!}" class="attribute_option_remove_btn btn btn-gap-v btn-danger" data-id="{{$value->id}}" type="button" ><span class="fa fa-remove"></span></button>
                                        </div>
                                        </div>

                                        {!! Form::close() !!}
                                    </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <script src="{{ asset('js/main.js') }}"></script>
    </div>



@include('employee_assign_to_client._script')

@endsection
