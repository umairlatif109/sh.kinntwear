<?php
include "config.php";

include "header.php";


if(isset($_POST['submit'])){


$werbpage = $_POST['werbpage'];

		$sql = "INSERT INTO about_us(werbpage) VALUES ('$werbpage')";

			if ($conn->query($sql) === TRUE) {
				echo "uploaded successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
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

	<form method="post" action="add_about_us.php"enctype="multipart/form-data" style="text-align:-webkit-center;  background-color:#3d7e7e; padding:21px;">

		<div style="font-size: xx-large;">
		Insert Werbpage:</div>

		<textarea name="werbpage"  style="padding:8px 31px; font-size:17px; color: #000;" rows="4" cols="40"></textarea><br><br>

		<input type="submit" name="submit" value="submit"  style="padding:8px 31px; background-color: #000; color: #fff; font-size:17px;">
	</form>

</div>


</body>
</html>
