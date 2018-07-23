<?php
session_start();
include("../config.php");

   $id = $_SESSION['account_id'];
   
   $name = mysqli_real_escape_string($connect, $_POST['name']);
   $add = mysqli_real_escape_string($connect, $_POST['add']);
   $time = mysqli_real_escape_string($connect, $_POST['time']);
   $city = mysqli_real_escape_string($connect, $_POST['city']);
   $near = mysqli_real_escape_string($connect, $_POST['near']);

if (empty($name) || empty($add) || empty($time) || empty($time) || empty($time)) {
   echo "All the fields are required";
   }else {
      $sql = "UPDATE customer_pickup SET name = '$name', address = '$add', city = '$city', nearest_bustop = '$near', time = '$time' WHERE account_id = '$id'";
      $pick = mysqli_query($connect, $sql);

      echo "Your information has been updated!";
     }
?>
