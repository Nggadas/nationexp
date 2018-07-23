$(document).ready(function () {
  $("#submit").click(function (event) {
    event.preventDefault();
    var old = $("#old").val();
    var newpass = $("#newpass").val();
    var confirm = $("#confirm").val();

      $.ajax({
        type: 'POST',
        url:"changepass",
        data: {old:old, newpass:newpass, confirm:confirm},
        success: function (response) {
          if (response == "Your password has been updated!") {
            $("#errormsg").hide();
            $("#response").html(response);
            $("#successmsg").show();
          } else {
            $("#successmsg").hide();
            $("#result").html(response);
            $("#errormsg").show();
            }
       }
      });
  });

});
