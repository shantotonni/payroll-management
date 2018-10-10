@extends('layouts.master')

@section('title')
    Create Employee | MNN Home Care
@endsection

@section('content')

<div class="padding-top">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="{!! route('home') !!}">Dashboard</a></li>
            <li><a href="{!! route('employee.registration.index') !!}">Employee</a></li>
            <li class="active">Create</li>
        </ul>

        @if (count($errors))
            <ul style="margin: 0;padding: 0">
                <div class="alert alert-success">
                    @foreach($errors->all() as $error)

                        <li>{!! $error !!}</li>

                    @endforeach
                </div>
            </ul>
        @endif

        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #bdf0fb;font-size: 18px">
                    Create Employee
                    <a href="{!! route('employee.registration.index') !!}" class="btn btn-success btn-xs pull-right">Back To Employee</a>
                    <a href="{{ route('admin.employee.print') }}" target="_blank" style="margin-right: 10px" class="btn btn-success btn-xs pull-right">Print</a>
                </div>
                <div class="panel-body">

                    <div style="width:auto;">
                        <h2 style="padding:10px;background-color:#3678C0; color:#fff">CFEEC Evaluation Request Form </h2>
                        <p style="font-size:18px; font-weight:bold;">For Mainstream plan member requiring<br>
                            non-covered LTC benefits
                        </p>
                    </div>

                    {!! Form::model($employee,['files'=> true, 'route'=> ['admin.create.employee.store']]) !!}

                    @include('employee._form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
