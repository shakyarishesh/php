<!-- Exercise 6.1: Write a PHP script to reverse a string. -->
 <?php

 $string = "rishesh";

 echo $string . "<br>";
 $rev_string = strrev($string);

 echo $rev_string;
 echo "<br>";

 //Exercise 6.2: Create a script that counts the number of vowels in a given string.
 $vowels = ["a","e","i","o","u"];

 $str = "aeiou";

 $char = str_split($str);

 $count = 0;
 for($i=0; $i<strlen($str); $i++)
 {
    for($j=0; $j<5; $j++)
    {
        if($char[$i]==$vowels[$j])
        {
            $count++;
        }
    }
 }
 echo "The number of vowels in " . $str . " is " . $count;
