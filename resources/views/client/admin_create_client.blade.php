@extends('layouts.master')

@section('title')
    Create Client | MNN Home Care
@endsection

@section('content')

<div class="padding-top">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="{!! route('home') !!}">Dashboard</a> </li>
            <li><a href="{!! route('client.registration.index') !!}">Client</a></li>
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
                    Create Consumers
                    <a href="{!! route('client.registration.index') !!}" class="btn btn-success btn-xs pull-right">Back To Client</a>
                    <a href="{{ route('admin.client.print') }}" target="_blank" style="margin-right: 10px" class="btn btn-success btn-xs pull-right">Print</a>
                </div>
                <div class="panel-body" id="">
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
                        non-covered LTC benefits
                    </p>
                    <br>

                    {!! Form::model($client,['files'=> true, 'route'=> ['admin.create.client.store']]) !!}

                        @include('client._form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

    {{--<div id="print_form" class="hide">--}}
        {{--@include('client._print')--}}
    {{--</div>--}}


{{--<script>--}}

    {{--$('.print_print').on('click',function(){--}}
        {{--PrintDiv();--}}
        {{--return true;--}}
    {{--});--}}

    {{--function PrintDiv() {--}}
        {{--var divToPrint = $('#print_form');--}}
        {{--//console.log(divToPrint.html());--}}
        {{--var popupWin = window.open();--}}
        {{--popupWin.document.open();--}}
        {{--popupWin.document.write('<html><body onload=\"window.focus(); window.print(); window.close()\">' + divToPrint.html() + '</html>');--}}
        {{--popupWin.document.close();--}}
    {{--}--}}
{{--</script>--}}

@endsection
