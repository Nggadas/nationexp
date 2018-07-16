var bookingID = [];

// Add booking id value to booking_no input
function addBookingID(id) {
    var inputID = '#' + id;

    if($(inputID).is(":checked")){
        bookingID.push(id);
        $('#booking_no').val(JSON.stringify(bookingID));
    }else{
        var index = bookingID.indexOf(id);
        delete bookingID[index];
        $('#booking_no').val(JSON.stringify(bookingID));
    }

    // console.log(bookingID);
    console.log($('#booking_no').val());
}

// Add booking id value to booking_no all input
function selectAll() {
    if($('#checkAll').is(":checked")){
        console.log("checked");
        var status = this.checked;
        $('.checkbox').each(function(){
            this.checked = status;
        });
    }else{
        console.log("unchecked");
    }
}