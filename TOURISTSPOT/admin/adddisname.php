
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

    <div class="grid_4" style="background-color: white">

        <div style="background-color: black;margin-bottom: 15%">

        </div>

        <form action="insert2.php" method="post" >
            Destination:
            <input type="text" name="dis"><br><br>

                 Title:   <input type="text" name="title" class="form-control"  placeholder="Title"><br><br>

            <textarea
                type="text"
                cols="40"
                rows="4"
                name="detailstext"
                placeholder="Say something about this image..."></textarea>

            <input type="submit" name="btn" value="submit">
        </form>
  <div style="margin-top: 10%">


        <form action="insert2.php" method="post">

            Input id to delete : <input type="text" name="id">
            <input type="submit" name="del" value="Enter"><br><br>
        </form>
  </div>

    </div>

</div>

<div class="grid_2" style="background-color: yellow;">

    <?php
    $host="localhost";
    $user="root";
    $pwd="";
    $dbname="amarproshno";
    $con=mysqli_connect($host,$user,$pwd,$dbname);

    $sqlShow="SELECT * FROM `farename` ORDER BY id ASC";
    $qryShow= mysqli_query($con,$sqlShow);
    $numShow =mysqli_num_rows($qryShow);
    if($numShow>0)
    {
        ?>
        <table border = "1">
            <tr>

                <th> id </th>
                <th> disname </th>
                <th> title </th>
                <th> Details </th>

            </tr>
            <?php while($recShow = mysqli_fetch_object($qryShow)){?>
                <tr >
                    <td><?php echo $recShow->id; ?></td>
                    <td><?php echo $recShow->disname; ?></td>
                    <td><?php echo $recShow->Title ; ?></td>
                    <td><?php echo $recShow->details ; ?></td>

                </tr>
            <?php }?>

        </table>
        <?php
    }
    else{
        echo "no Data Found" ;
    }
    ?>





</div>


</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
<div id="site_info">
    <p>
        &copy; Copyright <a href="#"> TOURIST SPOT </a>. All Rights Reserved.
    </p>
</div>
</body>
</html>

