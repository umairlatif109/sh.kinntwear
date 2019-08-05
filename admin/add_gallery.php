<?php
include "config.php";

include "header.php";


if(isset($_POST['submit'])){

$image = time().$_FILES['image']['name'];

    if($_FILES['image']['type']=="image/png" || $_FILES['image']['type']=="image/jpeg" || $_FILES['image']['type']=="image/jpg")
    {
        move_uploaded_file($_FILES['image']['tmp_name'],'gallery/'.$image);

        $sql = "INSERT INTO gallery(image) VALUES ('$image')";

            if ($conn->query($sql) === TRUE) {
                echo "uploaded successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

    }
    else{
        echo "This type of file is not allowed";
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        input{
            color: #000;
        }
    </style>
</head>
<body>


<div style="margin-top:100px; background-color:lightslategray; padding: 50px;">

<form method="post" action="add_gallery.php"enctype="multipart/form-data" style="text-align:-webkit-center;  background-color:#3d7e7e; padding:21px;">

<div style="font-size: xx-large;">
Insert Image:</div>

<input type="file" name="image"  style="padding:8px 31px; font-size:17px;"><br><br>

<input type="submit" name="submit" value="submit"  style="padding:8px 31px; background-color: #000; color: #fff; font-size:17px;">
</form>






</div>


</body>
</html>
