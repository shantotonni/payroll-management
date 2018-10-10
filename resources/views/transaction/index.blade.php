@extends('layouts.master')

@section('title')
    Transaction Code | MNN Home Care
@endsection

@section('content')

<div id="pjax_options" class="padding-top">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{!! route('home') !!}">Dashboard
                <li><a href="{!! route('transaction.index') !!}">Transaction Code</a></li>
            </ul>

            <ul class="breadcrumb pull-right" style="padding-right: 0px">
                {{--<li><a href="{!! route('assign.to.employee.index') !!}" class="btn btn-primary">Assign To Employee</a> </li>--}}
             <li>
                 <a href="{!! route('transaction.create') !!}" class="btn btn-success btn-sm"><i class="fa fa-plus-square" aria-hidden="true">
                     </i>
                     <span style="margin-left: 10px">Add Transaction Code</span>
                 </a>
             </li>

                {{--<li>--}}
                    {{--<a href="{!! route('assign.to.client.index') !!}" class="btn btn-primary btn-sm">Assign Service For a Client</a>--}}
                {{--</li>--}}

            </ul>

            <br>
            <br>

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
                        <div class="panel-heading"  style="background-color: #bdf0fb;font-size: 18px;text-transform: uppercase">All Transaction Code</div>
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
                                        Type
                                      </span>
                                    </th>
                                    <th class="table-project-cell">
                                      <span>
                                        Code
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                       Title
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                         Last Number
                                      </span>
                                    </th>

                                    <th class="table-project-cell">
                                      <span>
                                        Increment
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
                                @if(count($transaction)>0)

                                    @foreach($transaction as $value)

                                        <tr id="srow_11303763">
                                            <td>{!! $i++ !!}</td>
                                            <td>{!! $value->type !!}</td>
                                            <td>{!! $value->code !!}</td>
                                            <td>{!! $value->title !!}</td>
                                            <td>{!! $value->last_number !!}</td>
                                            <td>{!! $value->increment !!}</td>
                                            <td>{!! ucfirst($value->status) !!}</td>
                                            <td class="jq-dropdown-container">
                                                <div class="project-options-trigger" data-jq-dropdown="#project-options-dropdown-11303763"></div>
                                                <li class="button-dropdown" style="list-style: none">
                                                    <a href="javascript:void(0)" class="dropdown-toggle btn btn-primary btn-sm">
                                                        <span><i class="fa fa-cog" aria-hidden="true"></i> <span>Action</span> ▼</span>
                                                    </a>
                                                    <ul class="dropdown-menu" style=" border-radius:2px;border-style: hidden;box-shadow: 0 0 0 1px #2772A7;">
                                                        <li>
                                                            <a href="{!! route('transaction.edit',$value->id) !!}" style="color: #2772A7;font-size: 12px">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span style="margin-left: 5px">Edit</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{!! route('transaction.show',$value->id) !!}" style="color: #2772A7;font-size: 12px" >
                                                                <i class="fa fa-eye" aria-hidden="true"></i> <span style="margin-left: 5px">View</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="" class="attribute_option_remove_btn" data-href="{!! route('transaction.delete',$value->id) !!}" style="color: #2772A7;font-size: 12px" data-id="{{$value->id}}" >
                                                                <i class="fa fa-trash" aria-hidden="true"></i> <span style="margin-left: 5px">Delete</span>
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
</script>


@endsection
