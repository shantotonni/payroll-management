@extends('layouts.master')

@section('title')
    Caregiver Employee | MNN Home Care
@endsection

@section('content')

    <div class="padding-top">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{!! route('home') !!}">Dashboard</a></li>
                    <li><a href="{!! route('employee.registration.index') !!}">Employee</a></li>
                    <li class="active">Show</li>
                </ul>

                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #bdf0fb">
                            Employee Information
                            <a href="{!! route('employee.registration.index') !!}" class="btn btn-success btn-xs pull-right">Back To Employee</a>
                        </div>
                        <h3 class="text-center" style="color: green;text-decoration: underline">Information</h3>
                        <div class="modal-body">
                            <div style="">
                                <table id="" class="table table-bordered table-hover table-striped">
                                    <tr>
                                        <th class="col-lg-4">First Name : </th>
                                        <td>{!! $employee->first_name !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-lg-4">Last Name : </th>
                                        <td>{!! $employee->last_name !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-lg-4">Email : </th>
                                        <td>{!! $employee->email !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-lg-4">Country :</th>
                                        <td>
                                            @if($employee->country=='236')
                                                United State
                                                @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="col-lg-4">Date Of Birth : </th>
                                        <td colspan="2">{!! $employee->date_of_birth !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-lg-4">Consumers Type :</th>
                                        <td>{!! $employee->type !!}</td>
                                    </tr>

                                    <tr>
                                        <th class="col-lg-4">Address : </th>
                                        <td>{!! $employee->permanent_address !!}</td>
                                    </tr>

                                    <tr>
                                        <th class="col-lg-4">Employee ID : </th>
                                        <td>{!! $employee->employee_id !!}</td>
                                    </tr>

                                    <tr>
                                        <th class="col-lg-4">Status : </th>
                                        <td>{!! ucfirst($employee->status) !!}</td>
                                    </tr>

                                    <tr>
                                        <th class="col-lg-4"> Gender : </th>
                                        @if($employee->gender==1)
                                            <td>Male</td>
                                        @endif
                                        @if($employee->gender==2)
                                            <td>Female</td>
                                        @endif
                                    </tr>

                                </table>
                            </div>
                        </div>

                        <h3 class="text-center" style="color: green;text-decoration: underline">General Question Answer</h3>

                        <div class="modal-body">
                            <div style="">
                                <table id="" class="table table-bordered table-hover table-striped">
                                    <tr>
                                        <th class="col-lg-4">Which Position are you applying for? </th>
                                        <td>{!! isset($employee->profile)?$employee->profile->question_1:'' !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-lg-4">Please indicate any licenses held: </th>
                                        <td>{!! isset($employee->profile)?$employee->profile->indicate_licenses:'' !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-lg-4">Licence number : </th>
                                        <td>{!! isset($employee->profile)?$employee->profile->licence_number:'' !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-lg-4">License expiration date:</th>
                                        <td>{!! isset($employee->profile)?$employee->profile->licence_expiration_date:'' !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-lg-4">Lowest Acceptable Wage Per Hour: </th>
                                        <td colspan="2">{!! isset($employee->profile)?$employee->profile->lowest_wage_per_hour:'' !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-lg-4">Lowest Acceptable Wage for a 24 Hour Live-in:</th>
                                        <td>{!! isset($employee->profile)?$employee->profile->lowest_wage_24_hour:'' !!}</td>
                                    </tr>

                                    <tr>
                                        <th class="col-lg-4">Date you can start:</th>
                                        <td>{!! isset($employee->profile)?$employee->profile->date_you_can_start:'' !!}</td>
                                    </tr>

                                    <tr>
                                        <th class="col-lg-4">1. How did you hear about us? </th>
                                        <td>
                                            @if(isset($employee->profile)?$employee->profile->question_2==1:'')
                                                Word of Mouth
                                                @elseif(isset($employee->profile)?$employee->profile->question_2==2:'')
                                                Job Fair
                                                @elseif(isset($employee->profile)?$employee->profile->question_2==3:'')
                                                Newspaper
                                                @elseif(isset($employee->profile)?$employee->profile->question_2==4:'')
                                                Craigs List
                                                @elseif(isset($employee->profile)?$employee->profile->question_2==5:'')
                                                Other Caregiver

                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="col-lg-4">Are you a US citizen or legally eligible to hold employment in USA?</th>
                                        <td>
                                            @if(isset($employee->profile)?$employee->profile->question_3==1:'')
                                                Yes
                                                @else
                                                No
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="col-lg-4">
                                            Are you at least 18 years old?
                                            <br>
                                            If NO, how many months before you turn 18?
                                        </th>
                                        <td>
                                            @if(isset($employee->profile)?$employee->profile->question_3==1:'')
                                                Yes
                                            @else
                                                No
                                            @endif

                                            <br>
                                            {!! isset($employee->profile)?$employee->profile->question_4_answer:'' !!}
                                        </td>
                                    </tr>


                                    <tr>
                                        <th class="col-lg-4">
                                            Are you related to anyone employed by our company?
                                            <br>
                                            If yes, name of the person, relationship and location employed:
                                        </th>
                                        <td>
                                            @if(isset($employee->profile)?$employee->profile->question_5==1:'')
                                                Yes
                                            @else
                                                No
                                            @endif

                                                <br>
                                                {!! isset($employee->profile)?$employee->profile->question_5_answer:'' !!}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="col-lg-4">
                                            Have you ever worked for our company?
                                            <br>
                                            If YES, give date:
                                            <br>
                                            If YES, enter location:
                                            <br>
                                            If YES, enter Supervisors Name:
                                        </th>
                                        <td>
                                            @if(isset($employee->profile)?$employee->profile->question_6==1:'')
                                                Yes
                                            @else
                                                No
                                            @endif

                                                <br>
                                                {!! isset($employee->profile)?$employee->profile->question_6_answer_date:'' !!}
                                                <br>
                                                {!! isset($employee->profile)?$employee->profile->question_6_answer_location:'' !!}
                                                <br>
                                                {!! isset($employee->profile)?$employee->profile->question_6_answer_supervisor_name:'' !!}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="col-lg-4">
                                            Do you have any disabilities that may limit your ability to perform the work for which you are applying?
                                            <br>
                                            If YES, please explain:
                                            <br>
                                            If YES, what can be done to accomodate your limitation?
                                        </th>
                                        <td>
                                            @if(isset($employee->profile)?$employee->profile->question_7==1:'')
                                                Yes
                                            @else
                                                No
                                            @endif

                                            <br>
                                            {!! isset($employee->profile)?$employee->profile->question_7_answer_explain:'' !!}
                                            <br>
                                            {!! isset($employee->profile)?$employee->profile->question_7_answer_limitation:'' !!}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="col-lg-4">
                                            Have you ever been convicted (found guilty) of attempting or committing any crime other than a minor traffic violation?
                                            <br>
                                            If YES, give date:
                                            <br>
                                            IF YES, for what?
                                        </th>
                                        <td>
                                            @if(isset($employee->profile)?$employee->profile->question_8==1:'')
                                                Yes
                                            @else
                                                No
                                            @endif

                                            <br>
                                            {!! isset($employee->profile)?$employee->profile->question_8_answer_date:'' !!}
                                            <br>
                                            {!! isset($employee->profile)?$employee->profile->question_8_answer_for_whate:'' !!}
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>

                        <h3 class="text-center" style="color: green;text-decoration: underline">References</h3>

                        <div class="modal-body">
                            <div style="">
                                <table id="" class="table table-bordered table-hover table-striped">

                                    <tr>
                                        <th class="col-lg-4">May we contact your references?</th>
                                        <td>
                                            @if(isset($employee->profile)?$employee->profile->question_9==1:'')
                                                Yes
                                            @else
                                                No
                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="col-lg-4">Company Name</th>
                                        <td>{!! isset($employee->profile)?$employee->profile->reference_company_name:'' !!}</td>
                                    </tr>

                                    <tr>
                                        <th class="col-lg-4">Address</th>
                                        <td>{!! isset($employee->profile)?$employee->profile->reference_address:'' !!}</td>
                                    </tr>

                                    <tr>
                                        <th class="col-lg-4">Person Name:</th>
                                        <td>{!! isset($employee->profile)?$employee->profile->reference_person_name:'' !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-lg-4">How should I contact them?</th>
                                        <td>{!! isset($employee->profile)?$employee->profile->reference_contact:'' !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-lg-4">Position in Company: </th>
                                        <td colspan="2">{!! isset($employee->profile)?$employee->profile->reference_position_in_company:'' !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-lg-4">How many years have you been acquainted?</th>
                                        <td>{!! isset($employee->profile)?$employee->profile->reference_acquainted:'' !!}</td>
                                    </tr>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
