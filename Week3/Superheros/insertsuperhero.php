<?php
/**
 * Created by PhpStorm.
 * User: 1611267
 * Date: 17/10/2016
 * Time: 14:19
 */

include 'phpLab1JM/Week2/dbConnect.php';

$firstName = $_GET["firstName"];
$lastName = $_GET["lastName"];
$mainSuperpower = $_GET["mainSuperpower"];

echo $firstName . $lastName . $mainSuperpower;

