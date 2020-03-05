<?php
namespace App\Auth;

use PDO;
session_start();

class Auth
{
      private $username;
      private $email;
      private $password;
      private $dbuser='root';
      private $dbpass='';

      public function __construct()
      {

      }

    public function setData($data='')
      {

         $this->username=$data['username'];
         $this->email=$data['email'];
          $this->password=$data['password'];
         return $this;
      }
      public function getAllUsers()
      {
          $pdo = new PDO ('mysql:host=localhost; dbname=amarproshno', $this->dbuser, $this->dbpass);
          $query="SELECT * FROM admin";
          $stmt=$pdo->prepare($query);
          $stmt->execute();
         $data= $stmt->fetchAll();
         return $data;


      }
    public function show($username='')
    {
        echo $username;


    }

    public function store()
      {
          try{
              $pdo = new PDO ('mysql:host=localhost; dbname=amarproshno', $this->dbuser, $this->dbpass);
              $query="INSERT INTO users(id, username, email, password, created_at) VALUES (:i, :u, :e, :p, :c)";
              $stmt=$pdo->prepare($query);
              $data=array(
                  ':i'=> null,
                  ':u'=>$this->username,
                  ':e'=>$this->email,
                  ':p'=>$this->password,
                  ':c'=>date("Y-m-d")

              );
             $status= $stmt->execute($data);
             if($status){
                 $_SESSION['Message']='<h1>Successfully Registered</h1>';
                 echo $_SESSION['Message'];
                 header('location:creat.php');

             }
           }
          catch (PDOException $e){
              echo 'ERROR'. $e->getMessage();
          }

      }
    public function login($data=""){
          print_r($data);
        $pdo = new PDO ('mysql:host=localhost; dbname=amarproshno', $this->dbuser, $this->dbpass);
        $query="SELECT * FROM users WHERE email=:email AND password=:password";
        $stmt=$pdo->prepare($query);
        $data1=array(
            ':email'=>$data['email'],
            ':password'=>$data['password']
        );
        $stmt->execute($data1);
        $abc= $stmt->fetchAll();
        return $abc;
    }


    public function adminlogin($data=""){
        print_r($data);
        $pdo = new PDO ('mysql:host=localhost; dbname=amarproshno', $this->dbuser, $this->dbpass);
        $query="SELECT * FROM admin WHERE email=:email AND password=:password";
        $stmt=$pdo->prepare($query);
        $data1=array(
            ':email'=>$data['email'],
            ':password'=>$data['password']
        );
        $stmt->execute($data1);
        $abcd= $stmt->fetchAll();
        return $abcd;
    }

}