<?php
require_once "config.php"; // connecting database
session_start();
$_SESSION["qn_count"]=1;  // Starting Session  
$_SESSION["score"]=0;  // Starting Score
$sql_no_of_questions = "SELECT * FROM quiztable";
    $result = mysqli_query($conn, $sql_no_of_questions);
    $_SESSION["no_of_qns"] = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <heading>
        <h1>Welcome to the Quiz</h1>
    </heading>
    <form action="quiz.php" method="post" class="form-style">
        <input type="submit" name="start" value="Start Quiz" class="button">
    </form>

</body>

</html>