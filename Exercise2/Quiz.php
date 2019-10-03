<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

function getValue($x)
{
    $value = $_POST[$x];
    echo "Your answer: " . $value . "<br>";
    return $value;
}

$x = 0;
echo "Question 1: Who is the current captian of the Indian cricket team?<br><br>";
if(getValue("q1") == "Virat Kholi")
    $x++;
echo "Correct answer: Virat Kholi";
echo "<br><br>";
echo "Question 2: What country is the state Gujarat in?<br><br>";
if(getValue("q2") == "India")
    $x++;
echo "Correct answer: India";
echo "<br><br>";
echo "Question 2: Who started in the movie Lagaan?<br><br>";
if(getValue("q3") == "Aamir Khan")
    $x++;
echo "Correct answer: Aamir Khan";
echo "<br><br>";
echo "Question 2: Who's face is on every Indian Rupee?<br><br>";
if(getValue("q4") == "Gandhi")
    $x++;
echo "Correct answer: Gandhi";
echo "<br><br>";
echo "Question 2: What year did India gain its independence?<br><br>";
if(getValue("q5") == "1947")
    $x++;
echo "Correct answer: 1947";
echo "<br><br>";
echo "You scored ". $x . " out of 5<br>";
echo "That is " . $x * 20 . "%";
?>
