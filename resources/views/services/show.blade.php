@extends('layouts.master')

@section('title')
    View Services | MNN Home Care
@endsection

@section('content')

    <div class="padding-top">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{!! route('home') !!}">Dashboard</a></li>
                    <li><a href="{!! route('services.index') !!}">Services</a></li>
                    <li class="active">Show</li>
                </ul>
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading"  style="background-color: #bdf0fb;font-size: 18px">
                            Services Information
                            <a href="{!! route('services.index') !!}" class="btn btn-success btn-xs pull-right">Back To Services</a>
                        </div>
                        <div class="panel-body">
                            <div class="modal-body">
                                <div style="">
                                    <table id="" class="table table-bordered table-hover table-striped">
                                        <tr>
                                            <th class="col-lg-4">Services Title : </th>
                                            <td> {!! $services->title !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Slug : </th>
                                            <td>{!! $services->slug !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Description :</th>
                                            <td>{!! $services->description !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Valid From Date : </th>
                                            <td colspan="2">{!! $services->valid_from_date !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Valid To Date</th>
                                            <td>{!! $services->valid_to_date !!}</td>
                                        </tr>

                                        <tr>
                                            <th class="col-lg-4"> Preferred Time</th>
                                            <td>{!! $services->preferred_time !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4"> Status</th>
                                            <td>{!! ucfirst($services->status) !!}</td>
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
