<?php

$gender = $_GET['gender'] ?? null;
$age = $_GET['age'] ?? null;
$height = $_GET['height'] ?? null;
$weight = $_GET['weight'] ?? null;
$bmi = false;


if ($height && $weight) {
    $height = number_format($height / 100, 2, '.') ** 2;
    $bmi = true;
    $bmi = number_format(($weight / $height), 2);
}

if ($bmi && $bmi <= 18.5) {
    $answer = "Your BMI is {$bmi} = Underweight";
} elseif ($bmi > 18.5 && $bmi <= 24.9) {
    $answer = "Your BMI is {$bmi} = Healthy Weight";
} elseif ($bmi >= 25 && $bmi <= 29.9) {
    $answer = "Your BMI is {$bmi} = Overweight";
} elseif ($bmi >= 30) {
    $answer = "Your BMI is {$bmi} = Obese";
}

require('view/index.view.php');