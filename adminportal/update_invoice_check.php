<?php
	if(empty($_GET['invoice_no'])){ ?>
        <script>
            window.location.href = "invoices";
        </script>
	<?php }else{
		$invoice_no = filter($connect,$_GET['invoice_no']);
	}

    // get data from database
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

	if (isset($_POST['submit'])) {
		$error = "";

		if (!empty($_POST['custom_status'])) {
			$custom_status = filter($connect,$_POST['custom_status']);
			$custom_status = strtolower(str_replace(' ', '_', $custom_status));
			$sql = "UPDATE invoices SET invoice_status='$custom_status' WHERE invoice_no='$invoice_no'";

			if (mysqli_query($connect, $sql)) {
                $invoice_status = $custom_status;?>

                <!-- Redirect back to update_status page -->
                <script>    
                    window.location.href = 'update_invoice?invoice_no=<?php echo $invoice_no ?>';
                </script>
                
			<?php } else {
				// $error = mysqli_error($connect);
				$error = "Error: Status could not be updated, try again.";
            }
            
			mysqli_close($connect);

		}elseif (!empty($_POST['new_status'])) {
			$new_status = filter($connect,$_POST['new_status']);
			$sql = "UPDATE invoices SET invoice_status='$new_status' WHERE invoice_no='$invoice_no'";

			if (mysqli_query($connect, $sql)) {
                $invoice_status = $new_status;?>

                <!-- Redirect back to update_status page -->
                <script>
                    window.location.href = 'update_invoice?invoice_no=<?php echo $invoice_no ?>';
                </script>
                
			<?php } else {
				// $error = mysqli_error($connect);
				$error = "Error: Status could not be updated, try again.";
            }
            
			mysqli_close($connect);
            
		}else {
			$error = "Status field required";
        }
	}

?>
