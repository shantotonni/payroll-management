@extends('layouts.master')

@section('title')
    Edit Transaction Code | MNN Home Care
@endsection

@section('content')

<div class="padding-top">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{!! route('home') !!}">Dashboard</a></li>
                <li><a href="{!! route('transaction.index') !!}">Transaction</a></li>
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
                        Edit Transaction Code
                        <a href="{!! route('transaction.index') !!}" class="btn btn-success btn-xs pull-right">Back To Transaction</a>
                    </div>
                    <div class="panel-body">
                        {!! Form::model($transaction,['files'=> true, 'route'=> ['transaction.update',$transaction->id], "novalidate"=>"novalidate" ]) !!}

                        @include('transaction._form')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>

@endsection
