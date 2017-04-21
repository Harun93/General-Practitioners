<?php
include_once "header.php";
include_once 'config/contants.php';
include_once 'config/connect_to_database.php';

?>
<section class="login">
    <header>Please Login</span></header>
    <form action="usermanagement.php" method="post">
        <table>
            <tr>
                <td><input type="email" name="username" placeholder="Username" required="required" /></td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Password"  required="required" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Login"/></td>
            </tr>
            <tr>
                <td colspan="2">Not a member? <a href="reg.php">Register</a></td>
            </tr>
        </table>
    </form>
</section>
<?php
include_once "footer.php";
?>
