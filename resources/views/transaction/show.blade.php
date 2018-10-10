@extends('layouts.master')

@section('title')
    View Services | MNN Home Care
@endsection

@section('content')

    <div class="padding-top">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{!! route('home') !!}">Dashboard</a></li>
                    <li><a href="{!! route('transaction.index') !!}">Transaction</a></li>
                    <li class="active">Show</li>
                </ul>
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading"  style="background-color: #bdf0fb;font-size: 18px">
                            Transaction Code Information
                            <a href="{!! route('transaction.index') !!}" class="btn btn-success btn-xs pull-right">Back To Transaction</a>
                        </div>
                        <div class="panel-body">
                            <div class="modal-body">
                                <div style="">
                                    <table id="" class="table table-bordered table-hover table-striped">
                                        <tr>
                                            <th class="col-lg-4">Title : </th>
                                            <td> {!! $transaction->title !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Code : </th>
                                            <td>{!! $transaction->code !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Type :</th>
                                            <td>{!! $transaction->type !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Last Number : </th>
                                            <td colspan="2">{!! $transaction->last_number !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4">Increment</th>
                                            <td>{!! $transaction->increment !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="col-lg-4"> Status</th>
                                            <td>{!! ucfirst($transaction->status) !!}</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
