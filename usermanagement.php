<?php

//include the configs.
include_once "config/contants.php";
include_once "config/misc.php";
include_once "config/user.php";
include_once "config/UserService.php";
include_once "config/clinic-timing-service.php";

//check what kind of request it is.
if (isset($_POST["confirmpassword"])) {
    //register a new user.
    return register();
} else if (isset($_POST["username"])) {
    //login the user.
    return login();
}

//function to login a user.,
function login()
{
    $userService = new UserService();
    $username = $_POST["username"];
    //to see if a user exists in the database with username, passwored enterd
    if ($userService->doesUserExist($username)) {
        $user = (object)$userService->getUserByUsername($username);
        //if user exists then check if the user entered the correct password
        if ($user->password == $_POST["password"]) {
            //if the password is correct then automatically do the login for the user.
            $userService->automaticLogin($user,$user->userid);
            //send response back to the ajax request.
            header("location: index.php");
        } else {
            //if the login is not successfull. then dispaly the appropriate error.
            $login_error = prepareError("Username or Password incorrect");
            sendErrorToClient($login_error,ERROR);
        }
    }
}

//register the user
function register()
{
    //get all the details from the POST variable.
    $userService = new UserService();
    $first_name = $_POST["firstname"];
    $last_name = $_POST["lastname"];
    $phone = $_POST["phone"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $addressline1 = $_POST["addressline1"];
    $addressline2 = $_POST["addressline2"];
    $postcode = $_POST["postcode"];
    $role = "patient";

    //if the user entered unmatching passwords then send the error back.
    if ($password != $confirmpassword) {
        $error = prepareError(PASSWORD_DONT_MATCH);
        sendErrorToClient($error, ERROR);
    }
    //if the user entered the right details then
    // create a user object and store that in the database.
    $user = new User(0,$first_name, $last_name, $username, $password, $addressline1, $addressline2, $postcode, $phone, $role);
    if (!($userService->doesUserExist($username))) {
        $theUserId = $userService->addNewUser($user);
        //once user has created successfully then automatically log the user in.
        $userService->automaticLogin($user,$theUserId);
        //send the response back to the user.
        header("location: index.php");
    } else {
        //if something went wrong or username already exits
        // then dispaly the appropriate message.
        $message = prepareError(USER_ALREADY_EXISTS);
        sendErrorToClient($message, ERROR);
    }
}

//get timing fror the clinic.


?>