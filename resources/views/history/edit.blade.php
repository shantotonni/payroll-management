@extends('layouts.master')

@section('title')
    Edit Employee Assign To Client | MNN Home Care
@endsection

@section('content')

<div class="padding-top">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{!! route('home') !!}">Dashboard</a></li>
                <li><a href="{!! route('history.index') !!}">Employee Assign To Client</a></li>
                <li class="active">Edit</li>
            </ul>

            @if (count($errors))
                <ul>
                    <div class="alert alert-success">
                        @foreach($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </div>>
                </ul>
            @endif

            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading"  style="background-color: #bdf0fb;font-size: 18px">
                        Edit Services
                        <a href="{!! route('history.index') !!}" class="btn btn-success btn-xs pull-right">Back To Employee Assign To Client</a>
                    </div>
                    <div class="panel-body">
                        {!! Form::model($history,['route'=> ['history.update',$history->id]]) !!}

                        @include('history._form')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>

@endsection
