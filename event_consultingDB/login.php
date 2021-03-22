
<?php include 'inc/header.inc.php'; ?>
<?php require 'classes/login.class.php'; ?>

<div class="sidenav animate__animated animate__backInLeft">
         <div class="login-main-text">

            <h2>E-vent Consulting<br></h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form animate__animated animate__backInRight">
              <div>
              <?php if ($txtError != ''): ?>
                <div class="<?php echo $bootstrap_danger; ?> jqHide animate__animated animate__wobble"><h6 class="text-center"><?php echo $txtError; ?></h6></div>
              <?php endif; ?>
              </div>
               <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                   <a href="main_page.php" class="btn btn-secondary">Home</a>
                  <div class="form-group">
                     <label>Username or Email</label>
                     <input type="text" name="txt_user_email" class="form-control" placeholder="enter email or username...">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="txt_pwd" class="form-control" placeholder="Password">
                  </div>
                  <div>
                    <a href="forgot_password.php">Forgot password</a>
                  </div>
                  <button type="submit" name="login" class="btn btn-black">Login</button>
                  <a href="register.php" class="btn btn-black">Register</a>
               </form>

            </div>
         </div>
      </div>


<?php include 'inc/footer.inc.php'; ?>
