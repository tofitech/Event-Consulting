

<?php include 'inc/header.inc.php'; ?>
<?php require 'classes/register.class.php'; ?>

<div class="sidenav animate__animated animate__backInLeft">
         <div class="login-main-text">

            <h2>E-vent Consulting<br></h2>
            <p>Register Now!</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-5 col-sm-12">
            <div class="login-form animate__animated animate__backInRight">
              <a href="main_page.php" class="btn btn-secondary">Home</a>

              <!-- ALERTS -->
              <div>
              <?php if ($txtError != ''): ?>
                <div class="<?php echo $bootstrap_danger; ?> jqHide animate__animated animate__wobble"><h6><?php echo $txtError; ?></h6></div>
              <?php endif; ?>
              </div>

               <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                  <div class="form-group">
                     <label>Username</label>
                     <input type="text" name="txt_username" class="form-control" placeholder="username..." required>
                  </div>

                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="txt_pwd" class="form-control" placeholder="password..." required>
                  </div>

                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="txt_confirmPwd" class="form-control" placeholder="confirm password..." required>
                  </div>

                  <div class="form-group">
                      <label>Firstname</label>
                      <input type="text" name="txt_fname" class="form-control" placeholder="firstname..." required>
                  </div>

                  <div class="form-group">
                      <label>Lastname</label>
                      <input type="text" name="txt_lname" class="form-control" placeholder="lastname..." required>
                  </div>

                  <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="txt_email" class="form-control" placeholder="email..." required>
                  </div>

                  <div class="form-group">
                      <label>Contact No</label>
                      <input type="number" name="txt_contact" class="form-control" placeholder="contact no..." required>
                  </div>

                  <div class="form-group">
                      <label>Address</label>
                      <input type="text" name="txt_address" class="form-control" placeholder="address..." required>
                  </div>
                  <button type="submit" name= "submit" class="btn btn-black">Register</button>
               </form>

            </div>
         </div>
      </div>


<?php include 'inc/footer.inc.php'; ?>
