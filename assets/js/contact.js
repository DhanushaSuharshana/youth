$("#contact_btn").click(function(event) {
    event.preventDefault();
    $('#contact_btn').attr('disabled', 'disabled');
    $('#contact_btn_text').html('Please wait...');

    var formData = new FormData($('#contactForm')[0]);
    $.ajax({
        url: siteUrl+"contact_us/new_message",
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
            $('#contact_btn').attr('disabled', false);
            $('#contact_btn_text').html('Send Now');

            clear_form_errors();
            if (data.has_errors === true) {
                //set errors for fields
                set_form_errors(data.errors);
            } else {
                if (data.status === true) {
                    clear_form_errors();
                    swal({
                        title: "success!",
                        text: "Check Your Email for more details !",
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