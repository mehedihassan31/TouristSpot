<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "amarproshno";

$connect = mysqli_connect($hostname, $username, $password, $db);
$query = "SELECT * FROM `name`";
$query2 = "SELECT * FROM `name`";
$result1 = mysqli_query($connect, $query);
$result2 = mysqli_query($connect, $query2);

if (isset($_GET['from']) && isset($_GET['to']))
{
    $to= $_GET['to'];
    $from= $_GET['from'];

    $details_query= "SELECT* FROM farecost WHERE cfrom='".$from."' AND cto='".$to."'";
    $details = mysqli_query($connect, $details_query);
}
else{
    $details=array();
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


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/blog-home.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">



    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <style>

    </style>



</head>

<body >

<nav style="background:#1b3b48" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

        <div >
            <a class="navbar-brand" style="color:white;margin-right:100px;margin-bottom: 10px;font:italic bold 22px Georgia, serif;" href="index.php"><b >TOURIST SPOT</b></a>

        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="Question/question.php">All Places</a>
                </li>
                <li>
                    <a href="gallery.php">Places to Go</a>
                </li>

                <li>
                    <a href="#"> Fare Query</a>
                </li>
                <li>
                    <a href="contact/contact.html">Contact</a>
                </li>



            </ul>




        </div>
    </div>

</nav>


<div class="container">

    <div class="row">

        <div class="col-md-8">


      <form  method="get" >
<label>From</label>
          <select name="from">

              <?php while($row1 = mysqli_fetch_array($result1)):;?>

                  <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

              <?php endwhile;?>

          </select>

          <label>To</label>


          <select name="to">

              <?php while($row1 = mysqli_fetch_array($result2)):;?>

                  <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

              <?php endwhile;?>

          </select>
          <input type="submit" value="Submit">
      </form>








        </div>


    </div>
    <div style="background: yellow ">
    <?php foreach($details as $key =>$item): ?>
    <div style="margin-left: 20%" class="row">
        <p>By bus AC Cost : <?php echo $item['ACcost']; ?></p>
        <p>By bus non-AC Cost : <?php echo $item['NonAccost']; ?></p>
        <p>By plane Cost : <?php echo $item['air']; ?></p>
    </div>
    <?php endforeach ?>
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
                            This study was launched as a response to the lack of studies on how Tours strategies are actually used in destinations. The study was directed to tours and travel management system and the aim was to explore Tour and Travel packages.</p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="footer-menu">
                        <h4>Site Map</h4>
                        <ul>
                            <li><a href="index.php">Home</a></li>
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
                                    info@groupf.com
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
                <h5>Copyright © 2018 <a target="_new" href="">Group:F</a></h5>
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
