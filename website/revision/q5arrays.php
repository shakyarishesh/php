<!-- Exercise 5.1: Write a PHP script to create an array of five colors and print each color. -->

<?php
$arr = ["red", "purple", "yellow", "blue", "orange"];

foreach($arr as $a)
{
    echo $a . "<br>";
}

echo "---------------------";
echo "<br>";

//Exercise 5.2: Create a script that sorts an array of numbers in ascending order.
array_multisort($arr, SORT_ASC);

foreach($arr as $a)
{
    echo $a . "<br>";
}