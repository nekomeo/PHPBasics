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
    <h3>Declaring Variables</h3>
    <?php
    $txt = "Hello World!";
    $x = 5;
    $y = 10.5;

    echo $txt;
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    ?>

    <h3>Output Variables</h3>
    <?php
    $txt = "W3Schools.com";
    echo "I love $txt!";
    ?>
    <br>
    <?php
    echo "I think " . $txt . " is neat";
    ?>
    <br>
    <?php
    $x = 5;
    $y = 4;
    echo $x + $y;
    ?>
    <h3>Global and Local Scope</h3>
    <?php
    $x = 5; // Global scope

    function myTest() {
        // Using x inside this function will generate an error
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();
    echo "<p>Variable x outside the function is: $x</p>";
    ?>
    <h3>PHP The Global Keyword</h3>
    <?php
    $x = 5;
    $y = 10;

    function myTest2() {
        global $x, $y;
        $y = $x + $y;
    }

    myTest2();
    echo $y;
    ?>
    <br>
    <?php
    $x = 6;
    $y = 11;

    function myTest3() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    
    myTest3();
    echo $y;
    ?>
    <h3>PHP The static Keyword</h3>
    <?php
    function myTest4() {
        static $x = 0;
        echo $x;
        $x++;
    }

    myTest4();
    myTest4();
    myTest4();
    ?>
</body>
</html>