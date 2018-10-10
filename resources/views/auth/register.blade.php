@extends('layouts.login')
@section('title')
    Registration | M & N Home Care
@endsection
@section('content')
<div class="container" style="margin-top: 200px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #4271B5;font-size: 18px;color: white;border-color: #92B9C2;">Registration |  M & N Home Care</div>
                <div class="panel-body" style="padding-top: 50px;padding-bottom: 50px">
                    <div class="row-fluid">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <a href="{{ route('employee.registration.create') }}" class="btn btn-primary btn-lg btn-block btn-huge">Employee Registration</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <a href="{{ route('client.registration.create') }}" class="btn btn-success btn-lg btn-block btn-huge">Client Registration</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
