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
        url:"edit",
        data: {name:name, add:add, time:time, city:city, near:near},
        success: function (response) {
          if (response == 'Your information has been updated!') {
          $("#submit").hide();
          $("#pickuplocation").hide();
          $("#response").html(response);
          $("#pickup-loc").show();
        } else {
          $("#res").html(response);
          $("#pickuplocation").show();
        }
        }
      });
  });

});
