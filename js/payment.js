$(document).ready(function () {
    $("#order_button").click(function (event) {
        $("#order_button").prop('disabled', true);
        $("#order_button").prop('value', 'Please Wait..');
        event.preventDefault();
        var delivery_data = $("#payment-form").serialize();

            $.ajax({
                type: 'POST',
                url:'payment',
                data: delivery_data,
                dataType: 'json',
                success: function (response) {
                    if (response.status == "success") {
                        window.location.href = "members/place_order?booking_no="+response.bookingNo;
                    } else {
                        $("#order_button").prop('disabled', false);
                        $("#order_button").prop('value', 'ORDER NOW');
                        $('#errors').show();
                        $('#error-msg').html(response.status);
                    }
                }
            });
    });
});