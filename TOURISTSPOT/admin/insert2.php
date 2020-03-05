<?php
require_once ("db.php");
if($_POST['btn']=="submit")
{
$dis =  $_POST['dis'];
$title = $_POST['title'];
$detailstext = $_POST['detailstext'];

$val = " '', '$dis' , '$title' , '$detailstext' ";
$sqIIn="INSERT INTO `farename` VALUES ($val)";
$qryIn =mysqli_query($con,$sqIIn);
if($qryIn)
{
echo"New record created successfully";
header("location: adddisname.php");
}

else{
echo "Error";
}
}

if($_POST['del']=="Enter")
{   $id=$_POST['id'];
    $sqIIn="DELETE FROM `farename` WHERE  id='$id' ";
    $qryIn =mysqli_query($con,$sqIIn);
    if($qryIn)
    {
        echo"Delete successfully";
        header("location: adddisname.php");
    }
    else{
        echo "Error";
    }
}
?>