@extends('layouts.login')

@section('title')
    Client Registration | MNN Home Care
@endsection

@section('content')

<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="panel-group">
            <div class="panel panel-default">
                <a href="{{ route('admin.client.print') }}" target="_blank" style="margin-right: 10px" class="btn btn-success btn-sm pull-right">Print</a>
                <div class="panel-heading" style="background-color: #bdf0fb">Client Registration</div>

                <div class="panel-body">
                    <div>
                        @if(session()->has('msg'))
                            <div class="alert alert-success">
                                {{ session()->get('msg') }}
                            </div>
                        @endif

                        @if (count($errors))
                            <ul style="margin: 0;padding: 0">
                                <div class="alert alert-success">
                                    @foreach($errors->all() as $error)

                                        <li>{!! $error !!}</li>

                                    @endforeach
                                </div>
                            </ul>
                        @endif

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
                    </div>

                    {!! Form::model($client,['files'=> true, 'route'=> ['client.registration.store']]) !!}

                       @include('client._form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

