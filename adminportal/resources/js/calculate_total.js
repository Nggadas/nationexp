// Calculate total
$('#delivery_cost').keyup(function () {
    var delivery_cost = parseFloat($("#delivery_cost").val()) || 0;
    var insurance_fee = parseFloat($("#insurance_fee").val()) || 0;
    var pickup_cost = parseFloat($("#pickup_cost").val()) || 0;
    total =  (delivery_cost + insurance_fee + pickup_cost);
    total =  Math.ceil(total);
    $("#total_cost").val(total);
});

$('#insurance_fee').keyup(function () {
    var delivery_cost = parseFloat($("#delivery_cost").val()) || 0;
    var insurance_fee = parseFloat($("#insurance_fee").val()) || 0;
    var pickup_cost = parseFloat($("#pickup_cost").val()) || 0;
    total =  (delivery_cost + insurance_fee + pickup_cost);
    total =  Math.ceil(total);
    $("#total_cost").val(total);
});

$('#pickup_cost').keyup(function () {
    var delivery_cost = parseFloat($("#delivery_cost").val()) || 0;
    var insurance_fee = parseFloat($("#insurance_fee").val()) || 0;
    var pickup_cost = parseFloat($("#pickup_cost").val()) || 0;
    total =  (delivery_cost + insurance_fee + pickup_cost);
    total =  Math.ceil(total);
    $("#total_cost").val(total);
});