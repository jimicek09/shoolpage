<!DOCTYPE html>
<html>
    <head>
        <title>Ahoj</title>
    </head>
    <body>

        <?php
            $correct_answers = 0;
            if (isset($_GET["first_q"]) && $_GET["first_q"] == "4") {
                $correct_answers = 1;
            }

            if (isset($_GET["second_q"]) && $_GET["second_q"] == "4") {
                $correct_answers = 2;
            }

            if (isset($_GET["third_q"]) && $_GET["third_q"] == "4") {
                $correct_answers = 3;
            }

            if ($correct_answers == 3) {
                echo "<img src='img/CORRECT.jpg'>";
            } elseif ($correct_answers == 0) {
                echo "<img src='img/WRONG.jpg'>";
            }
            echo "<br>";

            echo "You got " . $correct_answers . " out of 3";
        ?>

        <form>
            <label>2 + 2:</label
            <input type="text" name="first_q">
            <br>
            <label>1 + 3:</label>
            <input type="text" name="second_q">
            <br>
            <label>5 - 1:</label>
            <input type="text" name="third_q">
            <br>
            <button>Finish</button>
        </form>
    </body>
</html>
