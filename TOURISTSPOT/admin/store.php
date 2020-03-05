<?php

include("../vendor/autoload.php");
use App\ques\ques;
$ques = new ques();
$ques->setQues($_POST)->storeQues();
header("Location: ../contact/contact.html");

?>