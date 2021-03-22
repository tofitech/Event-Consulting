<?php include 'inc/header.inc.php'; ?>
<?php include 'nav_landing_page.php'; ?>
<?php require 'classes/profile.class.php'; ?>
<div class="container my-4">


  <hr>

  <p class="font-weight-bold"></p>

      <!--Card-->
  <div class="card">

    <!--Card content-->
    <div class="card-body">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Wedding: Rosales Wedding team</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">NOTE: Inquire regarding the package this form will be submitted to
          the organizer's email with the list of package you choose.
        </p>
        <p>Keep lines open they will contact you as soon as possible. Via Email or Phone</p>

        <div class="row">

          <!--Grid column-->
          <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="contact_org.php" method="POST">

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $fname . ' ' . $lname; ?>" disabled>
                    <label for="name" class="">Your name</label>
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $contact_no; ?>">
                    <label for="name" class="">Contact No.</label>
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="email" name="email" class="form-control" value="<?php echo $email ?>" disabled>
                    <label for="email" class="">Your email</label>
                  </div>
                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <input type="text" id="subject" name="subject" class="form-control" value="sanderson_food@gmail.com" disabled>
                    <label for="subject" class="">Package details</label>
                  </div>
                </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                  <div class="md-form">
                    <textarea type="text" id="message" name="message" rows="2"
                      class="form-control md-textarea" disabled>The wedding setup will be plan by the organizer for more details we can connect you to available organizer for more details about this package. This is the most popular package deal currently in the market.
                        Venue PHP 34,500
                        Catering 12 type of dish PHP 12,300
                        Transportation Van PHP 1,600
                        Honeymoon Hotel PHP 5,000 per night
                        Total amount for this bundle PHP 53,400
                    </textarea>
                    <label for="message">Package</label>
                  </div>

                </div>
              </div>
              <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
              <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
              <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p></p>
              </li>

              <li><i class="mt-4">Contact No.</i>
                <p>+ 01 234 567 89</p>
              </li>

              <li><i class="mt-4"></i>
                <p>rosales_wedding@outlook.com</p>
              </li>
            </ul>
          </div>
          <!--Grid column-->

        </div>

    </div>

  </div>
  <!--/.Card-->

</div>







<?php include 'inc/footer.inc.php'; ?>
