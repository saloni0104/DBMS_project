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
            <div class="col-12 col-lg-4"></div>
            <div class="col-12 col-lg-4">
                <div class="login-page">
                <div style="color:purple; text-align:center; font-size:20px; padding-top:40px;"><b>
                            Thankyou for Booking!</b></div>
                    <div style="color:purple; text-align:center; font-size:15px; padding-top:40px;">
                        Enter your CustID
                    </div>
                    <form action="custinfo.php" method="POST">
                        <div>
                            <input id="cust" placeholder="CustomerID" type="number" name="custID"
                                style="background-color: blanchedalmond;">
                        </div>
                        <div style="padding-top:40px; padding-bottom:20px">
                        <button type="submit" class="signup-button" style="background-color:blanchedalmond"> Submit </button>
                    </div>
                    </form>
                   
                    <div style="padding-top:40px;">
                            <a style="color:purple; text-align:center; font-size:15px; padding-top:40px;" href="home.php">Back to home page</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>