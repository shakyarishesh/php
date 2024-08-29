<!-- Exercise 4.1: Write a function to calculate the sum of two numbers. -->
 <?php

 function sum($a, $b)
 {
    $add = $a + $b;
    return $add;
 }

 echo sum(2,5);
 echo "<br>";


 function pallin($str)
 {
    $rev_string = strrev($str);

    if($str==$rev_string)
    {
        echo "pallindrome";
    }else
    {
        echo "not pallindrome";
    }
 }

 pallin("madam");
 echo "<br>";
 pallin("hello");
 echo "<br>";
 pallin("racecar");
 echo "<br>";
 pallin("rishesh    ");