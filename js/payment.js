$(document).ready(function () {
    $("#order_button").click(function (event) {
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
                        $('#errors').show();
                        $('#error-msg').html(response.status);
                    }
                }
            });
    });
});