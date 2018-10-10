@extends('layouts.master')

@section('title')
    View Report | MNN Home Care
@endsection

@section('content')

    <div class="padding-top">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{!! route('home') !!}">Dashboard</a></li>
                    <li><a href="{!! route('report.index') !!}">Report</a></li>
                    <li class="active">Show</li>
                </ul>
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading"  style="background-color: #bdf0fb;font-size: 18px">
                            Report
                            <a href="{!! route('report.index') !!}" class="btn btn-success btn-xs pull-right">Back To Report</a>
                        </div>


                        <div class="panel-body">
                            <div class="modal-body">
                                <div class="col-lg-6">
                                    <h3 style="color: green;text-decoration: underline;text-transform: uppercase;text-align: center">Client Details</h3>
                                <div style="">
                                    <table id="" class="table table-bordered table-hover table-striped">
                                        <tr>
                                            <th class="col-lg-4">Client First Name : </th>
                                            <td> {!! isset($report->client)?$report->client->first_name:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Client Last Name : </th>
                                            <td> {!! isset($report->client)?$report->client->last_name:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Email : </th>
                                            <td> {!! isset($report->client)?$report->client->email:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Country: </th>
                                            <td> {!! isset($report->client)?$report->client->country:'' !!}</td>
                                        </tr>

                                        <tr>
                                            <th class="col-lg-4">Date Of Birth: </th>
                                            <td> {!! isset($report->client)?$report->client->date_of_birth:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Cell phone Number: </th>
                                            <td> {!! isset($report->client)?$report->client->cell_phone:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Telephone Number: </th>
                                            <td> {!! isset($report->client)?$report->client->telephone_number:'' !!}</td>
                                        </tr>

                                        <tr>
                                            <th class="col-lg-4"> Gender : </th>
                                            @if(isset($report->client)?$report->client->gender==1:'')
                                                <td>Male</td>
                                            @endif
                                            @if(isset($report->client)?$report->client->gender==2:'')
                                                <td>Female</td>
                                            @endif
                                        </tr>

                                    </table>
                                </div>
                            </div>

                                <div class="col-lg-6">
                                    <h3 style="text-align: center;text-transform: uppercase;text-decoration: underline;color: green">Employee Details</h3>
                                <div>
                                    <table id="" class="table table-bordered table-hover table-striped">
                                        <tr>
                                            <th class="col-lg-4">Employee First Name : </th>
                                            <td> {!! isset($report->employee)?$report->employee->first_name:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Employee Last Name : </th>
                                            <td> {!! isset($report->employee)?$report->employee->last_name:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Email : </th>
                                            <td> {!! isset($report->employee)?$report->employee->email:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Country: </th>
                                            <td> {!! isset($report->employee)?$report->employee->country:'' !!}</td>
                                        </tr>

                                        <tr>
                                            <th class="col-lg-4">Date Of Birth: </th>
                                            <td> {!! isset($report->employee)?$report->employee->date_of_birth:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Cell phone Number: </th>
                                            <td> {!! isset($report->employee)?$report->employee->cell_phone:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Telephone Number: </th>
                                            <td> {!! isset($report->employee)?$report->employee->telephone_number:'' !!}</td>
                                        </tr>

                                        <tr>
                                            <th class="col-lg-4"> Gender : </th>
                                            @if(isset($report->employee)?$report->employee->gender==1:'')
                                                <td>Male</td>
                                            @endif
                                            @if(isset($report->employee)?$report->employee->gender==2:'')
                                                <td>Female</td>
                                            @endif
                                        </tr>

                                    </table>
                                </div>
                            </div>

                                <?php
                                   $helper = new \App\Http\Helper\Services();
                                   $data=$helper->AllServices($report->client_users_id);
                                ?>


                        </div>
                        </div>
                    </div>
                </div>

                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="heading" style="text-transform: uppercase">All Services</div>
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
                                             Title
                                          </span>
                                    </th>
                                    <th class="table-project-cell">
                                          <span>
                                             Slug
                                          </span>
                                    </th>
                                    <th class="table-project-cell">
                                          <span>
                                              Description
                                          </span>
                                    </th>

                                    <th class="table-project-cell">
                                          <span>
                                             Type
                                          </span>
                                    </th>

                                    <th class="table-project-cell">
                                          <span>
                                              Valid From Date
                                          </span>
                                    </th>

                                    <th class="table-project-cell">
                                          <span>
                                            Valid To Date
                                          </span>
                                    </th>

                                    <th class="table-project-cell">
                                          <span>
                                             Preferred Time
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
                                @if(count($data)>0)

                                    @foreach($data as $value)

                                        <tr id="srow_11303763">
                                            <td>{!! $i++ !!}</td>
                                            <td>{!! isset($value->services)?$value->services->title:'' !!}</td>
                                            <td>{!! isset($value->services)?$value->services->slug:'' !!}</td>
                                            <td>{!! substr(isset($value->services)?$value->services->description:'',0,18) !!}</td>

                                            <td>{!! isset($value->services)?$value->services->type:'' !!}</td>
                                            <td>{!! isset($value->services)?$value->services->valid_from_date:'' !!}</td>
                                            <td>{!! isset($value->services)?$value->services->valid_to_date:'' !!}</td>
                                            <td>{!! isset($value->services)?$value->services->preferred_time:'' !!}</td>
                                            <td>{!! ucfirst(isset($value->services)?$value->services->status:'') !!}</td>

                                            <td>


                                            <a href="{!! route('report.services.show',$value->services_id) !!}" class="btn btn-success" style="color: #2772A7;font-size: 12px" >
                                                <i class="fa fa-eye" aria-hidden="true"></i><span style="margin-left: 5px;color: white">View</span>
                                            </a>

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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

@endsection
