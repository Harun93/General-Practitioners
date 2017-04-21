<?php
    //include the configs.

    include_once "config/contants.php";
    include_once "header.php";
    include_once "config/clinic-timing-service.php";
    include_once 'config/connect_to_database.php';


    //create object for Clinical Service to do its operations
    $clinicTimingService = new ClinicTimingService();
    $timings = $clinicTimingService->getTimingData();
    $dbOperations = new DbOperations();

$row = "";
if (isset($_POST["selectedDay"])) {
    //update the clinic timing
    $row = updateClinicTimingForSelectedDay();
}



//update the clinic timing.
function updateClinicTimingForSelectedDay()
{
    $selected_day = $_POST["selectedDay"];
    $start_time = $_POST["starttime"];
    $end_time = $_POST["endtime"];
    $clinicTimingService = new ClinicTimingService();
    return $clinicTimingService->updateClinicTimingForSelectedDay($selected_day, $start_time, $end_time);

}

?>
<section>
    <header>Opening Hours</header>
    <table class="appointments">
        <tr>
            <td>Day</td>
            <td>Start Time</td>
            <td>End Time</td>
        </tr>
        <?php
        $timingSql = "select * from clinictiming";
        $rs = mysqli_query($dbOperations->getCon(),$timingSql);
        while($row = mysqli_fetch_assoc($rs)){ ?>
            <tr>
                <td><?php echo $row["day"]; ?></td>
                <td><?php echo $row["starttime"]; ?></td>
                <td><?php echo $row["endtime"]; ?></td>
            </tr>
        <?php    }
        ?>
    </table>


</section>
<section id="timingSection">
    <header>Update timings</header>
    <form method="post" action="timings.php">
        <table>
            <tr>
                <td>
                    <select id="clinicTimingDropDown" name="selectedDay">
                        <option <?php if($row == "") { echo "selected='selected'" ;}?> value='non-selection'>Select A Day</option>
                        <?php while($day = mysqli_fetch_assoc($timings)){ ?>
                            <option <?php if($row != "") { if($row["day"] == $day["day"]) { echo "selected='selected'" ; }}?> value='<?php echo $day["day"]?>'><?php echo $day["day"]?></option>
                        <?php }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="time" name="starttime" value="<?php if($row != "") { echo $row["starttime"]; } else { echo $day["starttime"]; }?>" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="time" name="endtime" value="<?php if($row != "") { echo $row["endtime"]; } else { echo $day["endtime"]; } ?>" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submitbutton" value="Update" />
                </td>
            </tr>
        </table>
    </form>
</section>
<?php include_once "footer.php" ?>
