@extends('layouts.login')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admin_login_page/main.min.css') }}">
    @endsection

@section('title')
        Admin Login Form | M & N Home Care
    @endsection
@section('content')


    <div class="c-login">
        <header class="c-login__head">
            <h1 class="c-login__title">Login | M & N Home Care</h1>
        </header>
        @if(session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        @endif

        {!! Form::open(['route'=>'login','id'=>'login-data-validation', "class"=>"c-login__content",  "novalidate"=>"novalidate"]) !!}
        {!! csrf_field() !!}
        <div class="c-field u-mb-small">
            <label class="c-field__label" for="input1">Email Address</label>
            {!! Form::email('email', null, ['class' => 'c-input','required', 'id'=>'input1','placeholder'=>'Email Address']) !!}

            @if ($errors->has('email'))
                <span>
                 <strong style="color: red">{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="c-field u-mb-small">
            <label class="c-field__label" for="input2">Password</label>
            {!! Form::password('password', ['class' => 'c-input','required', 'id'=>'input2', 'placeholder' => 'Password']) !!}
            @if ($errors->has('password'))
                <span>
                 <strong style="color: red">{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <button class="c-btn c-btn--info c-btn--fullwidth" type="submit">Sign in to Dashboard</button>

        {!! Form::close() !!}

        <section style="margin-bottom: 30px">
            <p class="text-center">
                <a href="{{ route('password.request') }}"
                >Forgot your password?</a>
            </p>
        </section>

        <section style="margin-bottom: 80px">
            <div class="col-md-12">
                <a class="btn btn-primary pull-left" href="{{ route('employee.registration.create') }}" style="font-weight: bold;">
                    Caregiver Registration
                </a>
                <a class="btn btn-success pull-right" href="{{ route('client.registration.create') }}" style="font-weight: bold;">
                    Client Registration
                </a>
            </div>
        </section>

    </div>

@endsection
