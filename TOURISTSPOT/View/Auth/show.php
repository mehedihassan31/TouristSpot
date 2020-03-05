<?php
include ("../../vendor/autoload.php");
use App\Auth\Auth;

$obj1= new Auth();
$obj1->show($_GET['username']);
