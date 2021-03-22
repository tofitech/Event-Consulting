
<!DOCTYPE html>
<html lang="en">
<title>E-vent Consulting</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-book,.fa-coffee {font-size:200px}

.first-img {
  background-image: url("img/bg-callout.jpg");
  background-repeat: no-repeat;
  color: whitesmoke;
}

.third-img {
  background-image: url("img/portfolio-1.jpg");
  background-repeat: no-repeat;
  color: whitesmoke;
}


</style>
<body>

<!-- Navbar -->
<div class="w3-top  animate__animated animate__backInRight">
  <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sign in</a>
    <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Register</a>

  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="login.php" class="w3-bar-item w3-button w3-padding-large">Login</a>
    <a href="register.php" class="w3-bar-item w3-button w3-padding-large">Register</a>

  </div>
</div>

<!-- Header -->
<header class="w3-container  first-img w3-center  animate__animated animate__backInLeft" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Hola!!!</h1>
  <p class="w3-xlarge">E-event Consulting</p>
  <a href="register.php"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button></a>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container  animate__animated animate__backInRight">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Plan with Us.</h1>
      <h5 class="w3-padding-32">The platform that will make you much more productive than ever!</h5>

      <p class="w3-text-grey">The goal for this platform is to help other people manage their events with cost effective offers. No current market has ever
      done what we have to be done. Offers at a lower price and taking advantage with the powerful backend algorithm to sort all the detail just for you...</p>
    </div>

    <div class="w3-third w3-center">
       <i class="fa fa-book w3-padding-64 w3-text-blue w3-margin-right"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container animate__animated animate__backInRight">
  <div class="w3-content">
    <div class="w3-third w3-center ">
      <i class="fa fa-coffee w3-padding-64 w3-text-blue w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Never again to be bothered by planning your parties!</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64 third-img animate__animated animate__backInLeft">
    <h1 class="w3-margin w3-xlarge">"Plan at your finger tips"</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity animate__animated animate__backInUp">
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>

</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
