<?php
//include the configs
include_once "header.php";
include_once 'config/contants.php';
include_once 'config/connect_to_database.php';
$dbOperations = new DbOperations();
//get the contents for the consultation page.
$sql = "select * from dynamicpages where page = 'consultation' order by pageorder";
$rs = $dbOperations->readDataFromTable($sql);
//loop through the results and show the contents on the page.
while($row = mysqli_fetch_assoc($rs)) {
    $title = $row["pagetitle"];
    $paragraph = $row["paragraph"];
    ?>
    <section>
        <header><?php echo $title; ?></header>
        <p><?php echo $paragraph; ?></p>
    </section>
    <br />
<?php } ?>


<?php include_once "footer.php" ?>

