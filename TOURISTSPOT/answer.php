<?php

$location ="single.php?ques_id=".$_POST['ques_id'];
include("vendor/autoload.php");
use App\ans\ans;
$ans = new ans();
$ans->setAns($_POST)->storeAns();
header("Location: $location");

?>