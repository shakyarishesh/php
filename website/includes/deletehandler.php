<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST["deleteUsername"];
    $pwd = $_POST["deletePassword"];
   

    try {
        require_once "dbh.inc.php";

        $query = "DELETE from users WHERE username = :username; ";

        $stm = $pdo->prepare($query);
        $stm->bindParam(":username", $username);
        $stm->execute();

        //close resource
        $pdo = null;
        $stm = null;

        header("Location: ../editform.php?message=user deleted successfully");

        die();
    } catch (PDOException $e) {
        die("error: " . $e->getMessage());
    }
}else{
    header("Location: ../editform.php");

}