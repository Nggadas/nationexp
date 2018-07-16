<?php

if (isset($_POST['submit'])) {
    $error = "";
    $old_current_password = $_POST['current_password'];
    $old_new_password = $_POST['new_password'];
    $old_confirm_password = $_POST['confirm_password'];
    $old_admin_pin = $_POST['admin_pin'];

    if (empty($_POST['current_password']) || empty($_POST['new_password']) || empty($_POST['confirm_password']) || empty($_POST['admin_pin'])) {
        $error = "All fields required";
    } else {
        $current_password = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['current_password'])));
        $new_password = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['new_password'])));
        $confirm_password = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['confirm_password'])));
        $admin_pin = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['admin_pin'])));

        $query_admin = mysqli_query($connect, "SELECT * FROM `smart_admin` WHERE `password`='$current_password' ORDER BY ID DESC LIMIT 1");
        $row_admin = mysqli_num_rows($query_admin);
        $val_admin = mysqli_fetch_assoc($query_admin);
        $secret_pin = $val_admin['admin_pin'];
        $pass = $val_admin['password'];
        $uppercase = preg_match('@[A-Z]@', $new_password);
        $lowercase = preg_match('@[a-z]@', $new_password);
        $number    = preg_match('@[0-9]@', $new_password);

        if($row_admin > 0){
        
            if(!$uppercase || !$lowercase || !$number || strlen($new_password) < 8) {
                $error = "New password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters";
            }else {
                if ($new_password != $confirm_password){
                    $error = "Confirm password does not match the new password";
                }else{
                    if ($admin_pin != $secret_pin) {
                        $error = "Admin pin does not match";
                    }else{
                        $sql = "UPDATE smart_admin SET password='$new_password' WHERE admin_id=010101 ";

                        if (mysqli_query($connect, $sql)) {
                            $_SESSION['success'] = "Password changed successfully!"; ?>
                            <script>
                                window.location.href = 'index';
                            </script>
                        <?php } else {
                            $error = mysqli_error($connect);
                            // $error = "Error: Could not change password.";
                        }
                        
                        mysqli_close($connect);
                    }
                }
            }
        }else{
            $error = "Current password does not match with admin password" . ' A ' . $pass . ' C ' . $current_password;
        }
    }
}