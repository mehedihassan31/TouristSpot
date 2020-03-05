<?php
   include ("../../vendor/autoload.php");
  use App\Auth\Auth;

   $obj1= new Auth();
   $obj1->setData($_POST)->store();
   header("location: login.php");


?>