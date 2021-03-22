<?php
require './config/config.php';
require './config/dbh.config.php';
$fname = '';
$lname = '';
$position = '';
$image;
$row = '';
$db = new Database();
$fetch_data1 = "SELECT * FROM admin_developer WHERE admin_id=1";
$result = mysqli_query($db->db(), $fetch_data1);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_array($result);
  $fname = $row['fname'];
  $lname = $row['lname'];
  $position = $row['position'];
  $image = '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" alt=""  width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">';
}



 ?>
