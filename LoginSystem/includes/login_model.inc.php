<?php

declare(strict_types=1);

function get_user(object $pdo, string $username)
{
    $query = "SELECT * FROM users WHERE username = :username";

    $stm = $pdo->prepare($query);
    $stm->bindParam(":username", $username);
    $stm->execute();

    $result = $stm->fetch(PDO::FETCH_ASSOC);
    return $result;
}