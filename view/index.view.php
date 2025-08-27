<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

        <form action="#" method="get">

            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <label for="age">Enter your age:</label>
            <input type="text" id="age" name="age">

            <label for="height">Enter your height(cm):</label>
            <input type="number" id="height" name="height">

            <label for="weight">Enter your weight(kg):</label>
            <input type="number" id="weight" name="weight">

            <button type="submit">Calculate</button>
        </form>

        <p class="result"><?= $answer ?? '' ?></p>


</body>

</html>