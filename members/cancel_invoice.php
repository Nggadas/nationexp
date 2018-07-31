<?php
session_start();
include('../config.php');

    $invoice_no = $_GET['invoice_no'];

    if(!empty($invoice_no)) {
        $sql =" UPDATE invoices SET invoice_status = 'cancelled' WHERE invoice_no = '$invoice_no'";
        $query = mysqli_query($connect, $sql);
        // $server = $_SERVER['PHP_SELF'];

        if($query) { ?>
            <script>
                window.location.href = "invoices";
            </script>
        <?php   
        }else {
            $error = "Could not cancel invoice ". mysqli_error($connect);
        }
    } else {
        $error = "Could not cancel invoice, invoice number doesn't exist";
    }
?>