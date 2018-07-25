$(document).ready(function () {
    $("#order_button").click(function (event) {
      event.preventDefault();
      var delivery_data = $("#payment-form").serialize();
      console.log(delivery_data);  

        $.ajax({
            type: 'POST',
            url:'payment',
            data: delivery_data,
			dataType: 'json',
            success: function (response) {
                console.log(response);
                if (response.success == "success") {
                    $('#errors').show();
                    $('#error-msg').html(response.success);
                    // winndow.location.href = "members/place_order/response.bookingNo";
                } else {
                    $('#errors').show();
                    $('#error-msg').html(response.success);
                }
            }
        });
    });
});