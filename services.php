<?php
//include the configs.
include_once "header.php";
include_once 'config/contants.php';
include_once 'config/connect_to_database.php';
$dbOperations = new DbOperations();
//prepare the query to get all the content for services page.
$sql = "select * from dynamicpages where page = 'services' order by pageorder";
//loop through the results to see the appointments.
$rs = $dbOperations->readDataFromTable($sql);
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

