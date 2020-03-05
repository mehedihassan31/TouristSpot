<?php

include ("../../vendor/autoload.php");
use App\Auth\Auth;

$obj1= new Auth();
$data = $obj1->adminlogin($_POST);

if(!empty($data)){


    header("location: ../../admin/index.php");
}
else {

    header("location: admin.php");
}