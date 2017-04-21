<?php
    //start the session
    session_start();
    //check if user is logged in by looking at "username" in SESSION
    if(isset($_SESSION["username"])){
        //remove "username", and the other atributes which are set
        // when a user logs in
        unset($_SESSION["username"]);
        unset($_SESSION["userid"]);
        unset($_SESSION["isAdmin"]);
        unset($_SESSION["isDoctor"]);
        //destory the session
        session_destroy();
    }
    //after logout return back the homepage of the website.
    header("Location: index.php");
?>