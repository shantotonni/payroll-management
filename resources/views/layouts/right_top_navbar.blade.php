<nav class="navbar navbar-default navbar-static-top fixed-top shadow">
    <div class="navbar-header">
        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse"
                aria-expanded="false">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">

        <!-- Right Side top Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @guest
                <li><a href="{{ route('login') }}" style="font-size: 15px;color: #064685;font-weight: bold">Login</a>
                </li>
                <li><a href="{{ route('register') }}"
                       style="font-size: 15px;color: #064685;font-weight: bold">Register</a></li>
                @else

                    <li>
                        <a href="" style="font-size: 16px;font-family: 'Source Sans Pro', sans-serif;color: #064685">
                            <i class="fa fa-buysellads" aria-hidden="true"></i>
                            Administrative
                        </a>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::user()->type=='admin')
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" aria-haspopup="true"
                               style="font-size: 16px;color: #064685;font-family: 'Source Sans Pro', sans-serif;">
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                                Settings <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu login">
                                <li>

                                    <a href="{{ route('user.list') }}"
                                       style="color: black;margin-left: 20px;font-size: 14px;font-family: 'Source Sans Pro', sans-serif;">
                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                        User Lists
                                    </a>
                                    <a href=""
                                       style="color: black;margin-left: 20px;font-size: 14px;font-family: 'Source Sans Pro', sans-serif;">
                                        <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                        Role Manage
                                    </a>
                                    <a href=""
                                       style="color: black;margin-left: 20px;font-size: 14px;font-family: 'Source Sans Pro', sans-serif;">
                                        <i class="fa fa-registered" aria-hidden="true"></i>
                                        Permission Access
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                           aria-haspopup="true"
                           style="font-size: 16px;font-family: 'Source Sans Pro', sans-serif;color: #064685;">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            {{ ucfirst(Auth::user()->first_name) }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu login">
                            <li>
                                <a href="{{ route('logout') }}"
                                   style="color: black;margin-left: 20px;font-size: 14px;font-family: 'Source Sans Pro', sans-serif;"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>

                            <li>
                                <a href="{{ route('profile.index') }}"
                                   style="color: black;margin-left: 20px;font-size: 14px;font-family: 'Source Sans Pro', sans-serif;">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    Profile
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endguest
        </ul>
    </div>
</nav>
