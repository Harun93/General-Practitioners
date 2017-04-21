<?php
//configure to report all errors
error_reporting(E_ALL);
//import all the constants for the applications
include_once 'contants.php';

//the class that hold the db connection
Class DbOperations
{

    //connection object.
    private $con;

    //constructor
    function __construct()
    {
        $this->con = $this->connectToDatabase();
    }

    //getter method for connection class
    function getCon()
    {
        if (!$this->con) {
            $this->con = $this->connectToDatabase();
        }
        return $this->con;
    }

    //this method is called once when the object of the class is created
    function connectToDatabase()
    {
        //the details of the variables for connectivity
        $server = "127.0.0.1:3306";
        $username = "root";
        $password = "root";
        $database_name = "gp";
        $connection = mysqli_connect($server, $username, $password, $database_name);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        } else {
            return $connection;
        }
    }

    //a general function to implement insert query.
    function insertRow($query)
    {
        if(!(mysqli_query($this->con,$query))){
            $error = prepareError("Something went wrong while inserting" . mysqli_error($this->con));
            sendErrorToClient($error,ERROR);
        } else {
           return mysqli_insert_id($this->con);
        }

    }


    //to read a single value from the database e.g. counting the rows of table
    function readScaller($table, $condition)
    {
        $query = "select * from $table where $condition";
        $rs = mysqli_query($this->con, $query);
        if ($rs->num_rows > 0) {
            return true;
        } else return false;

    }

    //to read only one row from a table e.g. getting a particular appointment for a user
    function getSingleRow($query){
        $rs = mysqli_query($this->con,$query);
        $user = mysqli_fetch_assoc($rs);
        return $user;
    }

    //to read full table e.g. get all users for the admin
    function readFullTable($tableName){
        $sql = "select * from " . $tableName;
        return mysqli_query($this->con,$sql);
    }

    //to implement a select query based on a custom sql
    function readDataFromTable($sql){
        return mysqli_query($this->con,$sql);
    }

    //to implement the update query.
    function updateRecord($sql){
        if(mysqli_query($this->con,$sql)){
            return true;
        } else return false;
    }


}

?>
