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

                        $sql  = "SELECT * FROM our_history WHERE user_id='$select_id'";
                            $result = $conn->query($sql);
                           if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {

                            $user_id = $row["user_id"];
                            $year= $row['year'];
                            $description= $row['description'];
                            }}

                    ?>

<h2>Update Page... </h2>
    <form method="post" action="mange_our_history_carousel.php?edit_form=<?php echo $user_id; ?>" enctype="multipart/form-data">

         Years:<br>
        <textarea type="textarea"  maxlength="250" rows="2" name="year" style="padding:6px 29px; font-size:18px; "> <?php echo $year ?> </textarea>
        <br><br>

        Phone No:<br>
        <textarea type="textarea"  maxlength="250" rows="3" name="description" style="padding:6px 29px; font-size:18px; "> <?php echo $description ?> </textarea>
        <br><br>

        <input type="submit" name="submit" value="Submit"  style="padding:6px 29px; font-size:18px;">
    </form>


</body>
</html>
