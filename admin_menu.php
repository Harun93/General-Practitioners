<?php if(isset($_SESSION["isAdmin"])){?>
    <!-- this part will be executed only if the logged in user is admin-->
    <div class="adminlinks">
    <table>
        <tr>
            <td><a href="timings.php">Clinic Timings</a></a></td>
            <td><a href="editpagecontent.php?page=Home">Home Page Content</a></a></td>
            <td><a href="editpagecontent.php?page=Services">Services Page Content</a></a></td>
            <td><a href="editpagecontent.php?page=Contact">Contact Us Page Content</a></a></td>
            <td><a href="adminusers.php">User Management</a></a></td>
        </tr>
    </table>
        <br />
        <table>
        <tr>
            <td><a href="editpagecontent.php?page=Consultation">Consulation</a></a></td>
        </tr>
    </table>
    </div>
<?php } else if (isset($_SESSION["isDoctor"])){ ?>
    <!--this parat will be executed only if the logged in user is doctor-->
    <div class="adminlinks">
    <table>
        <tr>
            <td><a href="seeappointments.php">See Appointments</a></a></td>
        </tr>
    </table>
    </div>
<?php } ?>