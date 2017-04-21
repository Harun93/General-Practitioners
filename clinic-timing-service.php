<?php
//include db connectoin class
include_once 'connect_to_database.php';
include_once 'misc.php';

//class to manage the clinical timings for the surgery
class ClinicTimingService
{
    private $dbOperation;

    //constructor
    function __construct()
    {
        //build the connection object
        $this->dbOperation = new DbOperations();
    }

    function getTimingData(){
        return $this->dbOperation->readFullTable("clinictiming");
    }

    //to display the timing at the homepage
    function getTimingDataForSelectedDay($selected_day){
        $sql = "select * from clinictiming where day = '$selected_day'";
        return $this->dbOperation->getSingleRow($sql);
    }

    //update an existing timing for the clinic
    function updateClinicTimingForSelectedDay($selected_day,$start_time,$end_time){
        $sql = "update clinictiming set starttime = '$start_time', endtime = '$end_time' where day = '$selected_day'";

        if($this->dbOperation->updateRecord($sql)){
        }
    }
}
?>