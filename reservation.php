<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'dbms');

$cust = $_POST['custID'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$room= $_POST['noroom'];
$people= $_POST['nopeople'];

// $s = "SELECT * FROM customer where Name= '$name' && Email= '$email' && Password= '$pass'";
$s = "INSERT INTO reservation values($cust,'$checkin','$checkout','$people','$room')";  
$result = mysqli_query($con,$s);
header('location:Details.php');
mysqli_close($con);
?>