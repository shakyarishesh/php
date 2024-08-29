<?php

declare(strict_types=1);

function get_username(object $pdo, string $username)
{
    $query = "SELECT username FROM users WHERE username = :username";

    $stm = $pdo->prepare($query);
    $stm->bindParam(":username", $username);
    $stm->execute();

    $result = $stm->fetch(PDO::FETCH_ASSOC);
    return $result;
}

//get email
function get_email(object $pdo, string $email)
{
    $query = "SELECT email FROM users WHERE email = :email";

    $stm = $pdo->prepare($query);
    $stm->bindParam(":email", $email);
    $stm->execute();

    $result = $stm->fetch(PDO::FETCH_ASSOC);
    return $result;
}

//set the user into db
function set_user(object $pdo, string $username, string $email, string $pwd)
{
    $query = "INSERT INTO users(username, email, pwd) VALUES(:username, :email, :pwd);";

        $stm = $pdo->prepare($query);

        //encrypt the passowrd field
        $options = ['cost' => 12];
        $encryptedpwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

        $stm->bindParam(":username", $username);
        $stm->bindParam(":email", $email);
        $stm->bindParam(":pwd", $encryptedpwd);

        $stm->execute();
}