<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Basics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h3>PHP String</h3>
    <?php
    $x = "Hello World!";
    $y = 'Hello World!';

    echo $x;
    echo "<br>";
    echo $y;
    ?>
    <h3>PHP Integer</h3>
    <?php
    $x = 5985;
    var_dump($x);
    ?>
    <h3>PHP Float</h3>
    <?php
    $x = 10.365;
    var_dump($x);
    ?>
    <h3>PHP Array</h3>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    ?>
    <h3>PHP Objects</h3>
    <?php
    class Car {
        function Car() {
            $this->model = "VW";
        }
    }

    // Create an object
    $herbie = new Car();

    // Show object properties
    echo $herbie->model;
    ?>
    <h3>PHP NULL Value</h3>
    <?php
    $x = "Hello World!";
    $x = NULL;
    var_dump($x);
    ?>
</body>
</html>