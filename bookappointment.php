<?php
//include the configs.
include_once 'config/contants.php';
include_once 'config/connect_to_database.php';
include_once 'config/misc.php';
//get db connection
$dbOperations = new DbOperations();
//prepare data to be inserted
$date = date("Y") ."-" . $_POST["month"]. "-" . $_POST["day"];
$time = $_POST["time"];
//prepare SQL
$sql = "select * from appointments where apptime = '$time' and appdate = '$date'";
//run the query to check if the user already has appointment on that time
//or if someone else has already booked that slot
$rs = mysqli_query($dbOperations->getCon(),$sql);
// check the result
if(mysqli_num_rows($rs) > 0){
    flash_message("message", "<div id='statusMessage' class='info'><h3>Info</h3><ul><li>This slot is not avaialble</li></ul></div>");
 } else {
    //the slot is free
    $userid = $_POST["userid"];
    //create a new appointment for the user
    $sql = "insert into appointments (userid,apptime,appdate,status) values ($userid,'$time','$date', 'Confirmed')";
    mysqli_query($dbOperations->getCon(),$sql);
    flash_message("message", "<div id='statusMessage' class='success'><h3>Success</h3><ul><li>Your appointmenet is booked</li></ul></div>");
}
//go back to the appointments page.
header("Location: appointments.php");
?>