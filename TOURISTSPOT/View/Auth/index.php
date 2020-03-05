<?php

include ("../../vendor/autoload.php");
use App\Auth\Auth;

$obj1= new Auth();
$allData=$obj1->getAllUsers();

header("location: ../../profile/profile.php");

?>


