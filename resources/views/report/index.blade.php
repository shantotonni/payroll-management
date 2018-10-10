@extends('layouts.master')

@section('title')
    Report | MNN Home Care
@endsection

@section('content')

    <div id="pjax_options" class="padding-top">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{!! route('home') !!}">Dashboard
                    <li><a href="{!! route('report.index') !!}">Report</a></li>
                </ul>


                @if(session()->has('msg'))
                    <div class="alert alert-success">
                        {{ session()->get('msg') }}
                    </div>
                @endif
                @if(session()->has('delete'))
                    <div class="alert alert-danger">
                        {{ session()->get('delete') }}
                    </div>
                @endif

                <div class="panel-group">
                    <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: #bdf0fb;font-size: 18px;text-transform: uppercase">All Reports</div>
                        <div class="panel-body">
                            <table class="projects-table data_table">
                                <thead style="background-color: #064685;color: white">
                                <tr>
                                    <th class="table-project-cell">
                                  <span>
                                    Serial No
                                  </span>
                                    </th>
                                    <th class="table-project-cell">
                                        <span>Client Name</span>
                                    </th>
                                    <th class="table-project-cell">
                                      <span>
                                       Assign( Employee )
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                        Service Time
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                         Last Service Date
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                         Next Service Date
                                      </span>
                                    </th>
                                    <th class="table-project-cell">
                                      <span>
                                        Status
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                  <span>
                                     Action
                                  </span>
                                    </th>

                                </tr>
                                </thead>
                                <?php
                                $i = 1;
                                ?>

                                <tbody class="customers">
                                @if(count($report)>0)

                                    @foreach($report as $value)

                                        <tr id="srow_11303763">
                                            <td>{!! $i++ !!}</td>
                                            <td>
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                {!! isset($value->client)?$value->client->first_name:'' !!}
                                                <br>
                                                <i style="font-size: 10px" class="fa fa-map-marker" aria-hidden="true"></i>
                                                <span style="font-size: 12px">{!! isset($value->client)?$value->client->permanent_address:'' !!}</span>
                                                <br>
                                                <i style="font-size: 10px" class="fa fa-phone" aria-hidden="true"></i>
                                               <span style="font-size: 12px"> {!! isset($value->client)?$value->client->telephone_number:'' !!}</span>
                                                <br>
                                            </td>


                                            <td style="text-align: left">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                {!! isset($value->employee)?$value->employee->first_name:'' !!}
                                                <br>
                                                <i style="font-size: 10px" class="fa fa-envelope" aria-hidden="true"></i>
                                                <span style="font-size: 12px">{!! isset($value->employee)?$value->employee->email:'' !!}</span>
                                                <br>
                                                <i style="font-size: 10px" class="fa fa-phone" aria-hidden="true"></i>
                                                <span style="font-size: 12px">{!! isset($value->employee)?$value->employee->telephone_number:'' !!}</span>
                                            </td>

                                            <td>{!! $value->preferred_time !!}</td>

                                            <td>{!! $value->valid_from_date !!}</td>
                                            <td>{!! $value->date !!}</td>
                                            <td>{!! ucfirst($value->status) !!}</td>

                                            <td class="jq-dropdown-container">
                                                <div class="project-options-trigger"
                                                     data-jq-dropdown="#project-options-dropdown-11303763"></div>
                                                <li class="button-dropdown" style="list-style: none">

                                                    <a href="{!! route('report.show',$value->history_id) !!}"
                                                       style="color: #2772A7;font-size: 12px" class="btn btn-success btn-sm">
                                                        <i class="fa fa-eye" aria-hidden="true" style="color: white"></i>
                                                        <span style="margin-left: 5px;color: white">View</span>
                                                    </a>
                                                    <ul class="dropdown-menu"
                                                        style=" border-radius:2px;border-style: hidden;box-shadow: 0 0 0 1px #2772A7;">
                                                        {{--<li>--}}
                                                            {{--<a href="{!! route('history.edit',$value->id) !!}"--}}
                                                               {{--style="color: #2772A7;font-size: 12px">--}}
                                                                {{--<i class="fa fa-pencil-square-o" aria-hidden="true"></i>--}}
                                                                {{--<span style="margin-left: 5px">Edit</span>--}}
                                                            {{--</a>--}}
                                                        {{--</li>--}}
                                                        <li>

                                                        </li>

                                                        {{--<li>--}}
                                                            {{--<a href="" class="attribute_option_remove_btn"--}}
                                                               {{--data-href="{!! route('report.delete',$value->history_id) !!}"--}}
                                                               {{--style="color: #2772A7;font-size: 12px"--}}
                                                               {{--data-id="{{$value->history_id}}">--}}
                                                                {{--<i class="fa fa-trash" aria-hidden="true"></i> <span--}}
                                                                        {{--style="margin-left: 5px">Delete</span>--}}
                                                            {{--</a>--}}
                                                        {{--</li>--}}

                                                    </ul>
                                                </li>
                                            </td>

                                        </tr>

                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/main.js') }}"></script>
    </div>

    <script>

        $(document).delegate('.attribute_option_remove_btn', 'click', function () {
            var url = $(this).attr('data-href');

            bootbox.confirm({
                message: "Are you sure?",
                buttons: {
                    confirm: {
                        label: 'Yes',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if (result) {

                        $.ajax({

                            url: url,
                            type: 'POST',
                            dataType: "json",
                            data: {_token: '{!! csrf_token() !!}'},
                            async: true,
                            success: function (data) {
                                if (data.result == 'success') {

                                    toastr.success(data.message);
                                    $.pjax.reload('#pjax_options');

                                } else {
                                    toastr.error(data.message);
                                }
                            }
                        });

                    }
                }
            });

            return false;
        });

        $('.datepicker').datepicker({
            autoclose: true,
            format: "yyyy-mm-dd"
        });

    </script>


@endsection
