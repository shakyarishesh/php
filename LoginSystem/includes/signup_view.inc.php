<?php

declare(strict_types=1);

function signup_errors()
{
    if (isset($_SESSION["signup_errors"])) {
        $errors =  $_SESSION["signup_errors"];

        foreach ($errors as $error) {
            echo "<br><p align='center' style='color:red;'>" . $error . "</p>";
        }

        unset($_SESSION["signup_errors"]);
    } elseif (isset($_GET["signup"]) && $_GET["signup"] === "success") {

        echo "<br><p style='align:center; color:green;'>SignUp Success</p>";
    }
}

//for holding the values entered by the users after the form submission
function signup_data()
{
    //for username
    echo '<div class="form-group">';
    echo '<label for="username">Username:</label>';
    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["signup_errors"]["username_taken"])) {
        echo '<input type="text" id="username" name="username" value="' . $_SESSION["signup_data"]["username"] . '" required>';
    } else {
        echo '<input type="text" id="username" name="username" required>';
    }
    echo '</div>';

    //for email
    echo '<div class="form-group">';
    echo '<label for="email">Email:</label>';
    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["signup_errors"]["invalid_email"]) && !isset($_SESSION["signup_errors"]["registered_email"])) {
        echo '<input type="email" id="email" name="email" value="' . $_SESSION["signup_data"]["email"] . '" required>';
    } else {
        echo '<input type="email" id="email" name="email" required>';
    }
    echo '</div>';

    //for password as it is
    echo '<div class="form-group">';
    echo '<label for="password">Password:</label>';
    echo '<input type="password" id="password" name="password" required>';
    echo '</div>';
}
