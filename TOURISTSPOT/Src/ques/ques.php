<?php

namespace App\ques;

use PDO;

class ques
{
    private $title;
    private $desc;
    public $views;
    public $dbuser = "root";
    private $dbpass = "";

    public function setQues($data = '')
    {
        $this->title = $_POST['title'];
        $this->desc = $_POST['desc'];
        return $this;
    }



    public function storeQues()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=amarproshno', $this->dbuser, $this->dbpass);
            $query = 'INSERT INTO questions(title, description, created_at) VALUES(:t, :d, :c)';
            $stmt = $pdo->prepare($query);
            $stmt->execute(array(
                ':t' => $this->title,
                ':d' => $this->desc,
                ':c' => date("Y-m-d")
            ));
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }






    public function getQues()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=amarproshno', $this->dbuser, $this->dbpass);
        $query = 'SELECT * FROM questions ORDER by id DESC';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    public function getQuesDetails($id = "")
    {
        $pdo = new PDO('mysql:host=localhost;dbname=amarproshno', $this->dbuser, $this->dbpass);
        $query = "SELECT * FROM `questions` WHERE id=$id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }

}