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

    // console.log($('#booking_no').val());
}

// Select all checkboxes
$('#select-all').click(function(event) { 
    if(this.checked) {
        // Loop through each checkbox
        $(':checkbox').each(function() {
            this.checked = true;       
            if (this.id != 'select-all' && this.id != 'select-all2') {
                bookingID.push(this.id);
                $('#booking_no').val(JSON.stringify(bookingID));
            }            
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;  
            if (this.id != 'select-all' && this.id != 'select-all2') {
                var index = bookingID.indexOf(this.id);
                delete bookingID[index];
                $('#booking_no').val(JSON.stringify(bookingID));
            }                           
        });
    }
    // console.log($('#booking_no').val());
});

// Select all checkboxes
$('#select-all2').click(function(event) {  
    if(this.checked) {
        // Loop through each checkbox
        $(':checkbox').each(function() {
            this.checked = true;       
            if (this.id != 'select-all' && this.id != 'select-all2') {
                bookingID.push(this.id);
                $('#booking_no').val(JSON.stringify(bookingID));
            }            
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;  
            if (this.id != 'select-all' && this.id != 'select-all2') {
                var index = bookingID.indexOf(this.id);
                delete bookingID[index];
                $('#booking_no').val(JSON.stringify(bookingID));
            }                           
        });
    }
    // console.log($('#booking_no').val());
});