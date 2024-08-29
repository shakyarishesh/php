<?php
class Signup extends Dbh{
    private $username;
    private $pwd;

    public function __construct($username, $pwd){
        $this->username = $username;
        $this->pwd = $pwd;
    }

    private function insertUser()
    {
        $query = "INSERT INTO users(username, pwd) VALUES (:username, :pwd);";

        $stm = $this->connect()->prepare($query);
        $stm->bindParam(":username", $this->username);
        $stm->bindParam(":pwd", $this->pwd);

        $stm->execute();

    }

    private function isInputEmpty()
    {
        if(isset($this->username) && isset($this->pwd))
        {
            return false;
        }else
        {
            return true;
        }
    }

    public function signUp()
    {
        if($this->isInputEmpty())
        {
            header('Location: ../reg.php');
            die();
        }
        $this->insertUser();
    }
}