<?php
require_once ("db.php");
if($_POST['del']=="Enter")
{   $id=$_POST['id'];
    $sqIIn="DELETE FROM `images` WHERE  id='$id' ";
    $qryIn =mysqli_query($con,$sqIIn);
    if($qryIn)
    {
        echo"Delete successfully";
        header("location: addcat.php");
    }
    else{
        echo "Error";
    }
}
?>