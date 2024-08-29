<!-- Exercise 3.1: Write a PHP script to print the numbers from 1 to 10 using a for loop. -->
 <?php


 for($i=1; $i<=10; $i++)
 {
    echo $i . "<br>";
 }

 //Exercise 3.2: Create a script that prints the multiplication table for a given number.
 $num = 9;

 for($j=1; $j<=10; $j++)
 {
    echo $num . "*" . $j . '=' . ($num*$j) . "<br>";
 }