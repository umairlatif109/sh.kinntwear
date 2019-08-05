<?php
include "config.php";
include "header.php";

if(isset($_POST['submit'])){

$year        = $_POST['year'];
$description = $_POST['description'];

        $sql = "INSERT INTO `our_history` (`year`, `description`) VALUES ('$year', '$description');";

            if ($conn->query($sql)) {
                echo "uploaded successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            die;
}
?>


<style>
        input{
            color: #000;
        }
</style>


<div style="margin-top:100px; background-color:lightslategray; padding: 50px;">
    <form method="post" action="" enctype="multipart/form-data" style="text-align:-webkit-center;  background-color:#3d7e7e; padding:21px;">

        <div style="font-size: xx-large;">Insert Year:</div>
        <textarea name="year"  style="padding:8px 31px; font-size:17px; color: #000;" rows="1" cols="40"></textarea><br><br>

        <div style="font-size: xx-large;">Insert Description:</div>
        <textarea name="description"  style="padding:8px 31px; font-size:17px; color: #000;" rows="3" cols="40"></textarea><br><br>

        <input type="submit" name="submit" value="submit"  style="padding:8px 31px; background-color: #000; color: #fff; font-size:17px;">
    </form>
</div>

</body>
</html>
