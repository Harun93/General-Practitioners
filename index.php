<?php
//include the configs.
    include_once "header.php";

    include_once 'config/contants.php';
    include_once 'config/connect_to_database.php';

?>
<section class="intro">
    <header>Welcome to GP Surgery</header>
    <div class="track example-1">
        <div class="inner">
            <div class="view-port">
                <div class="slider-container">
                    <div class="item">
                        <img src="http://lorempixel.com/220/124/nature/1/">
                        <p>Trailer 1</p>
                    </div>
                    <div class="item">
                        <img src="http://lorempixel.com/220/124/nature/2/">
                        <p>Trailer 2</p>
                    </div>
                    <div class="item">
                        <img src="http://lorempixel.com/220/124/nature/3/">
                        <p>Trailer 3</p>
                    </div>
                    <div class="item">
                        <img src="http://lorempixel.com/220/124/nature/4/">
                        <p>Trailer 4</p>
                    </div>
                    <div class="item">
                        <img src="http://lorempixel.com/220/124/nature/5/">
                        <p>Trailer 5</p>
                    </div>
                    <div class="item">
                        <img src="http://lorempixel.com/220/124/nature/6/">
                        <p>Trailer 6</p>
                    </div>
                    <div class="item">
                        <img src="http://lorempixel.com/220/124/nature/7/">
                        <p>Trailer 7</p>
                    </div>
                    <div class="item">
                        <img src="http://lorempixel.com/220/124/nature/8/">
                        <p>Trailer 8</p>
                    </div>
                    <div class="item">
                        <img src="http://lorempixel.com/220/124/nature/9/">
                        <p>Trailer 9</p>
                    </div>
                </div>
            </div>

            <div class="bullet-pagination"></div>
        </div>
    </div>
</section>
<?php

//include configs
$dbOperations = new DbOperations();
$timingSql = "select * from clinictiming";
$sql = "select * from dynamicpages where page = 'home' order by pageorder";
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

<section>
    <header>Opening Hours</header>
    <table class="appointments">
        <tr>
            <td>Day</td>
            <td>Start Time</td>
            <td>End Time</td>
        </tr>
        <?php
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
<?php include_once "footer.php" ?>

