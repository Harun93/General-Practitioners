<?php
//include the configs.
    include_once 'header.php';
    include_once 'config/contants.php';
    include_once 'config/connect_to_database.php';
    include_once 'config/misc.php';
    $dbOperations = new DbOperations();

    //check if request is to update a content item
    if(isset($_POST["contentid"])){
        //if the request is to update the content then get the updated values
        //from the post.
        $heading = $_POST["title"];
        $para = $_POST["paragraph"];
        $id = $_POST["contentid"];
        //prepare the update query to update the the content
        $sql = "update dynamicpages set pagetitle='$heading' ,  paragraph = '$para' where id = ". $id;
        if($dbOperations->updateRecord($sql)){
            //dispaly the appropriate message after the update
            echo "<div id='statusMessage' class=\"success\"><h3>Success</h3><ul>Record Updated</ul></div>";
        } else {
            echo "<div id='statusMessage' class=\"error\"><h3>Success</h3><ul>Something went wrong</ul></div>";
        }
    }

    //check which page is required
    $selectedPage = $_GET["page"];
    //get contents of that page.
    $sql = "select * from dynamicpages where page = '$selectedPage' order by pageorder";
    $rs = $dbOperations->readDataFromTable($sql);
    //parepare the title of the page
    echo "<h1>Edit $selectedPage Page Content</h1>";
    //loop through the result set and
    while($row = mysqli_fetch_assoc($rs)){
        $title = $row["pagetitle"];
        $paragraph = $row["paragraph"];
        $pageorder = $row["pageorder"];
        $contentid = $row["id"];
        ?>

        <form id="homepagecontentfomr" method="post" action="editpagecontent.php?page=<?php echo $selectedPage ?>">
            <table>
                <tr>
                    <td>
                        <input type="text" value="<?php echo $title ?>" name="title" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="paragraph" rows="10" cols="70" ><?php echo $paragraph; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" value="<?php echo $pageorder?>" name="pageorder" />
                        <input type="hidden" value="<?php echo $contentid?>" name="contentid" />
                        <input type="submit" value="Update" />
                    </td>
                </tr>
            </table>
        </form>
        <br />
        <hr />
<?php }

?>

<?php include_once 'footer.php'; ?>
