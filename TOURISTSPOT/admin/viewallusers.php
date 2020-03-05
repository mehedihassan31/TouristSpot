<?php
include ("../vendor/autoload.php");
use App\Auth\Auth;

$obj1= new Auth();
$allData=$obj1->getAllUsers();

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
    <!-- END: load jquery -->
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>

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
                        <li><a href="../View/Auth/login.php">Logout</a></li>
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

    <div class="grid_10" style="background-color: white;">


        <div class="container" style="margin-left: 30%;margin-top: 5%;">

            <div class="col-md-6">


                <table border="1">
                    <tr>


                        <td style="text-align: center;background-color: green;"><b>ID</b></td>
                        <td style="text-align: center;background-color: green;"><b>Username</b></td>
                        <td style="text-align: center;background-color: green;"><b>Email</b></td>
                        <td style="text-align: center; background-color: green;"><b>Action</b></td>
                    </tr>
                    <?php
                    foreach ($allData as $data){
                        ?>
                        <tr>

                            <td><?php echo $data['id'] ?></td>
                            <td><?php echo $data['username'] ?></td>
                            <td><?php echo $data['email'] ?></td>
                            <td><a href="../View/Auth/show.php?username=<?php echo $data['username'] ?>"class="btn btn-danger">View</a> </td>
                            <td><a onclick="return confirm('are you sure')" href="viewallusers.php?idd=<?php echo $data['id'] ?>"class="btn btn-danger">Delete</a> </td>

                        </tr>
                        <?php
                    }

                    $mysqli=new mysqli("localhost","root","","amarproshno");
                    if($mysqli->connect_error){
                        echo "Failes connect(".$mysqli->connect_error.")".$mysqli->connect_error;
                    }

                   if(isset($_GET['idd']))
                   {
                       $idd=$_GET['idd'];
                       $result=$mysqli->query("DELETE FROM `users` WHERE `users`.`id` ='$idd'");
                       if($result)
                       {

                       }
                       else
                       {

                       }

                   }

                    ?>


                </table>


            </div>

        </div>
    </div>


    </div>
    <div class="clear">
    </div>
</div>
<div class="clear">
</div>
<div id="site_info">
    <p>
        &copy; Copyright <a href="#">TOURIST SPOT </a>. All Rights Reserved.
    </p>
</div>
</body>
</html>
