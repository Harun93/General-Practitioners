<?php
//include the configs.
include_once 'header.php';
include_once 'config/contants.php';
include_once 'config/connect_to_database.php';
include_once 'config/misc.php';
$dbOperations = new DbOperations();

//check if the request is to cancel an appointment from the doctor.
if(isset($_GET["cancel"])){
   //if its a cancel request then prepare the query to change the status of the appointment
   $sql = "update appointments set status = 'Cancalled' where appid = ". $_GET["cancel"];
   mysqli_query($dbOperations->getCon(),$sql);
}
//get all the appointments to be dispalyed for doctor.
$sql = "select * from appointments,users where appointments.userid = users.userid";
//loop through the results and dispaly the appointments one by one.
$rs = mysqli_query($dbOperations->getCon(),$sql); ?>
    <table class="appointments">
        <tr>
            <td>Patient</td>
            <td>Date</td>
            <td>Time</td>
            <td>Status</td>
            <td>Cancel</td>
        </tr>

<?php while($row = mysqli_fetch_assoc($rs)){
     $appid = $row["appid"];
    ?>
    <tr>
        <td><?php echo $row["firstname"] . " " . $row["lastname"]; ?></td>
        <td><?php echo $row["appdate"]; ?></td>
        <td><?php echo $row["apptime"]; ?></td>
        <td><?php echo $row["status"]; ?></td>
        <td><a href="seeappointments.php?cancel=<?php echo $appid; ?>">Cancel Appointment</a></td>
    </tr>


<?php }
echo "</table>";
include_once 'footer.php';
?>