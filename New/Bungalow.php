<!DOCTYPE html>

<?php
session_start();
?>

<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bungalow.css" type="text/css">
    <title>Bungalow</title>
    <link rel="icon" type="image" href="https://www.bluehomepm.com/wp-content/uploads/2017/09/BlueHomePM-Favicon.png">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#abc">
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="First Pg.html">Home</a>
               
            </div>
            <div class="collapse navbar-collapse" id="abc">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="SignupForm.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                    </li>
                    <li><a href="LoginForm.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li>
                    <li><a href="LoginForm.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="content">
        <div class="sidenav">
            <div style=" color : green; font-size : 30px ; background : white ; border-radius : 0px 30px 30px 0px ;">
            <p> <b> Welcome</p>
            <p> <?php echo  $_SESSION['username']; ?></p>
</div>
            <h1>Bungalows</h1>
            <a href="#navigate">Robbin Villa</a>
            <a href="#navigate1">Sun Villa</a>
            <a href="#navigate2">Duplex Villa</a>
            <a href="#navigate3">Sunburn</a>
            </div>

            <div class="main">
           
                <div class="jumbotron" id="navigate">
                    <h2>Robin Villa</h2>
                    <div class="thumbnails">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="Images/6.jpg" style="border-radius: 20px;">
                                    <p>2 BHK</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="Images/11.jpg" style="border-radius: 20px;">
                                    <p>Parking</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="Images/13.jpg" style="border-radius: 20px;">
                                    <p>Swiming Pool</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="Images/15.jpg" style="border-radius: 20px;">
                                    <p>Home Garden</p>
                                </div>
                            </div>
                        </div>
                        <h4> <a href="AppointmentForm.html">Get your appointment now.</a></h4>
                    </div>
                </div>

                <div class="jumbotron" id="navigate1">
                    <h2>Sun Villa</h2>
                    <div class="thumbnails">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="Images/17.jpg" style="border-radius: 20px;">
                                    <p>3 BHK</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="Images/19.jpg" style="border-radius: 20px;">
                                    <p>Spacious Balcony</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="Images/21.jpg" style="border-radius: 20px;">
                                    <p>Best Interiors</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="Images/23.jpg" style="border-radius: 20px;">
                                    <p>Private Garage</p>
                                </div>
                            </div>
                        </div>
                        <h4> <a href="AppointmentForm.html">Get your appointment now.</a></h4>
                    </div>

                </div>

                <div class="jumbotron" id="navigate2">
                    <h2>Duplex Villa</h2>
                    <div class="thumbnails">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="Images/25.jpg" style="border-radius: 20px;">
                                    <p>3.5 BHK</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="Images/27.jpg" style="border-radius: 20px;">
                                    <p>Parking</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="Images/13.jpg" style="border-radius: 20px;">
                                    <p>Swiming Pool</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="Images/29.jpg" style="border-radius: 20px;">
                                    <p>Spacious Rooms</p>
                                </div>
                            </div>
                        </div>
                        <h4> <a href="AppointmentForm.html">Get your appointment now.</a></h4>
                    </div>
                </div>
                <div class="jumbotron" id="navigate3">
                    <h2>Sunburn</h2>
                    <div class="thumbnails">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="Images/31.jpg" style="border-radius: 20px;">
                                    <p>2.5 BHK</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="Images/33.jpg" style="border-radius: 20px;">
                                    <p>Garden</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="Images/35.jpg" style="border-radius: 20px;">
                                    <p>Chilling Area</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="Images/37.jpeg" style="border-radius: 20px;">
                                    <p>Semi Furnished</p>
                                </div>
                            </div>
                        </div>
                        <h4> <a href="AppointmentForm.html">Get your appointment now.</a></h4>
                    </div>
                </div>
            </div>
        </div>

    <footer class="footer-dark">
        <div class="col-sm-6 col-md-3">
            <a href="#">
                <h3> </h3>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a href="#">
                <h3>Contact Us</h3>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a href="#">
                <h3>Services</h3>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a href="#">
                <h3>FAQ's</h3>
            </a>
        </div>

        <div class="col item social" style="padding-left: 400px; padding-top: 70px;">
            <a href="#"><i class="icon ion-social-twitter"><img src="Images/icon3.png"></i></a>
            <a href="#"><i class="icon ion-social-facebook"><img src="Images/icon2.png"></i></a>
            <a href="#"><i class="icon ion-social-instagram"><img src="Images/icon5.png"></i></a>
            <a href="#"><i class="icon ion-social-snapchat"><img src="Images/icon4.png"></i></a>
        </div>

        <div>
            <p class="copyright">Rent a home © 2021</p>
        </div>
    </footer>