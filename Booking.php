<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./login.css">
    <link rel="preload" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </noscript>

    <link rel="preload" href="https://fonts.googleapis.com/css?family=Barlow&display=swap" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow&display=swap"></noscript>

    <title> Booking Page</title>
</head>

<body style="background-color:blanchedalmond" >
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#"><img src="./Assets/logo.jpg" style="height:40px"></a>
        <a class="navbar-brand" href="home.php">
            <span>Radisson Hotel</span>
        </a>
    </nav>

    <div class="container-fluid" style="background-image: url('./Assets/Room2.jpg');background-repeat: no-repeat;background-position: center;  background-size:cover; ">
        <div class="row">
            <div class="col-12 col-lg-4"></div>
            <div class="col-12 col-lg-4">
            <form action="reservation.php" method="POST">
                <div class="login-page">
                    <div style="padding-bottom:20px; padding-right:14px;">
                        <h2>Book    Your   Stay</h2>
                    </div>
                    <div style="padding:20px;">
                        <strong style="font-size:18px; color:black">Customer ID</strong>
                        <input id="custid" placeholder="Customer ID" type="number" name="custID" style="background-color:blanchedalmond" >
                    </div>
                    <div style="padding:20px;">
                        <strong style="font-size:18px; color:black">CheckIn-Date</strong>
                        <input id="Checkin" placeholder="CheckIn-Date" type="date" name="checkin" style="background-color:blanchedalmond" >
                    </div>
                    <div style="padding:20px;">
                        <strong style="font-size:18px; color:ghostwhite">CheckOut-Date</strong>
                        <input id="Checkout" placeholder="CheckOut-Date" type="date" name="checkout" style="background-color:blanchedalmond">
                    </div>
                    <div style="padding:20px;">
                        <strong style="font-size:18px; color:black">Number Of People</strong>
                        <input id="Noofppl" placeholder="Number Of People" type="number" name="nopeople" style="background-color:blanchedalmond">
                    </div>
                    <div style="padding:20px;">
                        <strong style="font-size:18px; color:black">Number Of Rooms</strong>
                        <input id="Noofrooms" placeholder="Number Of Rooms" type="number" name="noroom" style="background-color:blanchedalmond">
                    </div>
                    <div style="padding-top:40px; padding-bottom:20px">
                        <button type="submit" class="signup-button" style="background-color:blanchedalmond"> Book </button>
                    </div>
                    </form>
</div>
                    <div class="col-12 col-lg-4"></div>
                    <div >
                    <a href="Details.php" style="color:black;"><b><u>Click here to view your details if you have already booked your rooms!</u></b></a>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>