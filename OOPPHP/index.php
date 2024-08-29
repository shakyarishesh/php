<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <?php
        require_once 'Car.php';

        $car01 = new Car("Bmw", "black");
        
        $car01->setBrand("Mustang");
        echo $car01->getBrand() . "<br>";
        echo $car01->getColor();

    ?>
</body>
</html>