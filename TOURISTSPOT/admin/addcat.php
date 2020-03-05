<?php

$db = mysqli_connect("localhost", "root", "", "amarproshno");

$msg = "";

if (isset($_POST['upload'])) {

    $image = $_FILES['image']['name'];
    $title= mysqli_real_escape_string($db, $_POST['title']);
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    $target = "images/".basename($image);

    $sql = "INSERT INTO images (image,title, image_text) VALUES ('$image','$title', '$image_text')";
    $details= mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
}
else{
    $details=array();
}

$result = mysqli_query($db, "SELECT * FROM images");
?>


    <style type="text/css">
        #content{
            width: 50%;
            margin: 20px auto;
            border: 1px solid #cbcbcb;
        }
        form{
            background-color: Blue;
            width: 50%;
            margin: 20px auto;
        }
        form div{
            margin-top: 5px;
        }
        #img_div{
            width: 80%;
            padding: 5px;
            margin: 15px auto;
            border: 1px solid #cbcbcb;
        }
        #img_div:after{
            content: "";
            display: block;
            clear: both;
        }
        img{
            float: left;
            margin: 5px;
            width: 300px;
            height: 140px;
        }
    </style>








<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title> Admin</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
  

</head>
<body>
<div class="container_12">
    <div class="grid_12 header-repeat">
        <div id="branding">

            <div class="floatleft middle">
                <a href="../index.php"><h1>TOURIST SPOT </h1></a>
            </div>
            <div class="floatright">

                <div class="floatleft marginleft10">
                    <ul class="inline-ul floatleft">
                        <li>Hello Admin</li>
                        <li><a href="../index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
    <div class="clear">
    </div>
    <div class="grid_12">
        <ul class="nav main">
            <li class="ic-dashboard"><a href="index.php"><span>Dashboard</span></a> </li>
            <li class="ic-typography"><a href="viewallusers.php"><span>View All Users</span></a></li>
            <li class="ic-grid-tables"><a href="inbox.php"><span>Inbox</span></a></li>
            <li class="ic-charts"><a href="../index.php"><span>Visit Website</span></a></li>
        </ul>
    </div>
    <div class="clear">
    </div>
    <div class="grid_2">
        <div class="box sidemenu">
            <div class="block" id="section-menu">
                <ul class="section menu">



                    <li><a class="menuitem">Category Option</a>
                        <ul class="submenu">
                            <li><a href="addcat.php">Add Places to go</a> </li>
                            <li><a href="addfare.php">Cost</a> </li>
                            <li><a href="adddisname.php">Add Fare place</a> </li>

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>



    <div style="background-color: white">
    <div id="content">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<div id='img_div'>";
            echo "<p>".$row['id']."</p>";
            echo "<img src='images/".$row['image']."' >";
            echo "<h5>".$row['title']."</h5>";
            echo "<p>".$row['image_text']."</p>";
            echo "</div>";
        }
        ?>
        <form method="POST" action="addcat.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <div>
                <input type="file" name="image">
            </div>
            <div>
                <div style="margin-bottom: 15px;">
                    <input type="text" name="title" class="form-control"  placeholder="Title">
                </div>
      <textarea
              id="text"
              cols="40"
              rows="4"
              name="image_text"
              placeholder="Say something about this image..."></textarea>
            </div>
            <div>
                <button type="submit" name="upload">POST</button>
            </div>
        </form>
    </div>



        </div>
    </div>

</div>
<div  style="margin-left: 25%">
    <form action="delete_img.php" method="post">
        Input id for delete:
        <input type="text" name="id">
        <input type="submit" name="del" value="Enter"><br><br>
    </form>
</div>
</div>

<div id="site_info">
    <p>
        &copy; Copyright <a href="#">TOURIST SPOT </a>. All Rights Reserved.
    </p>
</div>
</body>
</html>

