$("#booking_btn").click(function(event) {
    event.preventDefault();
    $('#booking_btn').attr('disabled', 'disabled');
    $('#booking_btn_text').html('Please wait...');

    var formData = new FormData($('#booking_form')[0]);
    $.ajax({
        url: siteUrl+"booking/new_booking",
        type: 'POST',
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(data) {
            //remove preloarder
            // $('.someBlock').preloader('remove');
            $('#booking_btn').attr('disabled', false);
            $('#booking_btn_text').html('Book Now');

            clear_form_errors();
            if (data.has_errors === true) {
                //set errors for fields
                set_form_errors(data.errors);
            } else {
                if (data.status === true) {
                    clear_form_errors();
                    swal({
                        title: "success!",
                        text: "Successfully send your request !",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    setTimeout(function() {
                        // location.reload();
                        window.open(siteUrl,'_self')
                    }, 2500);
                } else {
                    if (data.msg) {
                        swal({
                            title: "Error!",
                            text: data.msg,
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    } else {
                        swal({
                            title: "Error!",
                            text: "Something went wrong",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            }
        }
    });

});