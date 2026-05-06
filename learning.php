<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Main</title>
    </head>
    <body>
        <?php
            for ($i = 1; $i <= 100; $i++) {
                echo $i . ", ";
            }
            echo "<br>";
            for ($j = 1; $j <= 50; $j++) {
                if ($j == 50) {
                    echo "hodne";
                } else {
                    echo $j . ", ";
                }
            }
            echo "<br>";
            for ($k = 0; $k <= 100; $k = $k + 2) {
                echo $k . ", ";
            }
            echo "<br>";
            for ($l = 0; $l < 100; $l++) {
                if ($l % 3 == 0 ) {
                    echo $l . ", ";
                }
            }
            echo "<br>";
            for ($m = 1; $m < 100; $m++) {
                if ($m % 3 == 0) {
                    echo "BUM, ";
                } elseif ($m % 5 == 0) {
                    echo "PRASK, ";
                } elseif ($m % 3 == 0 && $m % 5 == 0) {
                    echo "BUM PRASK, ";
                } else {
                    echo $m . ", ";
                }
            }
            echo "<br>";
            $arr = ["one", "two", "three", "four", "five", "six", "seven", "eight"];
            for ($i = 0; $i < count($arr); $i++) {
                echo $arr[$i] . ", ";
            }
            echo "<br>";
            for ($j = 0; $j < count($arr); $j++) {
                if (strlen($arr[$j]) >= 5) {
                    echo strtoupper($arr[$j]) . ", ";
                } else
                    echo $arr[$j] . ", ";
            }
            echo "<br>";
            $name = "jimmy";
            $age = 16;
            echo "Ahoj, jmenuji se " . $name . " a je mi " . $age . " let.";
            echo "<br>";
            echo rand(1, 6);
            echo "<br>";
            $subject = ["dog", "cat", "snake", "horse", "bird"];
            $action = ["ate", "saw", "carried", "made", "threw away"];
            $thing = ["an apple", "a bed", "an allen wrench", " a boat", "a PC"];
            echo $subject[rand(0, count($subject) - 1)] . " " . $action[rand(0, count($action) - 1)] . " " . $thing[rand(0, count($thing) - 1)];
        ?>
    </body>
</html>
