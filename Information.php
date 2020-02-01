<?php

session_start();
if(!isset($_SESSION['cust'])) {
    header('location: Details.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preload" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </noscript>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->

    <link rel="preload" href="https://fonts.googleapis.com/css?family=Barlow&display=swap" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"></noscript>
    <link rel="stylesheet" href="./login.css">

    <title>Details</title>
</head>

<body
    style="background-image: url('./Assets/details.jpeg');background-repeat: no-repeat;background-position: center;  background-size:cover;">

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#"><img src="./Assets/logo.jpg" style="height:40px"></a>
        <a class="navbar-brand" href="home.php">
            <span>Radisson Hotel</span>
        </a>

    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12"></div>
            <div class="col-lg-12">
                <div class="login-page">
                    <div style="color:purple; text-align:center; font-size:20px; padding-top:40px;"><b>
                            Please find your details below</b></div>
                            
                        <div style="padding:20px;">
                        <div class="col-12 col-lg-12" >
                        <strong style="font-size:18px; color:black">Customer ID</strong>
                        </div>
                        <div class=" col-12 col-lg-12" >
                        <?php echo"<font color='black'>". $_SESSION['cust']."</font>"; ?> <br>
                        </div>
                        </div>
                       

                        <div style="padding:20px;">
                        <div class="col-12 col-lg-12" >
                        <strong style="font-size:18px; color:black">Name</strong>
                        </div>
                        <div class=" col-12 col-lg-12" >
                        <?php echo"<font color='black';>". $_SESSION['name']."</font>"; ?> <br>
                        </div>
                        </div>


                        <div style="padding:20px;">
                        <div class="col-12 col-lg-12" >
                        <strong style="font-size:18px; color:black">Email</strong>
                        </div>
                        <div class="col-12 col-lg-12">
                        <?php echo"<font color='black'>". $_SESSION['email']."</font>"; ?> <br>
                        </div>
                        </div>

                        
                        <div style="padding:20px;">
                        <div class="col-12 col-lg-12" >
                        <strong style="font-size:18px; color:black">Check-In</strong>
                        </div>
                        <div class="col-12 col-lg-12">
                        <?php echo"<font color='black'>". $_SESSION['checkin']."</font>"; ?> <br>
                        </div>
                        </div>

                        <div style="padding:20px;">
                        <div class="col-12 col-lg-12" >
                        <strong style="font-size:18px; color:black">Check-Out</strong>
                        </div>
                        <div class="col-12 col-lg-12" >
                        <?php echo"<font color='black'>". $_SESSION['checkout']."</font>"; ?> <br>
                        </div>

                        <div style="padding:20px;">
                        <div class="col-12 col-lg-12" >
                        <strong style="font-size:18px; color:black">No. of People</strong>
                        </div>
                        <div class="col-12 col-lg-12" >
                        <?php echo"<font color='black'>". $_SESSION['nopeople']."</font>"; ?> <br>
                        </div>
                        </div>

                        <div style="padding:20px;">
                        <div class="col-12 col-lg-12" >
                        <strong style="font-size:18px; color:black">No. of Room</strong>
                        </div>
                        <div class="col-12 col-lg-12" >
                        <?php echo"<font color='black'>". $_SESSION['noroom']."</font>"; ?> <br>
                        </div>
                        </div>
                        

                    <div style="color:purple; text-align:center; font-size:20px; padding-top:40px;"><b>
                            Thankyou</b></div>
                    <div style="padding-top:40px;">
                            <a style="color:purple; text-align:center; font-size:15px; padding-top:40px;" href="home.php">Back to home page</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>