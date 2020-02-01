<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'dbms');

$cust = $_POST['custID'];
$name = $_POST['name'];
$email = $_POST['emailaddress'];
$pass = $_POST['password'];

// $s = "SELECT * FROM customer where Name= '$name' && Email= '$email' && Password= '$pass'";
$s = "INSERT INTO customer values($cust,'$email','$name','$pass')";  
$result = mysqli_query($con,$s);
header('location:Booking.php');
mysqli_close($con);
?>
