@extends('layouts.master')

@section('title')
    Dashboard | MNN Home Care
@endsection

@section('content')

<div class="content-width" id="pjax_options">
    <div class="row">
        <div class="col-md-12">
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

                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Dashboard</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-male fa-5x" aria-hidden="true"></i>
                                        </div>
                                        @if(isset($client))
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{!! count($client) !!}</div>
                                            <div>Total Clients</div>
                                        </div>
                                            @endif
                                    </div>
                                </div>
                                <a href="{!! route('client.registration.index') !!}">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                                        </div>
                                        @if(isset($client))
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{!! count($employee) !!}</div>
                                            <div>Total Employees</div>
                                        </div>
                                            @endif
                                    </div>
                                </div>
                                <a href="{!! route('employee.registration.index') !!}">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-medkit fa-5x" aria-hidden="true"></i>
                                        </div>
                                        @if(isset($services))
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">{!! count($services) !!}</div>
                                                <div>Total Services</div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <a href="{!! route('services.index') !!}">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-file-text-o jumbo fa-5x" aria-hidden="true"></i>
                                        </div>
                                        @if(isset($report))
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">{!! $report !!}</div>
                                                <div>Total Reports</div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <a href="{!! route('report.index') !!}">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>



                    </div>
                </div>
             </div>
        </div>

    <script src="{{ asset('js/main.js') }}"></script>
</div>


@endsection
