<?php

 require './config/config.php';
 require './config/dbh.config.php';


class Register extends Database {

   private $sql, $query, $result_email, $result_username;
   public $errNo;

    function __construct() {
    $this->sql = $this->db();
}


   public function save_user($firstname, $lastname, $email, $username, $password, $contact, $address) {
     // function to save the data

      $insert_data = "INSERT INTO customer(cust_fname, cust_lname, email_address, username, password, contact_no, address)
      VALUES('$firstname', '$lastname', '$email', '$username', '$password', '$contact', '$address');
      ";

      //$con = mysqli_connect('localhost', 'root', '', 'event_consulting');

      if ($query = $this->sql->query($insert_data)) {
        echo 'Success!';
      } else {
        echo 'Failed to connect to MYSQL' . mysqli_connect_errno();
      }

   } // end of save_user method

   public function check_duplicateEntry($email, $username) {
     $sqli_username = "SELECT * FROM customer WHERE username='$username'";
		    $sqli_email = "SELECT * FROM customer WHERE email_address='$email'";

        $result_username = $this->sql->query($sqli_username);
		    $result_email = $this->sql->query($sqli_email);

        if (mysqli_num_rows($result_username) > 0) {
          return $this->errNo = 'Username Already exist, Please try again.';
        } else if (mysqli_num_rows($result_email) > 0) {
          return $this->errNo = 'Email already exist!, Please try again.';
        }
   } // end of check_duplicateEntry method

   public function password_match($password, $confirm_password) {
     if ($password !== $confirm_password) {
       return $this->errNo = 'Password does not match!';
     } else if (strlen($password) < 8 || strlen($confirm_password) < 8) {
       return $this->errNo = 'Password does not match!';
     }
   } // end of password_match method

} // end of class Register

  // instantiate class
  $save_db = new Register();

    $firstname = '';
		$lastname = '';
    $email = '';
		$username = '';
		$password = '';
	  $contact_no = '';
    $address = '';

    $txtError = '';
    $bootstrap_danger = '';
if (isset($_POST['submit'])) {
  $firstname = trim($_POST['txt_fname']);
  $lastname = trim($_POST['txt_lname']);
  $email = trim($_POST['txt_email']);
  $username = trim($_POST['txt_username']);
  $password = trim($_POST['txt_pwd']);
  $contact = trim($_POST['txt_contact']);
 $address = trim($_POST['txt_address']);

 $confirm_password = trim($_POST['txt_confirmPwd']);


if ($firstname === '' || $lastname === '' || $email === '' || $username === '' || $password === '' || $contact === '' || $address === '') {
  echo 'Cannot be Empty';
} else if ($save_db->password_match($password, $confirm_password)) {
  $txtError = $save_db->errNo;
  $bootstrap_danger = 'alert alert-danger';

} else if ($save_db->check_duplicateEntry($email, $username)) {

  $txtError = $save_db->errNo;
   $bootstrap_danger = 'alert alert-danger';

} else {

  echo $save_db->save_user($firstname, $lastname, $email, $username, $password, $contact, $address);
  $txtError = 'Successfully Registered!';
  $bootstrap_danger = 'alert alert-success';
}



} // end of main ISSET if-else





 ?>
