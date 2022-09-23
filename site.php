<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 101</title>
</head>
<body>
    <?php
        echo "<h1>This is cool</h1>";
        echo "<hr>";
        echo "<p>php is really intresting</p>";
    ?>
    <?php

        $cName = "Trevor";
        $cAge = 26;
        echo "There was a man named $cName.<br>";
        echo "He was $cAge.<br>";
        $cName = "James";
        echo "He liked being $cName.<br>";
        echo "but he didnt like being $cAge.<br>";
    ?>
    <br>
    <?php
        $phrase = "To see or not to see..";
        $number = 30;
        $decimalNumber = 32.5645;
        $bool = false;
        
        echo "$phrase <br>";
        echo "$number <br>";
        echo "$decimalNumber <br>";
    ?>
    <br>
    <?php
        $phrase = "Rise";
        $space = "<br>";
        echo strtolower($phrase), $space;
        echo strtoupper($phrase), $space;
        echo strlen($phrase), $space;
        echo $phrase[0], $space;
        echo $phrase;
        $phrase[0] = "W";
        echo $space;
        echo $phrase, $space;
        echo str_replace("se", "ce", $phrase), $space;
        echo substr($phrase, 2)
    ?>
    <?php
        echo 37, $space;
        echo -37, $space;
        echo 37.773, $space;
        echo 10 * 4, $space;
        echo 10 % 4, $space;

        $no = 20 ;
        $no--;
        echo $no;
        echo $space;
        echo abs(-47), $space;
        echo pow(2,4), $space;
        echo sqrt(144), $space;
        echo max(7,35), $space;
        echo min(7,35), $space;
        echo round(6.8), $space;
        echo ceil(4.4), $space;
        echo floor(4.9);
    ?>
</body>
</html>