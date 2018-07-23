$(document).ready(function () {
  $("#submit").click(function (event) {
    event.preventDefault();
    var name = $("#name").val();
    var add = $("#address").val();
    var time = $("#time").val();
    var city = $("#city").val();
    var near = $("#near").val();


      $.ajax({
        type: 'POST',
        url:"pickup",
        data: {name:name, add:add, time:time, city:city, near:near},
        success: function (response) {
          if (response == "All the fields are required!") {
            $("#successmsg").hide();
            $("#result").html(response);
            $("#errormsg").show();
          } else {
            $("#errormsg").hide();
            $("#response").html(response);
            $("#successmsg").show();
        }
       }
      });
  });

});
