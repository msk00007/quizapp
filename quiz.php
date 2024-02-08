<?php
require_once "config.php"; // connecting database

session_start();
// echo $_SESSION["qn_count"];

$sql_question = "SELECT * FROM quiztable WHERE quiz_id=" . $_SESSION["qn_count"];
$result_question = mysqli_query($conn, $sql_question);
$row_question = mysqli_fetch_assoc($result_question);


if (isset($_POST["next"])) {
    // echo $_POST["option"] . $row_question["crct_Ans"];
    if ($_POST["option"] == $row_question["crct_Ans"]) {
        // echo "hii";
        $_SESSION["score"]++;
    }
    $_SESSION["qn_count"]++;
    try{
    $sql_question = "SELECT * FROM quiztable WHERE quiz_id=" . $_SESSION["qn_count"];
    $result_question = mysqli_query($conn, $sql_question);
    $row_question = mysqli_fetch_assoc($result_question);
    }catch(Exception $e){
        echo $e;
    } 
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
if ($_SESSION["qn_count"] <= $_SESSION["no_of_qns"]) {

    echo '<div class = "container"><h1>Question ' . $_SESSION["qn_count"] . '</h1>
    <h2>' . $row_question["question"] . '</h2>
    
    <form action="quiz.php" method="post" class="form-style" onsubmit = "return validate()">
    <div>
    
    <input type="radio" name="option" id = "A" value="'.$row_question["opt_A"].'" />
    <label for="A">'. $row_question["opt_A"] .' </label>
    </div>
    
    <div>
    <input type="radio" name="option" id = "B"value="'.$row_question["opt_B"].'" />
    <label for="B"> '. $row_question["opt_B"] .' </label>
    </div>
    <div>
    <input type="radio" name="option" id = "C" value="'.$row_question["opt_C"].'" />
    <label for="C"> '. $row_question["opt_C"] .' </label>
    </div>
    <div>
    <input type="radio" name="option" id = "D" value="'.$row_question["opt_D"].'" />
    <label for="D"> '. $row_question["opt_D"] .' </label>
    </div>
    
    <input type="submit" name="next" value="Next" class= "button" /></div>
    </form>
    ';

} else {
    echo "<div class='container'>";
    echo "<h1>Quiz Completed</h1>";
    echo "<h2>Your Score is " . $_SESSION["score"] . " out of ".$_SESSION["no_of_qns"]."</h2>";
    session_destroy();
    echo '<form action="index.php" method="post" class="form-style">
    <input type="submit" name="restart" value="Restart Quiz"  class= "button" />
    </form>
    </div>';
}
?>
    <script>
    function validate() {
        var radios = document.getElementsByName("option");
        var formValid = false;
        var i = 0;
        while (!formValid && i < radios.length) {
            if (radios[i].checked) formValid = true;
            i++;
        }
        if (!formValid) alert("Must check some option!");
        return formValid;
    }
    </script>
</body>

</html>