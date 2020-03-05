<?php

namespace App\Auth;

use PDO;

session_start();

class ques
{
    private $username;
    private $email;
    private $password;
    private $dbuser='root';
    private $dbpass='';
}