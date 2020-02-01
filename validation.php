<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'dbms');

$email = $_POST['emailaddress'];
$pass = $_POST['pass'];

$s = "SELECT * FROM customer where Email= '$email' && Password= '$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num!=0){
    //$_SESSION['user']=$name;
    //$_SESSION['id']=$name;
    header('location:Booking.php');
}else{
    header('location:login.php');
}
mysqli_close($con);
?>
