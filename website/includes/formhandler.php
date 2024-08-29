<?php

//var_dump($_SERVER["REQUEST_METHOD"]);

if($_SERVER["REQUEST_METHOD"]== "POST"){

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favpet = htmlspecialchars($_POST["pet"]);

    if(empty($firstname)){
        //exit();
        header("Location: ../index.php");
    }

    echo "these are the data that the user submitted." . "<br>";
    echo $firstname . "<br>";
    echo $lastname . "<br>";
    echo "and the favourite pet is " . $favpet;
    
}else{
    header("Location: ../index.php");
}