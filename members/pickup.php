<?php
session_start();
include("../config.php");

$id = $_SESSION['account_id'];

   $name = mysqli_real_escape_string($connect, $_POST['name']);
   $add = mysqli_real_escape_string($connect, $_POST['add']);
   $time = mysqli_real_escape_string($connect, $_POST['time']);
   $city = mysqli_real_escape_string($connect, $_POST['city']);
   $near = mysqli_real_escape_string($connect, $_POST['near']);

   $query_pick = mysqli_query($connect, "SELECT * FROM `customer_pickup` WHERE account_id = '$id' ");
   $row_pick = mysqli_num_rows($query_pick);


if (empty($name) || empty($add) || empty($city) || empty($near) || empty($time)) {
       echo "All the fields are required!";
} elseif ($row_pick > 0) {
      $sql = "UPDATE customer_pickup SET name = '$name', address = '$add', city = '$city', nearest_bustop = '$near', time = '$time' WHERE account_id = '$id'";
      $pick = mysqli_query($connect, $sql) or die("Errorn : ".mysqli_error());

       echo "Your information has been updated!";
} else {
      $sqln= "INSERT INTO `customer_pickup` (`name`, `address`, `time`, `city`, `nearest_bustop`, `account_id`) VALUES ('".$name."', '".$add."', '".$time."', '".$city."', '".$near."', '".$id."')";
      $pickuploc = mysqli_query($connect, $sqln) or die("Errorn : ".mysqli_error());

       echo "Your information has been saved!";
     }
?>
