@extends('layouts.master')

@section('title')
    Assign For Client | MNN Home Care
@endsection

@section('content')

    <div id="pjax_options" class="padding-top">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{!! route('home') !!}">Dashboard</a></li>
                    <li><a href="{!! route('services.index') !!}">Services</a></li>
                    <li><a href="{!! route('assign.to.client.index') !!}">Assign For Client</a> <span class="divider">/</span></li>
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
                            <button  class="add_new_btn btn btn-gap-v btn-success pull-right" type="button"><span class="fa fa-plus"></span> <span style="margin-left: 5px">Add Service For Client</span></button>
                        </div>
                    </div>

                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="heading">All Assigned Services For All Client</div>
                            <div class="panel-body">
                                <div class="form-row hide" id="add_new_option">
                                    {!! Form::model($client_service,['route'=> ['assign.to.client.store'],"class"=>"client_service"]) !!}

                                  <div class="row">
                                      <div class="form-group col-md-6">
                                          <select id="inputState" name="client_users_id" class="form-control">
                                              <option value="">Choose Client</option>
                                              @foreach($client as $value)
                                                  <option value="{!! $value->id !!}">{!! $value->first_name !!}</option>
                                              @endforeach
                                          </select>
                                      </div>

                                      <div class="form-group col-md-6">
                                          <select id="inputState" name="services_id" class="form-control">
                                              <option value="">Choose Services</option>
                                              @foreach($service as $value)
                                                  <option value="{!! $value->id !!}">{!! $value->title !!}</option>
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
                                                    Client Name
                                                  </span>
                                                </th>
                                                <th class="table-project-cell text-center-important">
                                                  <span>
                                                    Service Title
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

                                @foreach($client_service_all as $value)
                                    <?php
                                    $service_select = [];
                                    if(count($service) > 0){
                                        foreach ($service as $i){
                                            $service_select[$i->id] = $i->title;
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
                                        {!! Form::model($value,['route'=> ['assign.to.client.update',$value->id],"class"=>"client_service"]) !!}

                                        <input class="form-control" name="dataid" value="{{ $value->id }}" type="hidden">

                                          <div class="row">
                                              <div class="form-group col-md-6">
                                                  {!! Form::select('client_users_id',$client_select,$value->client_users_id,['id'=>'inputState','class'=>'form-control','disabled'=>'disabled']) !!}
                                              </div>

                                              <div class="form-group col-md-6">
                                                  {!! Form::select('services_id',$service_select,$value->services_id,['id'=>'inputState','class'=>'form-control','disabled'=>'disabled']) !!}
                                              </div>
                                          </div>
                                            <div class="action_column" style="text-align: right">
                                                <div class="form-group">
                                                    <button  class="dynaform_saveeeeeee_btn btn btn-success hide" type="submit" id="submit"><span class="fa fa-check"></span></button>
                                                    <button class="dynaform_edit_btn btn btn-info" type="button" data-id="{{$value->id}}"><span class="fa fa-pencil-square-o"></span></button>
                                                    <button data-href="{!! route('assign.to.client.delete',$value->id) !!}" class="attribute_option_remove_btn btn btn-gap-v btn-danger" data-id="{{$value->id}}" type="button" ><span class="fa fa-remove"></span></button>
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

@include('assign_client._script')

@endsection
