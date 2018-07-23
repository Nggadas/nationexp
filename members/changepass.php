<?php
session_start();
include("../config.php");

$id = $_SESSION['account_id'];

   $old = mysqli_real_escape_string($connect, $_POST['old']);
   $pass = mysqli_real_escape_string($connect, $_POST['newpass']);
   $confirm = mysqli_real_escape_string($connect, $_POST['confirm']);
   $pattern = '/[^A-Za-z0-9]+/';

   $query_pass = mysqli_query($connect, "SELECT * FROM `register` WHERE account_id = '$id' AND password = '$old'");
   $row_pass = mysqli_num_rows($query_pass);
if (empty($old) || empty($pass) || empty($confirm)) {
  echo "All the fields are required!";
} elseif ($row_pass == 0) {
  echo "Your current password is incorrect!";
} elseif (strlen($pass) < 8) {
  echo "Password must be 8 characters or more!";
} elseif (!(preg_match($pattern, $pass))) {
  echo "Password must contain at least one special character, capital letter and number!";
} elseif ($pass != $confirm) {
  echo 'Your passwords does not match!';
} else {
  $sql = "UPDATE register SET password = '$pass' WHERE account_id = '$id'";
  $passnew = mysqli_query($connect, $sql);

  echo "Your password has been updated!";
}


?>
