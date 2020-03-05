<?php

    include("vendor/autoload.php");
    use App\ques\ques;
    $questions = new ques();
    $data = $questions->getQuesDetails($_GET['ques_id']);

    use App\ans\ans;
    $ans = new ans();
    $allAns = $ans->getAns($_GET['ques_id']);
?>




<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title> Admin</title>
    <link rel="stylesheet" type="text/css" href="admin/css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="admin/css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="admin/css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="admin/css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="admin/css/nav.css" media="screen" />
    <link href="admin/css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="admin/js/jquery-1.6.4.min.js" type="admin/text/javascript"></script>
    <script type="admin/text/javascript" src="admin/js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="admin/js/jquery-ui/jquery.ui.widget.min.js" type="admin/text/javascript"></script>
    <script src="admin/js/jquery-ui/jquery.ui.accordion.min.js" type="admin/text/javascript"></script>
    <script src="admin/js/jquery-ui/jquery.effects.core.min.js" type="admin/text/javascript"></script>
    <script src="admin/js/jquery-ui/jquery.effects.slide.min.js" type="admin/text/javascript"></script>
    <script src="admin/js/jquery-ui/jquery.ui.mouse.min.js" type="admin/text/javascript"></script>
    <script src="admin/js/jquery-ui/jquery.ui.sortable.min.js" type="admin/text/javascript"></script>
    <script src="admin/js/table/jquery.dataTables.min.js" type="admin/text/javascript"></script>
    <!-- END: load jquery -->
    <script type="admin/text/javascript" src="admin/js/table/table.js"></script>
    <script src="admin/js/setup.js" type="admin/text/javascript"></script>
    <script src="admin/https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>


</head>
<body>
<div class="container_12">
    <div class="grid_12 header-repeat">
        <div id="branding">

            <div class="floatleft middle">
                <a href="index.php"><h1>TOURIST SPOT</h1></a>
            </div>
            <div class="floatright">

                <div class="floatleft marginleft10">
                    <ul class="inline-ul floatleft">
                        <li>Hello Admin</li>
                        <li><a href="View/Auth/login.php">Logout</a></li>
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
            <li class="ic-dashboard"><a href="#"><span>Dashboard</span></a> </li>

            <li class="ic-typography"><a href="admin/viewallusers.php"><span>View All Users</span></a></li>
            <li class="ic-grid-tables"><a href="admin/inbox.php"><span>Inbox</span></a></li>
            <li class="ic-charts"><a href="index.php"><span>Visit Website</span></a></li>
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
                            <li><a href="admin/addcat.php">Add Places to go</a> </li>
                            <li><a href="admin/addfare.php">Cost</a> </li>
                            <li><a href="admin/adddisname.php">Add Fare place</a> </li>

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>



    <div class="row"style="background-color: white;margin-left: 17%;text-align: center">






        <div class="row"style="background-color: white;margin-left: 17%;text-align: center">

                <div class="col-md-8">
                    <h2>
                        <a href="#"><?php echo $data['title']; ?></a>
                    </h2>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $data['created_at']; ?></p>
                    <p><?php echo $data['description']; ?></p>
                    <hr>

                    <div class="block">
                        <?php foreach ($allAns as $answer){?>
                            <p><?php echo $answer['answer']; ?></p>
                        <?php } ?>
                    </div>

                    <div class="block">
                        <div><h3>Answer This Question</h3></div>
                        <form action="answer.php" method="post">
                            <input type="hidden" name="ques_id" class="form-control" value="<?php echo $_GET['ques_id']; ?>">
                            <div>
                                <textarea name="ans"></textarea>
                            </div>
                            <div class="box-footer clearfix">
                                <button type="submit" class="pull-right btn btn-default" id="sendEmail">Submit &nbsp; &nbsp;
                                    <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </form>
                    </div>
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
        &copy; Copyright <a href="#">TOURIST SPOT</a>. All Rights Reserved.
    </p>
</div>
</body>
</html>
