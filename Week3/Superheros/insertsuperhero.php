<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

include 'phpLab1JM/Week2/dbConnect.php';

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$mainSuperpower = $_POST["mainSuperpower"];



echo "<p>{$firstName} {$lastName} {$mainSuperpower}</p>"

?>

</body>
</html>


