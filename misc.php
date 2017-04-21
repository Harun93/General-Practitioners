<?php
//a function to set a status message in a the SESSION variable
function flash_message($key, $value)
{
    //check if the session_start() method is called already
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
        $_SESSION[$key] = $value;
}

//prepare html to display the error message
function prepareError($error)
{
    return "<li>" . $error . "</li>";
}

//in case of error dispaly the error and exit the application
//this is normally used for ajax calls.
function sendErrorToClient($error,$type)
{
    exit("<div id='statusMessage' class=\"$type\"><h3>$type</h3><ul>" . $error . "</ul></div>");
}
//this is related to flash_message method above
//when flash_message sets a value in the SESSION against "message"
//this function is called when we can want to display that message to user
function displayStatus(){
    //check if the session_start() is called already
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_SESSION["message"])){
        echo $_SESSION["message"];
        unset($_SESSION["message"]);
    }
}
?>