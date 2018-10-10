@extends('layouts.login')

@section('title')
    Caregiver Registration | MNN Home Care
@endsection

@section('content')

<div class="container" style="margin-top: 80px">
     <div class="row">

         <div class="panel-group">
             <div class="panel panel-default">
                 <a href="{{ route('admin.employee.print') }}" target="_blank" style="margin-right: 10px" class="btn btn-success btn-sm pull-right">Print</a>
                    <div class="panel-heading" style="background-color: #bdf0fb">Caregiver Registration Form</div>
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

                      <h2 style="padding:10px;background-color:#3678C0; color:#fff">CFEEC Evaluation Request Form </h2>

                      <p style="font-size:18px; font-weight:bold;">For Mainstream plan member requiring<br>
                            non-covered LTC benefits</p>

                  </div>
                 {!! Form::model($employee,['files'=> true, 'route'=> ['employee.registration.store'] ]) !!}

                      @include('employee._form')

                 {!! Form::close() !!}
             </div>
         </div>
     </div>
  </div>
</div>


@endsection
