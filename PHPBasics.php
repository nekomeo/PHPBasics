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
    <h3>Get the Length of a String</h3>
    <?php
    echo strlen("Hello World!");
    ?>
    <h3>Count the Number of Words in a String</h3>
    <?php
    echo str_word_count("Hello World!");
    ?>
    <h3>Reverse a String</h3>
    <?php
    echo strrev("Hello World!");
    ?>
    <h3>Search for Specific Text in a String</h3>
    <?php
    echo strpos("Hello World!", "World"); // Outputs the count
    ?>
    <h3>Replace Text Within a String</h3>
    <?php
    echo str_replace("World", "Dolly", "Hello World!");
    ?>
</body>
</html>