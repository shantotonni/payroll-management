@extends('layouts.master')

@section('title')
    Caregiver Employee | MNN Home Care
@endsection

@section('content')

<div class="padding-top">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="{!! route('home') !!}">Dashboard</a></li>
            <li><a href="{!! route('employee.registration.index') !!}">Employee</a></li>
            <li class="active">Edit</li>
        </ul>

        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #bdf0fb;font-size: 18px">
                    Edit Consumers
                    <a href="{!! route('employee.registration.index') !!}" class="btn btn-success btn-xs pull-right">Back To Employee</a>
                    <a href="{!! route('admin.employee.pdf',$employee->id) !!}" target="_blank" style="margin-right: 12px" class="btn btn-success btn-xs pull-right">pdf</a>
                </div>
                <div class="panel-body">
                    {{--<div style="float:right;padding-top: 90px">--}}
                        {{--<img src="{!! asset('img/no.png') !!}" style="width: auto; height: 100px;" alt="">--}}
                    {{--</div>--}}
                    <div style="width:auto;">
                        <h2 style="padding:10px;background-color:#3678C0; color:#fff">CFEEC Evaluation Request Form </h2>
                        <p style="font-size:18px; font-weight:bold;">For Mainstream plan member requiring<br>
                            non-covered LTC benefits
                        </p>
                    </div>

                    {!! Form::model($employee,['files'=> true, 'route'=> ['employee.registration.update',$employee->id],]) !!}

                    @include('employee._form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
