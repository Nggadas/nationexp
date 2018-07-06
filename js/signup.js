$(document).ready(function() {
    $("form").submit(function(event) {
         event.preventDefault();

         var fname = $('#fname').val();
         var lname = $('#lname').val();
         var phoneno = $('#phoneno').val();
         var email = $('#email').val();
         var pass = $('#pass').val();
         var confirmpass = $('#confirmpass').val();
         var captcha = $('#recap').val();
         var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	       var pattern_pass = /[^A-Za-z0-9]+/;

	       var a = (pattern.test(email));
	       var b = (pattern_pass.test(pass));


         $("#error_signup").load("sign.php", {
           fname:fname,
           lname:lname,
           email:email,
           phoneno:phoneno,
           pass:pass,
           captcha:captcha,
           b:b
    });
  });
});
