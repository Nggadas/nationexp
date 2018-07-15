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
        $full_name = $u_first_name . ' ' . $u_last_name;
	}
    
    
    if (isset($_POST['submit'])) {
        $error = "";
        $old_email = $_POST['email'];
        $old_full_name = $_POST['full_name'];
        $old_status = $_POST['status'];

        if (empty($_POST['email']) || empty($_POST['full_name']) || empty($_POST['status'])) {
            $error = "All fields required";
        }else{

            $email = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['email'])));
            $full_name = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['full_name'])));
            $invoice_no = rand(100000,999999);
            $status = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['status'])));

            $sql = "INSERT INTO invoices (email,full_name,invoice_no,invoice_status) VALUES ('$email','$full_name','$invoice_no','$status')";

            if (mysqli_query($connect, $sql)) {
                $_SESSION['success'] = "Invoice created successfully!"; ?>
                <script>
                    window.location.href = 'invoices';
                </script>
            <?php } else {
                // $error = mysqli_error($connect);
                $error = "Error: Invoice was not created.";
            }
            
            mysqli_close($connect);
        }
    }
    
?>