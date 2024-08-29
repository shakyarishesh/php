<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST["changeUsername"];
    $pwd = $_POST["changePassword"];
    $email = $_POST["changeEmail"];

    try {
        require_once "dbh.inc.php";

        $query = "UPDATE user SET username = :username, pwd = :pwd, email = :email WHERE ";
    } catch (\Throwable $th) {
        //throw $th;
    }
}