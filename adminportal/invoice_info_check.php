<?php
	if(empty($_GET['invoice_no'])){ ?>
        <script>
            window.location.href = "invoices";
        </script>
	<?php }else{
		$invoice_no = filter($connect,$_GET['invoice_no']);
	}

    // get data to use on page
    $sql_invoice = mysqli_query($connect,"SELECT * FROM `invoices` WHERE `invoice_no`='$invoice_no' ORDER BY id DESC");
    $row_invoice = mysqli_num_rows($sql_invoice);
    $invoice_data = mysqli_fetch_assoc($sql_invoice);

    // Get data for page information
    if ($row_invoice < 1) { ?>
        <script>
            window.location.href = "invoices";
        </script>
	<?php } else {
        $user_id = $invoice_data['user_id'];
        $full_name = $invoice_data['full_name'];
        $invoice_status = $invoice_data['invoice_status'];
        $email = $invoice_data['email'];
        $invoice_amount = $invoice_data['invoice_amount'];
    }

?>
