
<?php
  session_start();
  if(isset($_SESSION['Message'])){

      echo $_SESSION['Message'];
      unset($_SESSION['Message']);
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TOURIST SPOT</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">

    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <link href="../../css/blog-home.css" rel="stylesheet">
    <link href="../../style.css" rel="stylesheet">
    <link href="../../signup2/signup2.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


</head>


<body>
<nav style="background:#1b3b48" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color:white;margin-right:100px;margin-bottom: 10px;font:italic bold 22px Georgia, serif;" href="#"><b >TOURIST SPOT</b></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">

                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Sign-up</a></li>
            </ul>
        </div>

    </div>

</nav>





<div class="container1">

    <div class="row">

        <div class="col-md-8">


            <div class="testbox">
                <h1>Registration</h1>

                <form action="store.php" method="post">
                    <hr>

                    <hr>
                    <label id="icon" for="name"><i class="icon-user"></i></label>
                    <input type="text" name="username" placeholder="Username" required/><br>
                    <label id="icon" for="name"><i class="icon-envelope "></i></label>
                    <input type="email" name="email" placeholder="Email " required/><br>

                    <label id="icon" for="name"><i class="icon-shield"></i></label>
                    <input type="password" name="password"  placeholder="Password" required/>

                    <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
                    <br>

                    <a href="login.php" class="button">Log in</a>

                    <input style="font-size: 14px;
    font-weight: 600;
    color: white;
    padding: 6px 25px 20px 20px;
    margin: 10px 8px 20px 0px;
    display: inline-block;
    float: right;
    text-decoration: none;
    width: 90px; height: 27px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background-color: #3a57af;
    -webkit-box-shadow: 0 3px rgba(58,87,175,.75);
    -moz-box-shadow: 0 3px rgba(58,87,175,.75);
    box-shadow: 0 3px rgba(58,87,175,.75);
    transition: all 0.1s linear 0s;
    top: 0px;
    position: relative;" type="submit"  value="Sign up"/>

                </form>
            </div>



        </div>

    </div>

    <hr>


</div>
</div>
</div>




<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row footer-top-inner">
                <div class="col-sm-3">
                    <div class="footer-text">
                        <h4>About us</h4>
                        <p>
                            An art exhibition is traditionally the space in which art objects (in the most general sense) meet an audience.
                        </p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="footer-menu">
                        <h4>Site Map</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-address">
                        <h4>Our Address</h4>
                        <ul>
                            <li>
                                <a  class="house-ico" href="#">
                                    Mirpur,Mirpur 2,1216,Dhaka, Bangladesh
                                </a>
                            </li>
                            <li>
                                <a class="phone-ico" href="#">
                                    0123 4567890
                                </a>
                            </li>
                            <li>
                                <a class="msge-ico" href="#">
                                    info@group1.com
                                </a>
                            </li>
                            <li>
                                <a class="fax-ico" href="#">
                                    FAX: (000) 123-333
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="col-xs-12">
                <h5>Copyright © 2018 <a target="_new" href="">Group:1</a></h5>
            </div>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="owl.carousel.1/owl.carousel.min.js"></script>
<script src="nivo.slider/nivo.slider.js"></script>
<script src="js/wow.min.js"></script>
<script type="text/javascript" src="js/isotope.pkged.min.js"></script>

<script src="js/main.js"></script>


</footer>


<script src="js/jquery.js"></script>

<script src="js/bootstrap.min.js"></script>


</body>


</html>
