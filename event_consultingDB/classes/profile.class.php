
<?php

require './config/config.php';
require './config/dbh.config.php';


// $cust_id came from SESSION
// to be EDITED CHANGE INTO PURE CLASSES
$fname = '';
$lname = '';
$email = '';
$username = '';
$contact_no = '';
$address = '';
$image;

$row = '';
$db = new Database();
$fetch_data = "SELECT * FROM customer WHERE cust_id='$cust_id'";
$result = mysqli_query($db->db(), $fetch_data);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_array($result);
  $fname = $row['cust_fname'];
  $lname = $row['cust_lname'];
  $email = $row['email_address'];
  $username = $row['username'];
  $contact_no = $row['contact_no'];
  $address = $row['address'];
  $image = '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"  class="rounded-circle" width="200" height="200">';
}



 ?>
