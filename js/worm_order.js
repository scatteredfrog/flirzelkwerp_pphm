function validateForm() {
    var errMsg ="";
    var somethingIsOrdered = false;
    var data = [];
    data['success'] = true;
    
    // Make sure there's at least one item about to be ordered
    $('[id^=nb_]').each(function() {
        if ($(this).val() > 0) {
            somethingIsOrdered = true;
            return;
        }
    });
    
    if (!somethingIsOrdered) {
        data['success'] = false;
        data['errMsg'] = "You need to choose at least one item before you place an order!";
        return data;
    }
    
    // Make sure all the required fields are good
    $('.req').each(function() {
       var cur_len = $(this).val().length;
       switch($(this).attr('id')) {
           case 'first_name':
               if (cur_len === 0) {
                   errMsg += "Please provide your first name.\n";
               }
               break;
           case 'last_name':
               if (cur_len === 0) {
                   errMsg += "Please provide your last name.\n";
               }
               break;
           case 'street':
               if (cur_len < 6) {
                   errMsg += "Please provide a valid street address.\n";
               }
               break;
           case 'town':
               if (cur_len === 0) {
                   errMsg += "Please provide the city.\n";
               }
               break;
           case 'state':
               if (cur_len !== 2) {
                   errMsg += "Please provide a valid 2-letter state abbreviation.\n";
               }
               break;
           case 'zip':
               if (cur_len !== 5) {
                   errMsg += "Please enter a 5-digit ZIP code.\n";
               }
               break;
           case 'phone':
               if (cur_len === 0) {
                   errMsg += "Please provide your phone number.\n";
               }
               break;
           case 'email':
                var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if (!reg.test($(this).val())) {
                    errMsg += "Please provide a valid e-mail address.\n";
                }
               break;
       }
    });

    if ($('#garden_club').val().toUpperCase() === "Y" || $('#garden_club').val().toUpperCase() === "YES") {
        errMsg += "To what garden club do you belong?";
    }
    
    if (errMsg.length !== 0) {
        data['success'] = false;
        data['errMsg'] = errMsg;
        return data;
    }
    
    return data;
}

function submitOrder() {
     var formValidate = validateForm();
     console.log("Form validate:");
     console.log(formValidate);
     if (typeof formValidate !== 'undefined' && !formValidate['success']) {
         console.log("Invalid form");
         alert(formValidate['errMsg']);
         return;
     }
     var current_order = new Array();
     $('.product').each(function() {
         var current_id = $(this).attr('id');
         var current_number = $('#nb_' + current_id).val();
         if (current_number > 0) {
             current_order.push(current_id + "~" + current_number);
         }
     });
     var return_data = $.ajax({
         url: 'process_worm_order.php',
         type: 'POST',
         data: {'current_order' : current_order}
     }).done(function(data) {
         if (confirm(data)) {
            var return_data = $.ajax({
                url: 'finalize_worm_order.php',
                type: 'POST',
                data: {    'first_name'    : $('#first_name').val(),
                           'last_name'     : $('#last_name').val(),
                           'street'        : $('#street').val(),
                           'town'          : $('#town').val(),
                           'state'         : $('#state').val(),
                           'zip'           : $('#zip').val(),
                           'phone'         : $('#phone').val(),
                           'email'         : $('#email').val(),
                           'how_heard'     : $('#how_heard').val(),
                           'garden_club'   : $('#garden_club').val()
               }
            }).done(function(data) {
                alert(data);
                location.href = location.pathname.indexOf('pphmtest') > -1 ? "http://www.portageparkhandyman.com/pphmtest/toolsmats.php" : "http://www.porageparkhandyman.com/toolsmats.php";
            });
         }
     });
}

function clearForm() {
    $('[id^=nb]').each(function() {
        $(this).val(0);
        $(this).trigger('change');
    });
}

$(document).ready(function() {
    $('#phone').mask('(999) 999-9999');
    $('#zip').mask('99999');
    $('[id^=nb_]').each(function() {
        var base_id = $(this).parent().parent().attr('id');
        $(this).on('change',function() {
            $(this).val(parseInt($(this).val()));
            var grand_total = 0;
            var price = parseFloat($('#pr_'+base_id).text().substring(1));
            var total = price*parseFloat($(this).val());
            if (total == 0) {
                $('#st_'+base_id).text('');
            } else {
                $('#st_'+base_id).text(total.toLocaleString('en-US', { style: 'currency', currency: 'USD' }));
            }
            $('.wormSubtotalAmount').each(function() {
                if ($(this).text() != '') {
                    var this_subtotal = parseFloat($(this).text().substring(1));
                    grand_total += this_subtotal;
                }
            });
            if (grand_total === 0) {
                $('#your_total').text('');
            } else {
                $('#your_total').text(grand_total.toLocaleString('en-US', { style: 'currency', currency: 'USD' }));
            }
        });
    });
});
