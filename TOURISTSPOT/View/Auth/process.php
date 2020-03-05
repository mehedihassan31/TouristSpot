<?php

include ("../../vendor/autoload.php");
use App\Auth\Auth;

$obj1= new Auth();
$data = $obj1->login($_POST);

if(!empty($data)){


    header("location: ../../index.php");
}
else {

    header("location: login.php");
}