<?php
session_start();
require_once("db.php");
$upd = $_POST['id'];

$q = "SELECT * FROM `farecost` where id = '$upd'";
$res = mysqli_query($con,$q);
$data = mysqli_fetch_array($res);
$numShow=mysqli_num_rows($res);

$id = $data[0];
$from = $data[1];
$to = $data[2];
$ac = $data[3];
$nonac = $data[4];
$air = $data[5];
$_SESSION['id'] = $id;

?>

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
        <form action="insert.php" method="POST" >
            Id:
            <input type="text" name="id" value=<?php echo '"'.$id.'"';?>><br><br>
            From:
            <input type="text" name="cfrom" value=<?php echo '"'.$from.'"';?>><br><br>
            To   :
            <input type="text" name="cto"value=<?php echo '"'.$to.'"';?><br><br>
            AC Cost:
            <input type="text" name="accost" value=<?php echo '"'.$ac.'"';?><br><br>
            Non AC cost: <input type="text" name="noncost" value=<?php echo '"'.$nonac.'"';?><br><br>
            Plane Cost: <input type="text" name="aircost" value=<?php echo '"'.$air.'"';?><br><br>
            <input type="submit" name="btnIn" value="insert">

            <input type="submit" name="upd" value="update">
            <input type="submit" name="del" value="delete"><br><br>
        </form>
        <form action="insert.php" method="post" >
            Destination:
            <input type="text" name="diss"><br><br>

            <input type="submit" name="btnn" value="submit">
        </form>


    </div>



    <div class="grid_3" style="margin-left: 5%; ">

        <?php
        require_once ("db.php");

        $sqlShow="SELECT * FROM `farecost` ORDER BY id ASC";
        $qryShow= mysqli_query($con,$sqlShow);
        $numShow =mysqli_num_rows($qryShow);
        if($numShow>0)
        {
            ?>
            <table border = "1">
                <tr>

                    <th> Id </th>
                    <th> From </th>
                    <th> To </th>
                    <th> ACcost </th>
                    <th> NonAccost</th>
                    <th>Air</th>
                </tr>
                <?php while($recShow = mysqli_fetch_object($qryShow)){?>
                    <tr style ="background: yellow;">
                        <td><?php echo $recShow->id; ?></td>
                        <td><?php echo $recShow->cfrom; ?></td>
                        <td><?php echo $recShow->cto ; ?></td>
                        <td><?php echo $recShow->ACcost; ?></td>
                        <td><?php echo $recShow->NonAccost; ?></td>
                        <td><?php echo $recShow->air; ?></td>
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
    <div class="grid_1" style="">

        <?php

        $sqlShow="SELECT * FROM `name` ORDER BY id ASC";
        $qryShow= mysqli_query($con,$sqlShow);
        $numShow =mysqli_num_rows($qryShow);
        if($numShow>0)
        {
            ?>
            <table border = "1">
                <tr>

                    <th> id </th>
                    <th> Name </th>

                </tr>
                <?php while($recShow = mysqli_fetch_object($qryShow)){?>
                    <tr style ="background: yellow;">
                        <td><?php echo $recShow->id; ?></td>
                        <td><?php echo $recShow->name; ?></td>

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
</div>
<div id="site_info">
    <p>
        &copy; Copyright <a href="#"> TOURIST SPOT </a>. All Rights Reserved.
    </p>
</div>
</body>
</html>

