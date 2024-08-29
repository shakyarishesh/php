<?php

declare(strict_types=1);

//for input field submitted by the user
function is_input_empty(string $username, string $pwd, string $email)
{
    if (empty($username) || empty($pwd) || empty($email)) {
        return true;
    } else {
        return false;
    }
}

//for email validation
function is_email_invalid(string $email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_username_taken(object $pdo,string $username)
{
    if(get_username($pdo, $username))
    {
        return true;
    }else
    {
        return false;
    }
}

//check if the email is registered
function is_email_registered(object $pdo,string $email)
{
    if(get_email($pdo, $email))
    {
        return true;
    }else
    {
        return false;
    }
}

//upload the users data i.e. create user
function create_users(object $pdo, string $username, string $email, string $pwd)
{
    set_user($pdo, $username, $email, $pwd);
}
