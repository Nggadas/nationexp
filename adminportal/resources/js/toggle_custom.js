$('#custom_status').hide();
// $('#submit').attr('disabled', true);

$('#select_status').change(function() {
    //toggle submit button
    // $('#submit').attr('disabled', false);
    
    //toggle custom input
    if ($(this).val() === 'toggle_custom') {
        if($('#custom_status').css('display') == 'none'){ 
            $('#custom_status').css('display') == 'inline';
            $('#custom_status').show();

        } else {
            $('#custom_status').css('display') == 'none';
            $('#custom_status').hide();
        }
    }else{
        $('#custom_status').hide();
    }
});