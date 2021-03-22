<?php

session_start();

require './config/config.php';
require './config/dbh.config.php';


$user = '';
$pass = '';
$row = '';

$txtError = '';
$bootstrap_danger = '';

if (isset($_POST['login'])) {
  $user = $_POST['txt_user_email'];
  $pass = $_POST['txt_pwd'];
  extract($_POST);
  $db = new Database();
  $sql_user=mysqli_query($db->db(), "SELECT * FROM customer WHERE username='$user' AND password='$pass'");
  $sql_email=mysqli_query($db->db(), "SELECT * FROM customer WHERE email_address='$user' AND password='$pass'");
  $row_user = mysqli_fetch_array($sql_user);
  $row_email = mysqli_fetch_array($sql_email);

  if (is_array($row_user)) {

    $_SESSION["cust_id"] = $row_user['cust_id'];
    $_SESSION["cust_fname"] = $row_user['cust_fname'];
    $_SESSION["cust_lname"] = $row_user['cust_lname'];
    header("Location: landing_page.php");

  } elseif (is_array($row_email)) {

    $_SESSION["cust_id"] = $row_email['cust_id'];
    $_SESSION["cust_fname"] = $row_email['cust_fname'];
    $_SESSION["cust_lname"] = $row_email['cust_lname'];
    header("Location: landing_page.php");

  }
   else {
     $txtError = 'Invalid credentials, Please try again.';
    $bootstrap_danger = 'alert-danger';
  }

}



// turn into class




 ?>
