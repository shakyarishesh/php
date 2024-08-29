<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditions and control structures</title>
</head>
<body>

<?php
    $a = 7;
    $b = 5;

    //if statement
    if($a<$b)
    {
        echo "a is less than b" . "<br>";
    }else{
        echo "a is greater" . "<br>" ;
    }

    //switch
    $choice = "A";
    switch($choice)
    {
        case 'A':
            echo "it is case A";
            break;
        case 'B':
            echo "it is case A";
            break;
        default:
            echo "it is none of the choice";
    }

    //match()
    $r = 3;
    $result = match($r){
        1 => "variable is equal to 1",
        2 => "variable is equal to 2",
        3,4,5 => "variable is equal to 3 or 4 or 5",
        default => "it is equal to none",
    };
    echo "<br>";
    echo $result; 


?>
    
</body>
</html>