<?php
include_once "header.php";
include_once 'config/contants.php';
include_once 'config/connect_to_database.php';

?>
<section class="register">
    <header>Register a new account or <a href="login.php">Login</a></header>
    <form action="usermanagement.php" method="post">
        <table>
            <tr>
                <td><input type="text" name="firstname" placeholder="First Name" required="required" /></td>
            </tr>
            <tr>
                <td><input type="text" name="lastname" placeholder="Last Name" required="required" /></td>
            </tr>
            <tr>
                <td><input type="text" name="phone" placeholder="Phone Number" required="required" /></td>
            </tr>
            <tr>
                <td><input type="text" name="addressline1" placeholder="Address Line 1" required="required" /></td>
            </tr>
            <tr>
                <td><input type="text" name="addressline2" placeholder="Address Line 2" /></td>
            </tr>
            <tr>
                <td><input type="text" name="postcode" placeholder="Post Code" required="required" /></td>
            </tr>
            <tr>
                <td><input type="email" name="username" placeholder="Username (email)" required="required" /></td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Password" required="required" /></td>
            </tr>
            <tr>
                <td><input type="password" name="confirmpassword" placeholder="Confirm Password" required="required" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="registersubmit" value="Register Account"/></td>
            </tr>
        </table>
    </form>
</section>
<?php
include_once "footer.php";
?>
