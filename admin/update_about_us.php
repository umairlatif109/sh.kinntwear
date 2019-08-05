   <?php
include "config.php";

/* This query for delete item from table */

$select_id =  ($_GET['id']);

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body style="width:1000px;  margin:95px 243px;  text-align:-webkit-center;">


                    <?php

                        $sql  = "SELECT * FROM about_us WHERE user_id='$select_id'";

                            $result = $conn->query($sql);

                           if ($result->num_rows > 0) {

                            // output data of each row

                            while($row = $result->fetch_assoc()) {

                            $user_id = $row["user_id"];

                            $werbpage= $row['werbpage'];
                            }}

                    ?>

<h2>Update Service... </h2>
    <form method="post" action="update_about_us.php?edit_form=<?php echo $user_id; ?>" enctype="multipart/form-data">

         Werbpage:<br>
        <textarea type="textarea"  maxlength="250" rows="9" name="werbpage" style="padding:6px 29px; font-size:18px; "> <?php echo $werbpage ?> </textarea>
        <br><br>
        <input type="submit" name="submit" value="Submit"  style="padding:6px 29px; font-size:18px;">
    </form>

<?php

if (isset($_POST['submit'])){

 $update_id = @$_GET['edit_form'];

 $werbpage = $_POST['werbpage'];




 if(!empty($image)){



 $sql = "UPDATE about_us SET  werbpage='$werbpage'  WHERE user_id='$update_id'";
 }
 else{
  $sql = "UPDATE about_us SET  werbpage='$werbpage' WHERE user_id='$update_id'";
 }




  if ($conn->query($sql) === TRUE) {

   echo "<script>window.open('mange_about_us.php?updated=Post Updated', '_self')</script>";

 } else {

 echo "Error updating record: " . $conn->error;

 }

}
?>

</body>
</html>
