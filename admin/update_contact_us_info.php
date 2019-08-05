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

                        $sql  = "SELECT * FROM contact_us_info WHERE user_id='$select_id'";

                            $result = $conn->query($sql);

                           if ($result->num_rows > 0) {

                            // output data of each row

                            while($row = $result->fetch_assoc()) {

                            $user_id = $row["user_id"];
                            $address= $row['address'];
                            $phon_no= $row['phon_no'];
                            $info_mail= $row['info_mail'];
                            $marketing_mail= $row['marketing_mail'];
                            }}

                    ?>

<h2>Update Service... </h2>
    <form method="post" action="mange_contact_us_info.php?edit_form=<?php echo $user_id; ?>" enctype="multipart/form-data">

         Address:<br>
        <textarea type="textarea"  maxlength="250" rows="4" name="address" style="padding:6px 29px; font-size:18px; "> <?php echo $address ?> </textarea>
        <br><br>

        Phone No:<br>
        <textarea type="textarea"  maxlength="250" rows="4" name="phon_no" style="padding:6px 29px; font-size:18px; "> <?php echo $phon_no ?> </textarea>
        <br><br>

        Info Mail:<br>
        <textarea type="textarea"  maxlength="250" rows="4" name="info_mail" style="padding:6px 29px; font-size:18px; "> <?php echo $info_mail ?> </textarea>
        <br><br>

        Marketing Mail:<br>
        <textarea type="textarea"  maxlength="250" rows="4" name="marketing_mail" style="padding:6px 29px; font-size:18px; "> <?php echo $marketing_mail ?> </textarea>
        <br><br>
        <input type="submit" name="submit" value="Submit"  style="padding:6px 29px; font-size:18px;">
    </form>


</body>
</html>
