@extends('layouts.master')

@section('title')
   Service Create
@endsection

@section('content')

    <ul class="breadcrumb">
        <li><a href="{!! route('home') !!}">Dashboard</a> <span class="divider">/</span></li>
        <li><a href="{!! route('services.index') !!}">Services</a> <span class="divider">/</span></li>
        <li class="active">Edit</li>
    </ul>

<div class="container" style="margin-top: 100px">


            {!! Form::model($services,['files'=> true, 'route'=> ['services.store'], "novalidate"=>"novalidate" ]) !!}

            @include('services._form')

            {!! Form::close() !!}


</div>

@endsection
