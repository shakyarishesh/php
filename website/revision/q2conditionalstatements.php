<?php
//Exercise 2.1: Write a PHP script that checks if a number is even or odd.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <label for="number">number:</label>
        <input type="number" name="number" placeholder="enter a number" />
        <button type="submit">submit</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = filter_input(INPUT_POST, "number", FILTER_SANITIZE_NUMBER_INT);

        if ($num % 2 == 0) {
            echo "even";
        } else {
            echo "odd";
        }
    }
    ?>

    <!-- Exercise 2.2: Create a script that checks if a person is eligible to vote (age >= 18). -->

    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <label for="number">age:</label>
        <input type="number" name="age" placeholder="enter a age" />
        <button type="submit">submit</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

        if ($age>=18) {
            echo "You are Eligible";
        } else {
            echo "You are not Eligible";
        }
    }
    ?>
</body>

</html>