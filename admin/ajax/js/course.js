jQuery(document).ready(function () {

//---------- Start Create Data ---------
    $("#create").click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();
        //-- ** Start Error Messages
        if (!$('#course_type').val() || $('#course_type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select course type.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#name').val() || $('#name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter course name.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#max_student').val() || $('#max_student').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter course max student.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#image_name').val() || $('#image_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter Image..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#level').val() || $('#level').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter course level..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#languages').val() || $('#languages').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter course teaching languages..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#duration').val() || $('#duration').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter course duration..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#start_date').val() || $('#start_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter course start date..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#short_description').val() || $('#short_description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter short description..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter  description..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            //-- ** End Error Messages
        } else {
            //start preloarder
            $('.someBlock').preloader();
            //grab all form data  
            var formData = new FormData($('#form-data')[0]);  //grab all form data  
            formData.append("create", "TRUE");

            $.ajax({
                url: "ajax/php/course.php",
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
//----------------------------------------------------
//---------- Start Edit Data ---------
    $(".edit-data").click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();
        var id = $(this).attr("dataId");
        //-- ** Start Error Messages
        if (!$('.course_type').val() || $('.course_type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select course type.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('.name').val() || $('.name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter course name.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('.max_student').val() || $('.max_student').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter course max student.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('.level').val() || $('.level').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter course level..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('.languages').val() || $('.languages').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter course teaching languages..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('.duration').val() || $('.duration').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter course duration..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
//        } else if (!$('.start_dates').val() || $('.start_dates').val().length === 0) {
//            swal({
//                title: "Error!",
//                text: "Please Enter course start date..!",
//                type: 'error',
//                timer: 2000,
//                showConfirmButton: false
//            });
        } else if (!$('.short_description').val() || $('.short_description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter short description..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
//        } else if (!$('.descriptions').val() || $('.descriptions').val().length === 0) {
//            swal({
//                title: "Error!",
//                text: "Please Enter  description..!",
//                type: 'error',
//                timer: 2000,
//                showConfirmButton: false
//            });
        } else {
            //-- ** End Error Messages
            //start preloarder
            $('.someBlock').preloader();
            //grab all form data  
            var formData = new FormData($('#form-data-' + id)[0]);
            formData.append("update", "TRUE");
            formData.append("id", id);

            $.ajax({
                url: "ajax/php/course.php",
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
                            text: "Your data updated successfully !",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false,
                        });
                        window.setTimeout(function () {
                            window.location.reload();
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
//---------- End Update Data ---------
//----------------------------------------------------
//-------- Start Delete Data ---------
    $('.delete-data').click(function () {
        var id = $(this).attr("data-id");
        //-- ** Show Confirmation MSG 
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this action file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {
            //grab all form data
            $.ajax({
                url: "ajax/php/course.php",
                type: "POST",
                data: {id: id, option: 'delete'},
                dataType: "JSON",
                success: function (jsonStr) {
                    if (jsonStr.status) {

                        swal({
                            title: "Deleted!",
                            text: "The Data has been deleted.",
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
//-------- End Delete Data ---------
//----------------------------------------------------
 