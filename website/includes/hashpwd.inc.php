<?php 

$password = "rishesh";

$option = [ 'cost' => 12];
$hashedpwd = password_hash($password, PASSWORD_BCRYPT, $option); 
//password_bcrypt is the one used stroger algortihm
//PASSWORD_DEFAULT = if used this function then it will update the algorithm as per new algo are available

echo $hashedpwd;

//check with user's login

$pwduser = "rishesh";
$check = password_verify($pwduser, $hashedpwd);
if($check)
{
    echo "<br> same";
}else{
    echo "<br> not same";
}