<script>

    $(document).delegate('.add_new_btn','click',function () {
        $('#add_new_option').removeClass('hide');
        $(this).addClass('hide');
    });

    $(document).delegate('.employee_service','submit',function () {

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


                    toastr.success(data.message);
                    setTimeout(function () {
                        $.pjax.reload('#pjax_options');
                    },500);

                }else{
                    toastr.error(data.message);
                }

            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });


    $(document).delegate('.dynaform_edit_btn','click',function () {

        $(this).closest('form').find('.dynaform_edit_btn').addClass('hide');

        $(this).closest('form').find('input,select').prop('disabled',false).show('.dynaform_saveeeeeee_btn');

        $(this).closest('form').find('.dynaform_saveeeeeee_btn').removeClass('hide');

    });


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