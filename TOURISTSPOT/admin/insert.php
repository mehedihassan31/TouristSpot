<?php
require_once ("db.php");
if($_POST['btnIn']=="insert")
{
    $cfrom = $_POST['cfrom'];
    $cto = $_POST['cto'];
    $accost = $_POST['accost'];
    $noncost = $_POST['noncost'];
    $aircost = $_POST['aircost'];
    $val = "'','$cfrom','$cto', '$accost','$noncost', '$aircost' ";
    $sqIIn="INSERT INTO `farecost` VALUES($val)";
    $qryIn =mysqli_query($con,$sqIIn);
    if($qryIn)
    {
        echo"New record created successfully";
        header("location: addfare.php");
    }
    else{
        echo "Error";
    }
}



if($_POST['upd']=="update")
{   $id=$_POST['id'];
    $cfrom = $_POST['cfrom'];
    $cto = $_POST['cto'];
    $accost = $_POST['accost'];
    $noncost = $_POST['noncost'];
    $aircost = $_POST['aircost'];

    $sqIIn="UPDATE `farecost` SET `cfrom`='$cfrom',`cto`='$cto',`ACcost`='$accost',`NonAccost`='$noncost',`air`='$aircost' where id='$id' ";
    $qryIn =mysqli_query($con,$sqIIn);
    if($qryIn)
    {
        echo"update successfully";
        header("location: addfare.php");
    }
    else{
        echo "Error";
    }
}
if($_POST['del']=="delete")
{   $id=$_POST['id'];
    $sqIIn="DELETE FROM `farecost` WHERE  id='$id' ";
    $qryIn =mysqli_query($con,$sqIIn);
    if($qryIn)
    {
        echo"Delete successfully";
        header("location: addfare.php");
    }
    else{
        echo "Error";
    }
}



if($_POST['btnn']=="submit")
{
    $dis= $_POST['diss'];

    $val = "'','$dis'";
    $sqIIn="INSERT INTO `name` VALUES($val)";
    $qryIn =mysqli_query($con,$sqIIn);
    if($qryIn)
    {
        echo"New record created successfully";
        header("location: addfare.php");
    }
    else{
        echo "Error";
    }
}


?>