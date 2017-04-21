<?php
//include the configs.
include_once 'config/contants.php';
include_once 'config/connect_to_database.php';

$dbOperations = new DbOperations();

//get the updated values for a user.
$first_name = $_POST["firstname"];
$last_name = $_POST["lastname"];
$phone = $_POST["phone"];
$username = $_POST["username"];
$password = $_POST["password"];
$addressline1 = $_POST["addressline1"];
$addressline2 = $_POST["addressline2"];
$postcode = $_POST["postcode"];
$role = $_POST["role"];
$userid = $_POST["userid"];

//prepare the sql query to update the user details.
$sql = "update users set firstname = '$first_name', lastname = '$last_name', phone = '$phone', username='$username', password='$password'".
    ", addressline1='$addressline1', addressline2='$addressline2', postcode='$postcode', role='$role' where userid = $userid";

mysqli_query($dbOperations->getCon(),$sql);
//to back to the page where the request came from.
header("Location: adminusers.php");