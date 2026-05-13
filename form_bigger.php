<!DOCTYPE html>
<html>
    <head>
        <title>Ahoj</title>
        <link rel="stylesheet" href="form_stylesheet.css">
    </head>
    <body>
        <?php
            $questions_arr = array("1+1", "1+2", "2+2", "2+3", "3+3", "3*3", "6/2", "5^5", "6! ", "1-2");

            echo "<div id='form'>";
            echo "<form method='post' action='answers.php'>";
            for ($i = 0; $i < count($questions_arr); $i++) {
                echo "<label id='question'>Whats " . $questions_arr[$i] . "?</label>";
                echo "<input type='text' name='question_" . $i . "' id='input'>";
                echo "<br>";
            }
            echo "<button type='submit'>Submit</button>";
            echo "</form>";
            echo "</div>";
        ?>
    </body>
</html>