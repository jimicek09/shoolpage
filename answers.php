<?php
$answers_arr = array(2, 3, 4, 5, 6, 9, 3, 3125, 720, -1);
$correct_answer = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($j = 0; $j < count($answers_arr); $j++) {
        if ($_POST["question_" . $j] == $answers_arr[$j]) {
            $correct_answer++;
        }
    }
    echo "Your score is: " . $correct_answer . "<br>";
    echo "so you are";
    if ($correct_answer < 2) {
        echo "          BAD";
        echo "<br><img src='img/WRONG.jpg'>";
    } elseif ($correct_answer < 4) {
        echo "          quite bad";
        echo "<br><img src='img/WRONG.jpg'>";
    } elseif ($correct_answer < 6) {
        echo "          eh";
        echo "<br><img src='img/WRONG.jpg'>";
    } elseif ($correct_answer < 8) {
        echo "          ok";
        echo "<br><img src='img/CORRECT.jpg'>";
    } else {
        echo "          fine at maths";
        echo "<br><img src='img/CORRECT.jpg'>";
    }
}
echo "<br><a href='form_bigger.php'><button type='button'>Try Again</button></a>";
?>