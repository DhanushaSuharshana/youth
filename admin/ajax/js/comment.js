$(document).ready(function () {
//---------- Start Create Data ---------
    $("#create").click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();
        //-- ** Start Error Messages
        if (!$('#name').val() || $('#name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#image_name').val() || $('#image_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter  image..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#date').val() || $('#date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter course date..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#comment').val() || $('#comment').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter comment..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            //-- ** End Error Messages
            $('.someBlock').preloader();
            var formData = new FormData($('#form-data')[0]);  //grab all form data  
            formData.append("create", "TRUE");
            $.ajax({
                url: "ajax/php/comment.php",
                type: "POST",
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
    });
//---------- End Create Data ---------
//------------------------------------
//---------- Start Edit Data ---------
    $(".edit-data").click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();
        //-- ** Start Error Messages
        var id = $(this).attr("dataId");

        if (!$('.name').val() || $('.name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('.title').val() || $('.title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('.image_name').attr('value') || $('.image_name').attr('value').length === 0) {
            swal({
                title: "Error!",
                text: "Please enter  image..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('.date_edit').val() || $('.date_edit').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter date..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('.comment_edit_' + id).val() || $('.comment_edit_' + id).val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter comment..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            //start preloarder
            $('.someBlock').preloader();
            var formData = new FormData($('#form-data-' + id)[0]);
            formData.append("update", "TRUE");
            formData.append("id", id);
            alert();
            $.ajax({
                url: "ajax/php/comment.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    swal({
                        title: "Success!",
                        text: "Your changes saved successfully!...",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function () {
                        setTimeout(function () {
                            window.location.reload();
                            // window.location.replace("edit-comment.php?id=" + result.id);
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
//---------- End update Data ---------
//------------------------------------
//---------- Start delete Data ---------
    $('.delete-comment').click(function () {

        var id = $(this).attr("data-id");

        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {

            $.ajax({
                url: "delete/ajax/comment.php",
                type: "POST",
                data: {id: id, option: 'delete'},
                dataType: "JSON",
                success: function (jsonStr) {
                    if (jsonStr.status) {

                        swal({
                            title: "Deleted!",
                            text: "Your imaginary file has been deleted.",
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