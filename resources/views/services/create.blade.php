@extends('layouts.master')

@section('title')
    Create Services | MNN Home Care
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
     <div style="padding-top: 50px">
        <ul class="breadcrumb">
            <li><a href="{!! route('home') !!}">Dashboard</a></li>
            <li><a href="{!! route('services.index') !!}">Services</a></li>
            <li class="active">Add</li>
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
                <div class="panel-heading"  style="background-color: #bdf0fb;font-size: 18px">
                    Add Services
                    <a href="{!! route('services.index') !!}" class="btn btn-success btn-xs pull-right">Back To Services</a>
                </div>
                <div class="panel-body">

                    {!! Form::model($services,['files'=> true, 'route'=> ['services.store']]) !!}

                    @include('services._form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
  </div>
</div>

@endsection
