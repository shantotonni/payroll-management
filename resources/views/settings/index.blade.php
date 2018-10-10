@extends('layouts.master')

@section('title')
    All Settings
@endsection

@section('content')
    {{--<ul class="breadcrumb">--}}
    {{--<li><a href="{!! route('home') !!}">Dashboard</a> <span class="divider">/</span></li>--}}
    {{--<li><a href="{!! route('services.index') !!}">Services</a> <span class="divider">/</span></li>--}}

    {{--</ul>--}}

    {{--<ul class="breadcrumb pull-right">--}}
    {{--<li><a href="{!! route('assign.to.employee.index') !!}" class="btn btn-primary">Assign To Employee</a> </li>--}}
    {{--<li><a href="{!! route('assign.to.client.index') !!}" class="btn btn-success">Assign To Client</a></li>--}}
    {{--<li><a href="{!! route('employee.assign.to.client.index') !!}" class="btn btn-info">Employee Assign To Client</a></li>--}}
    {{--</ul>--}}

    <div class="" style="margin-top: 60px;padding-left: 30px;padding-right: 30px;" id="pjax_options">
        <div class="row">
            <div class="col-md-12">

                <h1 style="text-align: center;color: brown">UnderConstruction</h1>

            </div>
        </div>
        <script src="{{ asset('js/main.js') }}"></script>

    </div>



    <script>

        $(document).delegate('.project_form','submit',function () {

            var formData = new FormData($(this)[0]);
            var form = $(this);

            $.ajax({

                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                async: true,
                success: function (data) {

                    data = jQuery.parseJSON(data);

                    if(data.result == 'success'){

                        $('#exampleModal').modal('hide');

                        toastr.success(data.message);

                        setTimeout(function () {
                            $.pjax.reload('#pjax_options');
                        },500);

                    }else{

                        toastr.error('Input Field must not be Empty');
                    }

                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
        });


        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script>

@endsection
