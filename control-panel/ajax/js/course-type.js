$(document).ready(function () {

//---------- Start Create Data ---------
    $("#create").click(function (event) {
        event.preventDefault();
        //-- ** Start Error Messages
        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter course type title..!",
                type: 'error',
                timer: 1500,
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
                url: "ajax/php/course-type.php",
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
    });
//---------- End Create Data ---------
//------------------------------------
//---------- Start Edit Data ---------
    //update
    $(".edit-data").click(function (event) {
        event.preventDefault();
        var id = $(this).attr("dataId");
        //-- ** Start Error Messages
        if (!$('.title').val() || $('.title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter  course type title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            //-- ** End Error Messages
            //start preloarder
            $('.someBlock').preloader();
            //grab all form data  
            var formData = new FormData($('#form-data-' + id)[0]);
            formData.append("update", "TRUE");
            formData.append("id", id);
            $.ajax({
                url: "ajax/php/course-type.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    //remove preloarder
                    $('.someBlock').preloader('remove');
                    swal({
                        title: "Success!",
                        text: "Your changes saved successfully!...",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function () {
                        window.location.reload();
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
//---------- End Update Data ---------
//----------------------------------------------------
});