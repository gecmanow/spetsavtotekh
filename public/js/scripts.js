$(document).ready(function() {
    $('#offer_form').submit(function() {
        $('input').each(function() {
            $(this).removeClass('error_input');
        });
        $('.error').hide();

        var token = $('input[name="_token"]').val();
        var name = $('input[name="offer_form_name"]').val();
        var phone = $('input[name="offer_form_phone"]').val();
        var check = $('input[name="offer_form_check"]').prop('checked');

        $.ajax({
            type: "POST",
            url: "/send",
            data: {
                '_token': token,
                'offer_form_name': name,
                'offer_form_phone': phone,
                'offer_form_check': check
            },
            dataType: "json",
            success: function(data) {
                if(data.result == 'success') {
                    $('input[name="offer_form_name"]').val('');
                    $('input[name="offer_form_phone"]').val('');
                    document.location.href='/thanks';
                } else {
                    for(var errorField in data.text_error) {
                        $('#'+errorField+'_error').html(data.text_error[errorField]);
                        $('#'+errorField+'_error').show();
                        $('#'+errorField).addClass('error_input');
                    }
                }
            }
        });
        return false;
    });
});

$(document).ready(function() {
    $('#price_form').submit(function() {
        $('input').each(function() {
            $(this).removeClass('error_input');
        });
        $('.error').hide();

        var token = $('input[name="_token"]').val();
        var name = $('input[name="price_form_name"]').val();
        var phone = $('input[name="price_form_phone"]').val();
        var check = $('input[name="price_form_check"]').prop('checked');

        $.ajax({
            type: "POST",
            url: "/send-price-form",
            data: {
                '_token': token,
                'price_form_name': name,
                'price_form_phone': phone,
                'price_form_check': check
            },
            dataType: "json",
            success: function(data) {
                if(data.result == 'success') {
                    $('input[name="price_form_name"]').val('');
                    $('input[name="price_form_phone"]').val('');
                    document.location.href='/thanks';
                } else {
                    for(var errorField in data.text_error) {
                        $('#'+errorField+'_error').html(data.text_error[errorField]);
                        $('#'+errorField+'_error').show();
                        $('#'+errorField).addClass('error_input');
                    }
                }
            }
        });
        return false;
    });
});

$(document).ready(function() {
    $('#modal_form').submit(function() {
        $('input').each(function() {
            $(this).removeClass('error_input');
        });
        $('.error').hide();

        var token = $('input[name="_token"]').val();
        var name = $('input[name="modal_form_name"]').val();
        var phone = $('input[name="modal_form_phone"]').val();
        var check = $('input[name="modal_form_check"]').prop('checked');

        $.ajax({
            type: "POST",
            url: "/send-modal-form",
            data: {
                '_token': token,
                'modal_form_name': name,
                'modal_form_phone': phone,
                'modal_form_check': check
            },
            dataType: "json",
            success: function(data) {
                if(data.result == 'success') {
                    $('input[name="modal_form_name"]').val('');
                    $('input[name="modal_form_phone"]').val('');
                    document.location.href='/thanks';
                } else {
                    for(var errorField in data.text_error) {
                        $('#'+errorField+'_error').html(data.text_error[errorField]);
                        $('#'+errorField+'_error').show();
                        $('#'+errorField).addClass('error_input');
                    }
                }
            }
        });
        return false;
    });
});
