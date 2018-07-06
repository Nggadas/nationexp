$(document).ready(function () {
  $("#submit").click(function (event) {
    event.preventDefault();
    var trackingNo = $("#trackNo").val();




      $.ajax({
        type: 'POST',
        url:"tracken",
        data: {trackingNo:trackingNo},
        success: function (response) {
          if (response == "success") {
               window.location.href = 'track1?id='+trackingNo+'';
        }else {
          $("#error_signup").html(response);
          $("#invalid-login").show();

        }
        }
      });
    //}
  });

});
