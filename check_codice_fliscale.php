<?php
# create database connection
include "./connection.php";

if (!empty($_POST["codice_fliscale"])) {
    $query = "SELECT * FROM students_data WHERE codice_fliscale='" . $_POST["codice_fliscale"] . "'";
    //echo $query;
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        echo "<span style='color:red'> Student Already Exists .</span>";
        echo "<script>$('#submit').prop('disabled',true);</script>";
    } else {
        echo "<span style='color:green'> New Student .</span>";
        echo "<script>$('#submit').prop('disabled',false);</script>";
    }
}
