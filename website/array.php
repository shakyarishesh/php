<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
        //indexed array
        $arr = array("rishesh", "jake","aaru");
        echo $arr[2] . "<br>";

        //another way for declaring array is:
        $arr1 = ["rishesh", "jake","aaru"];
        echo $arr1[0]. "<br>";

        //adding value to existing indexed array
        $arr1[] = "bandana";
        echo $arr1[3] . "<br>";

        //array_splice -> remove an value from the index as
        array_splice($arr1, 0 ,3);
        //this function removes the value from an array. here in this example three(3) values are removed from index 0
        //echo $arr1[1] . "<br>";

        print_r($arr1);
        echo "<br>";

        // key=> value pair
        // associate array
        $food = [
            "a" => "hello",
            "b" => "world",
            "c" => "jupiter",
        ];

        echo $food["c"] . "<br>";

        //adding value to existing associate array
        $food["d"] = "saturn";
        echo $food["d"] . "<br>";

        echo "---------------------------";
        echo "<br>";
        //multidimensional array
        //array inside an array is multidimensional array in php
        $fruit = [
            array("mango", "apple", "cherry"),
            "rishesh",
            "bandana",
        ];

        echo $fruit[1] . "<br>" . $fruit[2] . "<br>";
        echo $fruit[0][1]; //apple

        $fruit1 = [
            "a" => array("mango", "apple", "cherry"),
            "b" => "rishesh",
            "c" => "bandana",
        ];

        echo "<br>";
        echo "------------------------";
        echo "<br>";
        echo $fruit1["b"] . "<br>" . $fruit1["c"] . "<br>";
        echo $fruit1["a"][1]; //apple


    ?>
</body>
</html>