<?php
include "config.php";
include "header.php";

$select_id =  ($_GET['id']);

if (isset($_POST['submit'])){
    $update_id = @$_GET['edit_form'];
    $address = $_POST['address'];
    $phon_no = $_POST['phon_no'];
    $info_mail = $_POST['info_mail'];
    $marketing_mail = $_POST['marketing_mail'];

   if(!empty($image)){
      $sql = "UPDATE contact_us_info SET  address='$address',phon_no='$phon_no',info_mail='$info_mail',marketing_mail='$marketing_mail'  WHERE user_id='$update_id'";
   } else {
      $sql = "UPDATE contact_us_info SET  address='$address',phon_no='$phon_no',info_mail='$info_mail',marketing_mail='$marketing_mail'  WHERE user_id='$update_id' ";
   }
   if ($conn->query($sql)) {
      echo "<script>window.open('mange_contact_us_info.php?updated=Post Updated', '_self')</script>";
   } else {
      echo "Error updating record: " . $conn->error;
   }
    //die();
}
        ?>
<html>
<head>
<style>

*{padding:0px; margin:0px;}

table, th,td {
    border: 1px solid black;
    border-collapse: collapse;
        }
 th, td {
    padding: 8px;
 }
 input {
     float: right;
    margin-right: 295px;
    margin-top: -67px;
    padding: 7px 22px;
    font-weight: 700;
    background-clip: padding-box;
     }
      th{
        color: #000;
     }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<table style="width:1100px;  margin:135px 210px; ">
<caption style="color: #fff; font-size: 23px;">Main Page Of department </caption>
<tr>
    <th>User Id</th>
    <th>Address</th>
    <th>Phone No</th>
    <th>Info Mail</th>
    <th>Marketing Mail</th>
    <th>Action</th>
</tr>
                    <?php
                        $sql = "SELECT * FROM contact_us_info ";

                           $result = $conn->query($sql);
                           if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {

                            $user_id = $row["user_id"];
                            $address= $row['address'];
                            $phon_no= $row['phon_no'];
                            $info_mail= $row['info_mail'];
                            $marketing_mail= $row['marketing_mail'];
                    ?>

                    <tr>
                        <td><?php echo $user_id; ?></td>
                        <td><?php echo $address; ?></td>
                        <td><?php echo $phon_no; ?></td>
                        <td><?php echo $info_mail; ?></td>
                        <td><?php echo $marketing_mail; ?></td>
                        <td>
                            <a href="update_contact_us_info.php?id=<?php echo $user_id; ?>" style="font-size: 29px;" ><i class="fa fa-pencil-square-o" aria-hidden="true" style="color: #ff7600;"></i></a>
                            <a href="del_contact_us_info.php?id=<?php echo $user_id; ?>" onClick="return do_confirm();" style="margin-left:12px; font-size: 29px;"><i class="fa fa-trash" aria-hidden="true" style="color: red;"></i></a>

                        </td>
                    </tr>
                    <?php }} ?>

</table>

<!-- for delete varification -->
<script language="javascript">
  function do_confirm()
  {
   var a = confirm("Are you sure, you want to delete the record?");
   return a;
  }
  </script>
</body>
</html>
