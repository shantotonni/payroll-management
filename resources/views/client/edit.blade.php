@extends('layouts.master')

@section('title')
    Edit Client | MNN Home Care
@endsection

@section('content')

<div class="padding-top">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="{!! route('home') !!}">Dashboard</a> </li>
            <li><a href="{!! route('client.registration.index') !!}">Client</a></li>
            <li class="active">Edit</li>
        </ul>
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #bdf0fb;font-size: 18px">
                    Edit Client
                    <a href="{!! route('client.registration.index') !!}" class="btn btn-success btn-xs pull-right">Back To Client</a>
                    <a href="{!! route('admin.client.pdf',$client->id) !!}" target="_blank" style="margin-right: 12px" class="btn btn-success btn-xs pull-right">pdf</a>
                </div>
                <div class="panel-body">
                    <div class="row-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-5">
                                <h2 style="padding:10px;background-color:#3678C0; color:#fff">CFEEC Evaluation Request Form </h2>
                            </div>
                            <div class="col-xs-12 col-sm-offset-2 col-sm-5">
                                <div style="float:right;margin-right:15px;">
                                    <img src="{{ asset('img/1.jpg') }}" style="width: auto; height: 80px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <p style="font-size:18px; font-weight:bold;">For Mainstream plan member requiring<br>
                        non-covered LTC benefits</p>
                    <br>

                    {!! Form::model($client,['files'=> true, 'route'=> ['client.registration.update',$client->id],]) !!}

                    @include('client._form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

{{--<script>--}}
    {{--$(document).ready(function () {--}}

        {{--$('.printview').printPage();--}}

    {{--});--}}
{{--</script>--}}

@endsection
