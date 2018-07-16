<?php
	if(!empty($_GET['id'])){
		$sta =trim($_GET['id']);
		$data  = htmlentities($sta);
		$account_id = $data;	
	}else{ ?>
		<script>
            window.location.href = "customers";
        </script>
	<?php }

	if($account_id){
        // Check if user exists
		$sql_user = mysqli_query($connect,"SELECT * FROM `register` WHERE `account_id`='$account_id' ORDER BY id DESC");
        $row_user = mysqli_num_rows($sql_user);
        $user = mysqli_fetch_assoc($sql_user);

        if ($row_user < 1) { ?>
            <script>
                window.location.href = "customers";
            </script>
        <?php }

        // Get orders placed by user
		$sql = mysqli_query($connect,"SELECT * FROM `parcel_details` WHERE `booking_no`!='' AND `account_id`='$account_id' ORDER BY id DESC");
        $row_parcel = mysqli_num_rows($sql);

        $u_first_name = $user['first_name'];
        $u_last_name = $user['sur_name'];
        $email = $user['email'];
        $phone_no = $user['phone_no'];
        $full_name = $u_first_name . ' ' . $u_last_name;
    }
    
    if(isset($_POST['submit'])) {

        if (!empty($_POST['booking_no'])) {
            $invoice_amount;
            $date = date('d-M-Y');
            $random_no = rand(100000,999999);
            $invoice_no = "INV" . rand(100000,999999);
            $bookingID = json_decode($_POST['booking_no'], true);

            // Calculate total of invoice
            foreach ($bookingID as $key => $value) { 
                if (!empty($value)) {
                    $sql = mysqli_query($connect,"SELECT * FROM `parcel_details` WHERE `booking_no`='$value' ORDER BY id DESC LIMIT 1");
                    $row_data = mysqli_fetch_assoc($sql);

                    $price = (int)$row_data['value_of_contents'];
                    $invoice_amount += $price;
                }
            }

            // Add invoice to database
            foreach ($bookingID as $key => $value) {
                if (!empty($value)) {
                    $sql_invoice = "INSERT INTO `invoices` (`user_id`,`email`,`full_name`,`invoice_no`,`invoice_amount`,`booking_no`,`date`) 
                                    VALUES ('$account_id','$email','$full_name','$invoice_no','$invoice_amount','$value','$date')";
                                    
                    if (!mysqli_query($connect, $sql_invoice)) {
                        // $error = mysqli_error($connect);
                        $error = "Error: Invoice was not created for " . $value . ".";
                    } 
                }
            }
            
            if (empty($error)) { ?>
                <script>
                    var bookingID = <?php echo json_encode($bookingID); ?>;
                    window.location.href = "print_invoice?booking_id="+bookingID+"&invoice_no=<?php echo $invoice_no ?>&account_id=<?php echo $account_id ?>";
                </script>
            <?php } 
        
        } else {
            $error = "No orders where selected";
        }

    }
    
?>