<?php
//the request is post to this page to delete a user.
// get the db connection
    include 'config/connect_to_database.php';
    $dbOperations = new DbOperations();
    //query to delete user
    $sql = "delete from users where userid = " . $_GET["user"];
    mysqli_query($dbOperations->getCon(),$sql);
    //go back to the page where the request came from.
    header("Location: adminusers.php");

?>