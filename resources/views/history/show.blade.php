@extends('layouts.master')

@section('title')
   View Employee Assign To Client | MNN Home Care
@endsection

@section('content')

    <div class="padding-top">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{!! route('home') !!}">Dashboard</a></li>
                    <li><a href="{!! route('history.index') !!}">Employee Assign To Client</a></li>
                    <li class="active">Show</li>
                </ul>
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading"  style="background-color: #bdf0fb;font-size: 18px">
                            Employee Assign To Client show
                            <a href="{!! route('history.index') !!}" class="btn btn-success btn-xs pull-right">Back To Employee Assign To Client</a>
                        </div>
                        <div class="panel-body">
                            <div class="modal-body">
                                <div style="">
                                    <table id="" class="table table-bordered table-hover table-striped">
                                        <tr>
                                            <th class="col-lg-4">Client Name : </th>
                                            <td> {!! isset($history->client)?$history->client->first_name:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Empployee Name : </th>
                                            <td> {!! isset($history->employee)?$history->employee->first_name:'' !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Date</th>
                                            <td>{!! $history->date !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Starting Time :</th>
                                            <td>{!! $history->starting_time !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">End Time : </th>
                                            <td colspan="2">{!! $history->end_time !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Duration</th>
                                            <td>{!! $history->duration !!} Hours</td>
                                        </tr>

                                        <tr>
                                            <th class="col-lg-4"> Comments</th>
                                            <td>{!! $history->comments !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4"> Status</th>
                                            <td>{!! ucfirst($history->status) !!}</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
