jQuery(document).ready(function () {
//---------- Start Create Data ---------
    $("#create").click(function (event)
    {
        event.preventDefault();
        //-- ** Start Error Messages
        if (!$('#name').val() || $('#name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter the District Name.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            //-- ** End Error Messages
        } else {
            //start preloarder
            $('.someBlock').preloader();
            var formData = new FormData($('#form-data')[0]);  //grab all form data  
            formData.append("create", "TRUE");
            $.ajax({
                url: "ajax/php/district.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function (result) {
                    //remove preloarder
                    $('.someBlock').preloader('remove');
                    if (result.status === 'success') {
                        swal({
                            title: "success!",
                            text: "Your data saved successfully !",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        window.setTimeout(function () {
                            window.location.reload()
                        }, 2000);
                    } else if (result.status === 'error') {
                        swal({
                            title: "Error!",
                            text: "Something went wrong",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });

        }
        return false;
    });
//---------- End Create Data ---------

//---------- Start Edit Data ---------
    $(".edit-data").click(function (event) {
        event.preventDefault();
        var id = $(this).attr("data-id");
        //-- ** Start Error Messages
        if (!$('.name').val() || $('.name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter the Name.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            //-- ** End Error Messages
        } else {
            //start preloarder
            $('.someBlock').preloader();
            //grab all form data  
            var formData = new FormData($('#form-data-' + id)[0]);
            formData.append("update", "TRUE");
            formData.append("id", id);
            $.ajax({
                url: "ajax/php/district.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function (result) {
                    //remove preloarder
                    $('.someBlock').preloader('remove');
                    if (result.status === 'success') {
                        swal({
                            title: "success!",
                            text: "Your data saved successfully !",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        window.setTimeout(function () {
                            window.location.reload()
                        }, 2000);
                    } else if (result.status === 'error') {
                        swal({
                            title: "Error!",
                            text: "Something went wrong",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });
        }
        return false;
    });

    //-------- Start Delete Data ---------
    $('.delete-data').click(function () {
        var id = $(this).attr("data-id");
        //-- ** Show Confirmation MSG 
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this action!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {
            //grab all form data
            $.ajax({
                url: "ajax/php/district.php",
                type: "POST",
                data: {id: id, option: 'delete'},
                dataType: "JSON",
                success: function (jsonStr) {
                    if (jsonStr.status) {
                        swal({
                            title: "Deleted!",
                            text: "The data has been deleted.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        $('#div' + id).remove();
                    }
                }
            });
        });
    });
});

 