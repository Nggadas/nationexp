$(document).ready(function(){
    $("#form").on('submit', function(e){
      e.preventDefault();

      var data = $('#fname').val();

      alert(data);
      $.ajax({
            type: "POST",
            url: "james.php",
            data: {first_name:data},
            dataType: "JSON",
            success: function(data) {
             alert(data);
            },
            error: function(err) {
            alert(err);
            }
        });

    });

})
