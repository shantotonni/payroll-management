@extends('layouts.master')

@section('title')
    Employee Edit
@endsection

@section('content')
    <ul class="breadcrumb">
        <li><a href="{!! route('home') !!}">Dashboard</a> <span class="divider">/</span></li>
        <li><a href="{!! route('employee.registration.index') !!}">Employee</a> <span class="divider">/</span></li>
        <li class="active">Edit</li>
    </ul>
<div style="margin-top: 60px;padding-left: 50px;padding-right: 80px">


            {!! Form::model($services,['files'=> true, 'route'=> ['services.update',$services->id], "novalidate"=>"novalidate" ]) !!}

            @include('services._form')

            {!! Form::close() !!}


</div>

@endsection
