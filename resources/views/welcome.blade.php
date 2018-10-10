@extends('layouts.login')

@section('title')
    Admin Login Form
@endsection
@section('content')


    <div class="c-login">
        <header class="c-login__head">
            {{--<a class="c-login__brand" href="/login">--}}
            {{--<img src="http://zogocommerce.com/assets/images/web/logo.png" alt="www.ZogoCommerce.com">--}}
            {{--</a>--}}
            <h1 class="c-login__title">Login | Payroll</h1>

        </header>

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
                <a class="btn btn-primary pull-left btn-xs" href="{{ route('employee.registration.create') }}" style="font-weight: bold;">
                    Employee Registration
                </a>
                <a class="btn btn-success pull-right btn-xs" href="{{ route('client.registration.create') }}" style="font-weight: bold;">
                    Client Registration
                </a>
            </div>

        </section>


    </div>


@endsection
