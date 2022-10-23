<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz</title>
</head>
<body>
    <?php
    $ans1 = $_POST['ans1'];
    $ans2 = $_POST['ans2'];
    $ans3 = $_POST['ans3'];
    $ans4 = $_POST['ans4'];
    $ans5 = $_POST['ans5'];
    $correct = 0; 
    if (!empty($_POST)) {
        if ($ans1 == 10) {
            $correct++;
        } else {
            echo "<p>You can't add!</p>";
        } 
        if ($ans2 == 4) {
            $correct++;
        } else {
            echo "<p>You can't subtract!</p>";
        }
        if ($ans3 == 32) {
            $correct++;
        } else {
            echo "<p>You can't multiply!</p>";
        }
        if ($ans4 == 7) {
            $correct++;
        } else {
            echo "<p>You can't divide!</p>";
        }
        if ($ans5 == 3) {
            $correct++;
        } else {
            echo "<p>You can't add!</p>";
        } 
        echo "<p>You got $correct correct!</p>";
        $grade = ($correct / 5) * 100;
        if ($correct == 0) {
            echo "<p>You are dumb.</p>";
        } elseif ($correct == 1) {
            echo "<p>You need to really, really work on arithmetic.</p>";
        } elseif ($correct == 2) {
            echo "<p>You really need to work on arithmetic.</p>";
        } elseif ($correct == 3) {
            echo "<p>You did good answer.</p>";
        } elseif ($correct == 4) {
            echo "<p>You did excellent answer.</p>";
        } else {
            echo "<p>Great job! You aced it!</p>";
        }
    } else {
        echo "<p>Please take the quiz.</p>";
    }
    ?>
    <form action="soal.php" method="post">
        <p> What is 3 + 7?</p>
        <input type="number" name="ans1">
        <p> What is 9 - 5?</p>
        <input type="number" name="ans2">
        <p> What is 8 x 4?</p>
        <input type="number" name="ans3">
        <p> What is 21 &#247; 3?</p>
        <input type="number" name="ans4">
        <p> What is 2 + 1?</p>
        <input type="number" name="ans5">
        <p>Click submit (or submit query in Google) to see your results </p>
        <input type="submit">
</body>
</html>