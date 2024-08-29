<?php

$username = $_POST["username"];
$pwd = $_POST["password"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        require_once "dbh.inc.php";
        require_once "login_model.inc.php";
        require_once "login_controller.inc.php";

        //error handlers

        $errors = [];

        if (is_input_empty($username, $pwd)) {
            $errors["empty_input"] = "Fill in all the fields!";
        }

        $result = get_user($pdo, $username);

        if(is_username_wrong($result))
        {
            $errors["wrong_username"] = "username doesnot exist";
        }

        if(!is_username_wrong($result) && is_password_wrong($pwd, $result["pwd"]))
        {
            $errors["wrong_password"] = "Wrong password";
        }
       
        //session
        require_once "config_session.inc.php";

        if($errors)
        {
            $_SESSION["signin_errors"] = $errors;

            header("Location: ../index.php");
            die();  
        }

        //creating new sessionid when the user is logged in
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);

        $_SESSION["last_regeneration"] = time();

        //close the resources
        $pdo = null;
        $stm = null;

        //forward to index page
        header("location: ../index.php?signin=success");

        die();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    header("location: ../index.php");
    die();
}
