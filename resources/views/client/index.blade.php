@extends('layouts.master')

@section('title')
    Client | MNN Home Care
@endsection

@section('content')

    <div id="pjax_options" class="padding-top">
        <div class="row">
            <div class="col-md-12">

                <ul class="breadcrumb">
                    <li><a href="{!! route('home') !!}">Dashboard</a></li>
                    <li><a href="{!! route('client.registration.index') !!}">Client</a> <span class="divider">/</span></li>
                </ul>

                @if(\Illuminate\Support\Facades\Auth::user()->type=='admin')

                <li class="add-client">
                    <a href="{!! route('admin.create.client') !!}" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus-square" aria-hidden="true">
                        </i>
                        <span class="add-client-span">Add Clients</span>
                    </a>


                    @endif

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
                        <div class="panel-heading" id="heading" style="text-transform: uppercase">All Clients</div>
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
                                      <span>
                                        First Name
                                      </span>
                                    </th>
                                    <th class="table-project-cell">
                                      <span>
                                        Last Name
                                      </span>
                                    </th>
                                    <th class="table-project-cell">
                                      <span>
                                       Email
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                        Gender
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                       Country
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                         Date Of Birth
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                        Authorized Name
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
                                $i=1;
                                ?>

                                <tbody class="customers">
                                  @if(count($client)>0)

                                    @foreach($client as $value)

                                        <tr id="srow_11303763">
                                            <td>{!! $i++ !!}</td>
                                            <td>
                                                <a id="project-name-p11303763" href="{!! route('client.registration.show',$value->id) !!}" style="font-weight: bold;color: black">{!! $value->first_name !!}</a>
                                            </td>
                                            <td>{!! $value->last_name !!}</td>
                                            <td>{!! $value->email !!}</td>
                                            @if($value->gender==1)
                                                <td>Male</td>
                                            @else
                                                <td>Female</td>
                                            @endif

                                            <td>
                                                @if($value->country=='236')
                                                    United State
                                                    @endif
                                            </td>
                                            <td>{!! $value->date_of_birth !!}</td>
                                            <td>{!! isset($value->profile)?$value->profile->authorized_first_name:'' !!}</td>
                                            <td>{!! ucfirst($value->status) !!}</td>

                                            <td class="jq-dropdown-container">
                                                <div class="project-options-trigger" data-jq-dropdown="#project-options-dropdown-11303763"></div>
                                                <li class="button-dropdown" style="list-style: none">
                                                    <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary btn-sm">
                                                        <span><i class="fa fa-cog" aria-hidden="true"></i> <span>Action</span> ▼</span>
                                                    </a>
                                                    <ul class="dropdown-menu" style=" border-radius:2px;border-style: hidden;box-shadow: 0 0 0 1px #2772A7;">
                                                        <li>
                                                            <a href="{!! route('client.registration.edit',$value->id) !!}" style="color: #2772A7;font-size: 12px">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                                <span style="margin-left: 5px">Edit</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{!! route('client.registration.show',$value->id) !!}" style="color: #2772A7;font-size: 12px" >
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                <span style="margin-left: 5px">View</span>
                                                            </a>
                                                        </li>
                                                        @if($value->status=='active')
                                                        <li>
                                                            <a href="{!! route('client.inactive',$value->id) !!}" style="color: #2772A7;font-size: 12px" >
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                <span style="margin-left: 5px">Inactive</span>
                                                            </a>
                                                        </li>
                                                        @endif

                                                        @if($value->status=='inactive')
                                                            <li>
                                                                <a href="{!! route('client.active',$value->id) !!}" style="color: #2772A7;font-size: 12px" >
                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    <span style="margin-left: 5px">Active</span>
                                                                </a>
                                                            </li>
                                                        @endif


                                                        <li>
                                                            <a href="" data-id="{{$value->id}}" data-href="{!! route('client.registration.delete',$value->id) !!}" class="attribute_option_remove_btn" style="color: #2772A7;font-size: 12px" >
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                                <span style="margin-left: 5px">Delete</span>
                                                            </a>
                                                        </li>
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

    $(document).delegate('.attribute_option_remove_btn','click',function () {
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
                if(result){

                    $.ajax({
                        url: url,
                        type: 'POST',
                        dataType: "json",
                        data: {_token: '{!! csrf_token() !!}'},
                        async: true,
                        success: function (data) {
                            if(data.result == 'success'){

                                toastr.success(data.message);
                                $.pjax.reload('#pjax_options');

                            }else{
                                toastr.error(data.message);
                            }
                        }
                    });

                }
            }
        });

        return false;
    });

</script>

@endsection