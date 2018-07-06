$(document).ready(function () {
  $("#submit").click(function (event) {
    event.preventDefault();
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var phoneno = $("#phoneno").val();
    var email = $("#email").val();
    var pass = $("#pass").val();
    var confirmpass = $("#confirmpass").val();
    var recap = $(".g-recaptcha-response").val();
    var pattern_pass = /[^A-Za-z0-9]+/;
    var b = (pattern_pass.test(pass));
      console.log(fname);



      $.ajax({
        type: 'POST',
        url:"sign",
        data: {fname:fname,lname:lname,phoneno:phoneno,email:email,pass:pass,b:b,recap:recap,confirmpass:confirmpass},
        success: function (response) {
          if (response == "success") {
               window.location.href ='congrats.html';
        }else {
          $("#error_signup").html(response);
          $("#invalid-login").show();
        }
       }
      });
    //}
  });

});
