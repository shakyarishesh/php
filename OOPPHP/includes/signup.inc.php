<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = htmlspecialchars($_POST["username"]);
    $pwd = htmlspecialchars($_POST["pwd"]);

    require_once 'Dbh.php';
    require_once 'Signup.php';

    $obj = new Signup($username, $pwd);
    $obj->signUp();

}