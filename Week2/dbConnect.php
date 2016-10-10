<?php
/**
 * Created by PhpStorm.
 * User: 1611267
 * Date: 10/10/2016
 * Time: 14:42
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