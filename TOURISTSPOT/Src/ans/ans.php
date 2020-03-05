<?php

namespace App\ans;

use PDO;

class ans
{
    private $ques_id;
    private $ans;
    public $dbuser = "root";
    private $dbpass = "";

    public function setAns($data = '')
    {
        $this->ques_id = $_POST['ques_id'];
        $this->ans = $_POST['ans'];
        return $this;
    }

    public function storeAns(){
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=amarproshno', $this->dbuser, $this->dbpass);
        $query = 'INSERT INTO `answers`(question_id, answer) VALUES (:qid, :ans)';
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
            ':qid' => $this->ques_id,
            ':ans' => $this->ans
        ));
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
    public function getAns($num = '')
    {
        $pdo = new PDO('mysql:host=localhost;dbname=amarproshno', $this->dbuser, $this->dbpass);
        $query = "SELECT * FROM answers WHERE question_id = $num ORDER by id DESC";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }






}