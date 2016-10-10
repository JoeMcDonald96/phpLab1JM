<?php
/**
 * Created by PhpStorm.
 * User: 1611267
 * Date: 10/10/2016
 * Time: 15:45
 */


define('hostname','us-cdbr-azure-southcentral-f.cloudapp.net');
define('username','b506d8420b1df6');
define('password','e2ca163b');
define('db_name','jm1611267db');

// Connect to csdm webdev server and select database
$db = new mysqli(
    hostname,
    username,
    password,
    db_name
);

// Test if connection was established, and print any errors
if($db->connect_errno) {
    die('Connect failed['.$db->connect_error.']');
}

// Create a SQL Query as a String
$sql_query = "SELECT * FROM marvelmovies";
// Execute the SQL Query
$reult = $db->query($sql_query);

// Iterate over $result object, one $row at a time
// Use fetch_array() to return an asociative array
while($row = $result->fetch_array()) {
    echo "<p>".$row['superheroName']."</p>";
}


// Create a SQL Query as a String
$sql_query = "SELECT * FROM marvelmovies WHERE productionStudio LIKE 'Marvel Studios'";
// Execute the SQL Query
$reult = $db->query($sql_query);

// Iterate over $result object, one $row at a time
// Use fetch_array() to return an asociative array
while($row = $result->fetch_array()) {
    echo "<p>".$row['title']."</p>";
}


// Create a SQL Query as a String
$sql_query = "SELECT * FROM marvelmovies WHERE yearReleased > 2010";
// Execute the SQL Query
$reult = $db->query($sql_query);

// Iterate over $result object, one $row at a time
// Use fetch_array() to return an asociative array
while($row = $result->fetch_array()) {
    echo "<p>".$row['title']."</p>";
}


// Create a SQL Query as a String
$sql_query = "SELECT * FROM marvelmovies WHERE title LIKE '%X-Men%'";
// Execute the SQL Query
$reult = $db->query($sql_query);

// Iterate over $result object, one $row at a time
// Use fetch_array() to return an asociative array
while($row = $result->fetch_array()) {
    echo "<p>".$row['title']."</p>";
}

$result->close();
$db->close();

?>