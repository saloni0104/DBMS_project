<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'dbms');

$cust = $_POST['custID'];
$name = $_POST['name'];
$email = $_POST['emailaddress'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$room= $_POST['noroom'];
$people= $_POST['nopeople'];

// $s = "SELECT * FROM customer where Name= '$name' && Email= '$email' && Password= '$pass'";

$s="SELECT CustID, Name,email,checkin,checkout,noofpeople,noofroom FROM customer Natural JOIN reservation where CustID='$cust'"; 
//$s = "INSERT INTO customer values($cust,'$email','$name','$pass')";  


$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num!=0){
    $row= mysqli_fetch_array($result);
    $_SESSION['cust']=$row['CustID'];
    $_SESSION['name']=$row['Name'];
    $_SESSION['email']=$row['email'];
    $_SESSION['checkin']=$row['checkin'];
    $_SESSION['checkout']=$row['checkout'];
    $_SESSION['nopeople']=$row['noofpeople'];
    $_SESSION['noroom']=$row['noofroom'];


    header('location:Information.php');
}else{
    header('location:Details.php');
}

/*
$num = mysqli_num_rows($result);
if($num!=0){
    $_SESSION['user']=$name;
    $_SESSION['id']=$name;
    
}else{
    header('location:index.php');
}*/

mysqli_close($con);
?>
