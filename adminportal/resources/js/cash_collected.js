$('#cash_toggle').hide();
$('#cash_option').hide();
$('#amount_collected').hide();

$('#select_status').change(function() {
    
    //toggle cash options
    if ($(this).val() === 'delivered') {
        if($('#cash_toggle').css('display') == 'none'){ 
            $('#cash_toggle').css('display', 'inline-block');
            $('#cash_toggle').show();

        } else {
            $('#cash_toggle').css('display', 'none');
            $('#cash_toggle').hide();
        }
    }else{
        $('#cash_toggle').hide();
    }
});

$("input:radio[name=toggle_options]").click(function() {
    if ($(this).val() == 'yes') {
        $('#cash_options').css('display', 'inline-block');
        $('#cash_options').show();

    } else {
        $('#cash_options').css('display', 'none');
        $('#cash_options').hide();
        $('#amount_collected').css('display', 'none');
        $('#amount_collected').hide();
    }
    
});

$('#cash_options').change(function() {
    //toggle amount collected
    if ($('#cash_collected').val() != '') {
        if($('#amount_collected').css('display') == 'none'){ 
            $('#amount_collected').css('display', 'inline');
            $('#amount_collected').show();
        }
    }
});