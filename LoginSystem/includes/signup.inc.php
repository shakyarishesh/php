<?php

$username = $_POST["username"];
$email = $_POST["email"];
$pwd = $_POST["password"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_controller.inc.php";

        //error handlers

        $errors = [];

        if (is_input_empty($username, $pwd, $email)) {
            $errors["empty_input"] = "Fill in all the fields!";
        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Use valid email!";
        }
        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Username already taken!";
        }
        if (is_email_registered($pdo, $email)) {
            $errors["registered_email"] = "This email is already registered!";
        }

        require_once "config_session.inc.php";
        
        if($errors)
        {
            $_SESSION["signup_errors"] = $errors;

            //users sumbitted data
            $_SESSION["signup_data"] = [
                "username" => $username,
                "email" => $email
            ];
            header("location: ../index.php");   
            die();
        }

        create_users($pdo, $username,  $email,  $pwd);

        //close the resources
        $pdo = null;
        $stm = null;

        //forward to index page
        header("location: ../index.php?signup=success");

        die();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    header("location: ../index.php");
    die();
}
