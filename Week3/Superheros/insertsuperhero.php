<?php

include 'phpLab1JM/Week2/dbConnect.php';

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$mainSuperpower = $_POST["mainSuperpower"];

$sql = "INSERT INTO superheros (firstName, lastName, mainSuperpower) VALUES ('$firstName', '$lastName', '$mainSuperpower')";

if (mysqli_query($db, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("location:index.php");

?>


