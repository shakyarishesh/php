<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color:black" align="center">
    
    <div class="container">
        <form action=" <?php echo $_SERVER["PHP_SELF"] ?>" method="post">
            <input type="number" name="num1" placeholder="enter number 1" required/>
            <br>
            <select name="operator">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="division">/</option>
            </select>
            <br>
            <input type="number" name="num2" placeholder="enter number 2" required/>
            <br>

            <button type="submit">Calculate</button>

        </form>
    </div>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
            $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = filter_input(INPUT_POST, "operator", FILTER_SANITIZE_SPECIAL_CHARS);
            //$result = 0;

            //error haldling
            $error = false;
            if(empty($num1) || empty($num2) || empty($operator))
            {
                echo "<p style='color:red';>Fill in all values </p>";
                $error = true;
            }

            if(!is_numeric($num1) || !is_numeric($num2))
            {
                echo "<p style='color:red';>Fill in only numbers </p>";
                $error = true;
            }

            if($error == false)
            {
                $result = 0;
                switch($operator)
                {
                    case "add":
                        $result = $num1 + $num2;
                        break;
                    case "subtract":
                        $result = $num1 - $num2;
                        break;
                    case "multiply":
                        $result = $num1 * $num2;
                        break;
                    case "division":
                        $result = $num1 / $num2;
                        break;
                    default:
                        echo "INVAILD INPUT";
                }
                echo "<p style='color:white';> result= " . $result . "</p>";
            }
        }
    ?>
    
</body>
</html>