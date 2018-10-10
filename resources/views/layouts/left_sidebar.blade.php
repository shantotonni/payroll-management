<div class="sidebar">
    <div>
        <div id="logo">
            <a href="{!! route('home') !!}"><img class="img" width="180px" height="60px" src="{!! asset('img/ews_logo.png') !!}" alt="StatCounter"></a>
        </div>

        <ul class="nav sidenav">
            <li id="add-project-nav">
                <a href="{!! route('home') !!}"><i class="fa fa-home" aria-hidden="true"></i>
                    Dashboard</a>
            </li>
            <li id="add-project-nav">
                <a href="{!! route('client.registration.index') !!}"><i class="fa fa-user" aria-hidden="true"></i>
                    Clients</a>
            </li>
            <li id="add-project-nav">
                <a href="{!! route('employee.registration.index') !!}"><i class="fa fa-male" aria-hidden="true"></i>
                    Employees</a>
            </li>

            <li id="add-project-nav">
                <a href="{!! route('services.index') !!}">
                    <i class="fa fa-align-justify" aria-hidden="true"></i>
                    Services
                </a>
            </li>

            <li id="add-project-nav">
                <a href="{!! route('history.index') !!}">
                    <i class="fa fa-history" aria-hidden="true"></i>
                      Employee Assign To &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Client
                </a>
            </li>

            <li id="add-project-nav">
                <a href="{!! route('report.index') !!}">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    Reports
                </a>
            </li>


            {{--<li id="add-project-nav">--}}

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    Settings <span class="caret"></span>
                </a>

                @if(\Illuminate\Support\Facades\Auth::user()->type=='admin')

                <ul class="dropdown-menu login" style="color: black">
                    <li id="add-project-nav">
                        <a href="{!! route('transaction.index') !!}" style="color: black;margin-left: 10px">
                            Transaction Code
                        </a>
                    </li>
                </ul>

                    @endif
            </li>



            {{--</li>--}}
        </ul>
    </div>
</div>