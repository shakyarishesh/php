<?php

declare(strict_types=1);

function output_username()
{
    if(isset($_SESSION["user_id"]))
    {
        echo 'You are logged in as ' . $_SESSION["user_username"];
    }else
    {
        echo 'You are not logged in';
    }
}

function check_login_errors()
{
    if(isset($_SESSION["signin_errors"]))
    {
        $errors = $_SESSION["signin_errors"];

        echo "<br>";
        foreach($errors as $error)
        {
            echo '<p style="color:red; align:center;">' . $error . '</p>';
        }

        unset($_SESSION["signin_errors"]);
    }else if(isset($_GET["signin"]) && $_GET["signin"] === "success")
    {
        echo "<br><p style='align:center; color:green;'>Login Success</p>";
    }
}