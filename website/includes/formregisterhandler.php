<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $email = $_POST["email"];

    try {
        //embedding database connecton file i.e. includeing another file
        require_once "dbh.inc.php"; //link dbh file which contains the database connection file. this is basically indule this dbh file in this another file inorder to exclude writing same code repeatdealy.
        //include -> in include this any error occurs like the connection is already made and th user is again trying to made connection then it generates an error but the script will continue to execute.
        //include_once
        //require, require_once -> if any error occurs then the scripts will stop.

        $query = "INSERT INTO users(username, pwd, email) VALUES (:username, :pwd, :email);";

        $stm = $pdo->prepare($query);

        //encrypting the password before storing into the database

        $option = ['cost' => 12];
        $hashedpwd = password_hash($pwd, PASSWORD_BCRYPT, $option);

        //using naming parameters
        $stm->bindParam(":username", $username);
        $stm->bindParam(":pwd", $hashedpwd);
        $stm->bindParam(":email", $email);

        $stm->execute();

        //another way without using naming paramaters
        /* 
        $query = "INSERT INTO users(username, pwd, email) VALUES (?, ?, ?);";
        $stm = $pdo->prepare($query);

        $stm->execute([$username, $pwd, $email]); // here the order should be same as the column parameters passed in $query.

    */

        //closing the resources
        $pdo = null;
        $stmt = null;

        //returning it to the home(register) page after successfull execution
        header("Location: ../dbconn.php");
        die(); //terminating the script
    } catch (PDOException $e) {
        die("error: " . $e->getMessage());
    }
} else {
    header("Location: ../dbconn.php");
}
