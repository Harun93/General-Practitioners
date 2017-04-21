<?php
//get all the configs needed for the operations
include_once 'header.php';
include_once 'config/contants.php';
include_once 'config/misc.php';
include_once 'config/connect_to_database.php';

//get all users from database
$dbOperations = new DbOperations();
//build a table to dispaly those users for the admin user.
$rs = $dbOperations->readFullTable("users"); ?>

    <table class="appointments">
    <tr>
        <td style="width:100px !important">First Name</td>
        <td style="width:100px !important">Last Name</td>
        <td style="width:100px !important">Phone</td>
        <td style="width:100px !important">Address Line 1</td>
        <td style="width:100px !important">Address Line 2</td>
        <td style="width:100px !important">Post Code</td>
        <td style="width:100px !important">Username</td>
        <td style="width:100px !important">Password</td>
        <td style="width:100px !important">Role</td>
        <td style="width:100px !important">Update</td>
        <td style="width:100px !important">Delete</td>

    </tr>

<?php while ($user = mysqli_fetch_assoc($rs)) { ?>
    <form id="usersForm" class="usersForm" action="updateuser.php" method="post">
        <tr>
            <td><input style="width:100px !important" type="text" name="firstname" placeholder="First Name" value="<?php echo $user["firstname"]; ?>" required="required" /></td>
            <td><input style="width:100px !important"type="text" name="lastname" placeholder="Last Name" required="required" value="<?php echo $user["lastname"]; ?>"   /></td>
            <td><input style="width:100px !important"type="text" name="phone" placeholder="Phone Number" required="required" value="<?php echo $user["phone"]; ?>"  /></td>
            <td><input style="width:100px !important"type="text" name="addressline1" placeholder="Address Line 1" required="required" value="<?php echo $user["addressline1"]; ?>"  /></td>
            <td><input style="width:100px !important"type="text" name="addressline2" placeholder="Address Line 2" value="<?php echo $user["addressline2"]; ?>"  /></td>
            <td><input style="width:100px !important"type="text" name="postcode" placeholder="Post Code" required="required" value="<?php echo $user["postcode"]; ?>"  /></td>
            <td><input style="width:100px !important"type="text" name="username" placeholder="Username (email)" required="required" value="<?php echo $user["username"]; ?>"  /></td>
            <td><input style="width:100px !important"type="text" name="password" placeholder="Password" required="required" value="<?php echo $user["password"]; ?>"  /></td>
            <td>
                <select style="width:100px !important" name="role">
                    <option value="admin"  <?php if ($user["role"] == "admin") { echo "selected=\"selected\""; } ?> >Admin</option>
                    <option value="doctor" <?php if ($user["role"] == "doctor"){ echo "selected=\"selected\""; } ?> >Doctor</option>
                    <option value="patient" <?php if ($user["role"] == "patient") { echo "selected=\"selected\""; } ?> >Patient</option>
                </select>

            <td>
                <input type="hidden" name="userid" value="<?php echo $user["userid"]; ?>"  />
                <input type="submit" value="Update"/>
            </td>
            <td><a href="deleteuser.php?user=<?php echo $user["userid"]; ?>">Delete</a></td>
        </tr>
    </form>


<?php }
?>
    </table>
