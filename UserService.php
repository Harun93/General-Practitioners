<?php
//include the database connectivity
include_once 'connect_to_database.php';

//this class handles all database operations related to user.
class UserService
{
    private $dbOperation;

    //constructor
    function __construct()
    {
        $this->dbOperation = new DbOperations();
    }

    //check if a user exists already.
    function doesUserExist($username)
    {
        $dbOperation = new DbOperations();
        return  $dbOperation->readScaller("users"," username = '$username'");
    }

    //register a new user
    function addNewUser($user){
        $sql = "insert into users (firstname,lastname,username,password,addressline1,addressline2,postcode,phone,role)" .
            " VALUES ('$user->firstName','$user->lastName','$user->username','$user->password','$user->addressline1','$user->addressline2','$user->postcode','$user->phone','$user->role')";

        return $this->dbOperation->insertRow($sql);

    }

    //when we have verified a users's validity
    // we can call this function to log the user in
    //this method will set the necessary values in SESSION
    function automaticLogin($user,$userid){
        session_start();
        $_SESSION["username"] = $user->username;
        $_SESSION["userid"] = $userid;
        //to determine if a user is admin or doctor we need
        // to check what is value of $user->role and set
        // a value against it in the SESSION so that we can
        // determine what options to display
        if($user->role == "admin"){
            $_SESSION["isAdmin"] = true;
        } else if($user->role == "doctor"){
            $_SESSION["isDoctor"] = true;
        }
    }

    //get a user by its username
    function getUserByUsername($username){
        $sql = "select * from users where username = '$username'";
        $user = $this->dbOperation->getSingleRow($sql);
        return $user;
    }
}

?>