<?php
//get all the configs
include_once 'header.php';
include_once 'config/contants.php';
include_once 'config/connect_to_database.php';
include_once 'config/misc.php';

if(!isset($_SESSION["username"])){
    exit("Please <a href=\"login.php\">Login </a>first");
}

//get all the appointments for the logged in user.
$dbOperations = new DbOperations();
//if a user is logged in then SESSION will contain a "userid" for the user
$userid = $_SESSION["userid"];
$sql = "select * from appointments where userid = " . $userid;
//set the flag to find if a user has appointments booked or not
$hasAppointments = false;
$user = null;
//if the user doesnot have any appointments then the count will be 0
$rs = mysqli_query($dbOperations->getCon(), $sql);

if (mysqli_num_rows($rs) > 0) {
    //user doesn't have any appointment
    $hasAppointments = true;
}
displayStatus();
?>

<section>
<header>Book an Appointment</header>
<form action="bookappointment.php" method="post">
    <table>
        <tr>
            <td>Date</td>
            <td>
                <select name="day">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="1">5</option>
                    <option value="1">6</option>
                    <option value="1">7</option>
                    <option value="1">8</option>
                    <option value="1">9</option>
                    <option value="1">10</option>
                    <option value="1">11</option>
                    <option value="1">12</option>
                    <option value="1">13</option>
                    <option value="1">14</option>
                    <option value="1">15</option>
                    <option value="1">16</option>
                    <option value="1">17</option>
                    <option value="1">18</option>
                    <option value="1">19</option>
                    <option value="1">20</option>
                    <option value="1">21</option>
                    <option value="1">22</option>
                    <option value="1">23</option>
                    <option value="1">24</option>
                    <option value="1">25</option>
                    <option value="1">26</option>
                    <option value="1">27</option>
                    <option value="1">28</option>
                    <option value="1">29</option>
                    <option value="1">30</option>
                    <option value="1">31</option>
                </select>

                <select name="month">
                    <option value="1">Jan</option>
                    <option value="2">Feb</option>
                    <option value="3">Mar</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">Jul</option>
                    <option value="8">Aug</option>
                    <option value="9">Sep</option>
                    <option value="10">Oct</option>
                    <option value="11">Nov</option>
                    <option value="12">Dec</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Time</td>
            <td>
                <select name="time">
                    <option value="09:00">09:00</option>
                    <option value="09:30">09:30</option>
                    <option value="10:00">10:00</option>
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:30">11:30</option>
                    <option value="12:00">12:00</option>
                    <option value="12:30">12:30</option>
                    <option value="14:00">14:00</option>
                    <option value="14:30">14:30</option>
                    <option value="15:00">15:00</option>
                    <option value="15:30">15:30</option>
                    <option value="16:00">16:00</option>
                    <option value="16:30">16:30</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="userid" value="<?php echo $userid; ?>"/>
                <input type="submit" value="Book Appointment"/>
            </td>
        </tr>
    </table>
</form>
<table>

</table>
</section>
<section>
<header>Your previous appointments</header>
<?php if ($hasAppointments) { ?>
    <table class="appointments">
        <tr>
            <td>Date</td>
            <td>Time</td>
            <td>Status</td>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($rs)) { ?>
            <tr>
                <td><?php echo $row["appdate"]; ?></td>
                <td><?php echo $row["apptime"]; ?></td>
                <td><?php echo $row["status"]; ?></td>
            </tr>
        <?php } ?>
    </table>
<?php }
?>
</section>
<?php include_once 'footer.php'; ?>

