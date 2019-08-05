<?php
include "config.php";

include "header.php";


if(isset($_POST['submit'])){

$address = $_POST['address'];
$phon_no = $_POST['phon_no'];
$info_mail = $_POST['info_mail'];
$marketinng_mail = $_POST['marketinng_mail'];

        $sql = "INSERT INTO contact_us_info(address, phon_no, info_mail, marketing_mail) VALUES ('$address', '$phon_no', '$info_mail', '$marketinng_mail')";

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

        <div style="font-size: xx-large;">Insert Address:</div>
        <textarea name="address"  style="padding:8px 31px; font-size:17px; color: #000;" rows="4" cols="40"></textarea><br><br>

         <div style="font-size: xx-large;">Insert Phone No:</div>
        <textarea name="phon_no"  style="padding:8px 31px; font-size:17px; color: #000;" rows="2" cols="40"></textarea><br><br>

         <div style="font-size: xx-large;">Insert Info Mail:</div>
        <textarea name="info_mail"  style="padding:8px 31px; font-size:17px; color: #000;" rows="2" cols="40"></textarea><br><br>

        <div style="font-size: xx-large;">Insert Marketing Mail:</div>
        <textarea name="marketinng_mail"  style="padding:8px 31px; font-size:17px; color: #000;" rows="2" cols="40"></textarea><br><br>

        <input type="submit" name="submit" value="submit"  style="padding:8px 31px; background-color: #000; color: #fff; font-size:17px;">
    </form>
</div>

</body>
</html>
