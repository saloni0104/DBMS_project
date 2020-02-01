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

    <title>Signup</title>
</head>

<body style="background-image: url('./Assets/signup.jpeg');background-repeat: no-repeat;background-position: center;  background-size:cover;">

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#"><img src="./Assets/logo.jpg" style="height:40px"></a>
        <a class="navbar-brand" href="home.php">
            <span>Radisson Hotel</span>
        </a>
        
    </nav>
    
    <div class="container-fluid" >
        <div class="row">
            <div class="col-12 col-lg-4"></div>
            <div class="col-12 col-lg-4">
                <div class="login-page">
                    <div>
                        <h3>Sign Up</h3>
                    </div>
                    <form action="signup.php" method="POST">
                    <div>
                        <input id="cust" placeholder="CustomerID" type="number" name="custID" style="background-color: blanchedalmond;">
                    </div>
                    <div >
                        <input id="name" placeholder="Name" type="text" name="name" style="background-color: blanchedalmond;">
                    </div>
                    <div >
                        <input id="email" placeholder="Email" type="email" name="emailaddress" style="background-color: blanchedalmond;">
                    </div>
                    <div>
                        <input id="passwd" placeholder="Password" type="password" name="password" style="background-color: blanchedalmond;">
                    </div>
                    <div style="padding-top:60px;">
                        <button type="submit" class="signup-button" value="Signup" style="background-color: blanchedalmond;"> Sign Up</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-4"></div>
            <div class="col-12 col-lg-4 link">
                    <a href="login.php" style="color:black;"><b><u>Already have an account? Login</u></b></a>
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