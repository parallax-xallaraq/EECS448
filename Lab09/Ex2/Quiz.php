<?php

    echo "<h1> Math Quiz </h1>";

    $q1 = $_POST["1"];
    $q2 = $_POST["2"];
    $q3 = $_POST["3"];
    $q4 = $_POST["4"];
    $q5 = $_POST["5"];

    echo "<h3> Quiz Answers </h3>";

    echo "<p>";
    echo "Question 1: What is 2+2? <br>";
    echo "&nbsp You Answered: " . $q1 . "<br>";
    echo "&nbsp Correct Answer: 4";
    echo "</p>";

    echo "<p>";
    echo "Question 2: What is the square root of 25? <br>";
    echo "&nbsp You Answered: " . $q2 . "<br>";
    echo "&nbsp Correct Answer: 5";
    echo "</p>";

    echo "<p>";
    echo "Question 3: What is 2*2+6? <br>";
    echo "&nbsp You Answered: " . $q3 . "<br>";
    echo "&nbsp Correct Answer: 10";
    echo "</p>";

    echo "<p>";
    echo "Question 4: What is 100/2? <br>";
    echo "&nbsp You Answered: " . $q4 . "<br>";
    echo "&nbsp Correct Answer: 50";
    echo "</p>";

    echo "<p>";
    echo "Question 5: What is 2 cubed? <br>";
    echo "&nbsp You Answered: " . $q5 . "<br>";
    echo "&nbsp Correct Answer: 8";
    echo "</p>";

    echo "<h3> Quiz Results </h3>";

    $correct = 0;

    if($q1 == 4){
      $correct++;
    }

    if($q2 == 5){
      $correct++;
    }

    if($q3 == 10){
      $correct++;
    }

    if($q4 == 50){
      $correct++;
    }

    if($q5 == 8){
      $correct++;
    }

    echo "<p>";
    echo "You answered " . $correct . " questions correctly. <br>";
    echo "&nbsp Grade: " . (100*$correct/5) . "%";
    echo "</p>";

?>
