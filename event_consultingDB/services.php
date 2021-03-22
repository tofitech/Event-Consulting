<?php
    include 'inc/header.inc.php';
    include 'nav_landing_page.php';

 ?>
<style>
  body {
    height: 250vh;
    background-color:  whitesmoke;
  }
</style>

     <br>

<div class="container">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img class="d-block w-100" src="http://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Wedding_rings.jpg/800px-Wedding_rings.jpg" alt="First slide" width="100" height="500">
    <div class="carousel-caption d-none d-md-block">
   <h5>Excitement awaits you.</h5>
   <p>A very special day of your life.</p>
 </div>
  </div>
  <div class="carousel-item">
     <img class="d-block w-100" src="https://media.sciencephoto.com/f0/17/67/98/f0176798-800px-wm.jpg" alt="Third slide" width="100" height="500">
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="https://todaysbride.com/wp-content/uploads/2020/05/Stephany-Perea-SWW21-800px.jpg" alt="Third slide" width="100" height="500">
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>


</div>  <!--end for carousel container -->
<br>

<div class="container">
  <ul class="list-group">
<li class="list-group-item active"> <b>Wedding information.</b> </li>
<li class="list-group-item"><p>The wedding setup will be plan by the organizer for more details we can connect you to available organizer for more details about this package. This is the most popular package deal currently in the market.</p></li>
<li class="list-group-item">Venue <b>PHP 34,500</b> </li>
<li class="list-group-item">Catering 12 type of dish <b>PHP 12,300</b> </li>
<li class="list-group-item">Transportation Van <b>PHP 1,600</b> </li>
<li class="list-group-item">Honeymoon Hotel <b>PHP 5,000</b> per night</li>
<li class="list-group-item">Total amount for this bundle <b>PHP 53,400</b></li>
</ul>
<a href="contact_org.php"><button type="button" class="btn btn-primary btn-lg btn-block">Contact organizer</button></a>
</div>


















   </body>
 </html>


 <?php
     include 'inc/footer.inc.php';
  ?>
