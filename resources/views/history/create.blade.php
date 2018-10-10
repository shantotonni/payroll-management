@extends('layouts.master')

@section('title')
    Create History | MNN Home Care
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
     <div style="padding-top: 50px">
        <ul class="breadcrumb">
            <li><a href="{!! route('home') !!}">Dashboard</a></li>
            <li><a href="{!! route('history.index') !!}">Employee Assign To Client</a></li>
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
                    Add History
                    <a href="{!! route('history.index') !!}" class="btn btn-success btn-xs pull-right">Back To Employee Assign To Client</a>
                </div>
                <div class="panel-body">

                    {!! Form::model($history,['route'=> ['history.store']]) !!}

                    @include('history._form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
  </div>
</div>

@endsection
