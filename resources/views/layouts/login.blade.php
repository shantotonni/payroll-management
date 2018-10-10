<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="http://mnnhomecare.com/wp-content/uploads/2017/08/cropped-lgo-192x192.png"
          type="image/x-icon"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.min.css') }}"/>

    <!-- all css here -->

    <link rel="stylesheet" href="{{ asset('assets/css/web-theme/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/admin-theme/DataTables/jquery.dataTables.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/admin-theme/DataTables/extensions/dataTables.colVis.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/admin-theme/bootstrap-datepicker/datepicker3.css') }}"/>

    <link rel="stylesheet" href="{{ asset('assets/css/admin-theme/toastr.min.css') }}"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

@yield('css')


<!-- Script -->
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/web-theme/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/admin-theme/bootbox/bootbox-v4.4.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/admin-theme/toastr.min.js') }}"></script>
{{--<script src="{{ asset('js/jquery.printPage.js') }}"></script>--}}

<!-- datepicker Scripts -->
    <script src="{{ asset('assets/js/admin-theme/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

    <!-- timepicker Scripts -->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>--}}
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>


    <!-- Stylesheet -->

    <!-- datepicker Scripts -->

    <style>
        input[type='password'] {
            width: 100%;
            box-sizing: border-box;
            height: 44px;
            display: inline-block;
            border: 1px solid #d7c8c8;

            padding: 0 15px;
            transition: .2s;
        }

        .required {
            color: red;
            font-size: 20px;
        }
    </style>


</head>
<body style="background-image: url({!! asset('img/back.jpg') !!});" class="c-login-wrapper" data-gr-c-s-loaded="true">
<div id="app">
    <nav class="navbar navbar-default navbar-static-top"
         style="border-color: #d3e0e9;position: fixed;top: 0;width: 100%;background-color: #FFFFFF;box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.2), 0 0px 1px 0 rgba(0, 0, 0, 0.19);">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}" style="font-weight: bold">
                    M & N Home Care
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li style="font-weight: bold"><a href="{{ url('/') }}">Login</a></li>
                        <li style="font-weight: bold"><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>
<script src="{{ asset('assets/admin_login_page/main.min.js') }}"></script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
