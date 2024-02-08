<?php

$conn = mysqli_connect("localhost","root","","quizDB");
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

?>