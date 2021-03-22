<?php
    include 'inc/header.inc.php';
    include 'nav_landing_page.php';
    require 'classes/profile.class.php';

 ?>

 <style media="screen">
   body {
       background-color:  whitesmoke;
   }
 </style>

 <div class="container">
     <div class="main-body">
           <div class="row gutters-sm">
             <div class="col-md-4 mb-3">
               <div class="card">
                 <div class="card-body">
                   <div class="d-flex flex-column align-items-center text-center">
                     <?php echo $image; ?>
                     <div class="mt-3">
                       <h4><?php echo $username; ?></h4>
                       <p class="text-secondary mb-1">Info</p>
                       <p class="text-muted font-size-sm"><?php echo $address; ?></p>
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                         EDIT PROFILE
                       </button>

                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                         HISTORY
                        </button>

                     </div>
                   </div>
                 </div>
               </div>
               <div class="card mt-3">
                 <ul class="list-group list-group-flush">
                   <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                     <h6>Customize</h6>
                     <span class="text-secondary">Bundles</span>
                   </li>
                   <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Custom Service</h6>
                     <span class="text-secondary"><a href="pay.php"><button>Reach Us</button></a></span>

                 </ul>
               </div>
             </div>
             <div class="col-md-8">
               <div class="card mb-3">
                 <div class="card-body">
                   <div class="row">
                     <div class="col-sm-3">
                       <h6 class="mb-0">Full name</h6>
                     </div>
                     <div class="col-sm-9 text-secondary">
                       <?php echo $fname . ' ' . $lname; ?>
                     </div>
                   </div>
                   <hr>
                   <div class="row">
                     <div class="col-sm-3">
                       <h6 class="mb-0">Email</h6>
                     </div>
                     <div class="col-sm-9 text-secondary">
                       <?php echo $email; ?>
                     </div>
                   </div>
                   <hr>
                   <div class="row">
                     <div class="col-sm-3">
                       <h6 class="mb-0">Phone</h6>
                     </div>
                     <div class="col-sm-9 text-secondary">
                       <?php echo $contact_no; ?>
                     </div>
                   </div>

                   <hr>
                   <div class="row">
                     <div class="col-sm-3">
                       <h6 class="mb-0">Address</h6>
                     </div>
                     <div class="col-sm-9 text-secondary">
                      <?php echo $address; ?>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="row gutters-sm">
                 <div class="col-l-6 mb-3">
                   <div class="card h-100">
                     <div class="card-body">
                       <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">History</i>Transaction latest logs</h6>
                       <table class="table table-striped">
                         <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">Transc id</th>
                              <th scope="col">Budget amount</th>
                              <th scope="col">Product name</th>
                              <th scope="col">Bundle name</th>
                              <th scope="col">Payment</th>
                              <th scope="col">Date</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>23,230</td>
                              <td>Wedding: Rosales team</td>
                              <td>Package: Summer</td>
                              <td>150.00</td>
                              <td>03/22/21</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>32,500</td>
                              <td>Birday: Birthday cakes & poppers</td>
                              <td>Package: Outlanders</td>
                              <td>150.00</td>
                              <td>03/20/21</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>12,239</td>
                              <td>Venue: Mandani Bay Cebu</td>
                              <td>Package: Custom</td>
                              <td>00.00</td>
                              <td>03/19/21</td>
                            </tr>
                          </tbody>
                        </table>
                        <div>
                          <h5>Total budget spending: PHP(67,969.00)</h5>
                          <h5>Total spend for consulting: PHP(975.00)</h5>
                        </div>
                     </div>
                   </div>
                 </div>

               </div>
             </div>
           </div>
         </div>
     </div>


     <!-- MODAL COMPONENT FOR EDIT INFO -->
     <!-- Button trigger modal -->
   <!-- Modal -->
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLongTitle">Edit Information</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>

         <div class="modal-body">

           <form>
  <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
      <label for="exampleInputPassword1">firstname</label>
      <input type="password" class="form-control"  placeholder="firstname">
  </div>
  <div class="form-group">
      <label for="exampleInputPassword1">lastname</label>
      <input type="password" class="form-control"  placeholder="lastname">
  </div>
  <div class="form-group">
      <label for="exampleInputPassword1">Phone</label>
      <input type="password" class="form-control"  placeholder="Phone no.">
  </div>
  <div class="form-group">
      <label for="exampleInputPassword1">Address</label>
      <input type="password" class="form-control"  placeholder="Address">
  </div>

  <div class="form-group">
      <label for="image">Change Image</label>
      <input type="file" class="form-control" name="file"  placeholder="Select new photo">
  </div>
    <button type="submit" class="btn btn-primary">Save changes</button>
</form>

        </div>

       </div>
     </div>
   </div>









<!-- history modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



        <div class="row gutters-sm">
          <div class="col-l-6 mb-3">
            <div class="card h-100">
              <div class="card-body">
              
                <table class="table table-striped">
                  <table class="table table-striped">
                   <thead>
                     <tr>
                       <th scope="col">Transc id</th>
                       <th scope="col">Budget amount</th>
                       <th scope="col">Product name</th>
                       <th scope="col">Bundle name</th>
                       <th scope="col">Payment</th>
                       <th scope="col">Date</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <th scope="row">1</th>
                       <td>23,230</td>
                       <td>Wedding: Rosales team</td>
                       <td>Package: Summer</td>
                       <td>150.00</td>
                       <td>03/22/21</td>
                     </tr>
                     <tr>
                       <th scope="row">2</th>
                       <td>32,500</td>
                       <td>Birday: Birthday cakes & poppers</td>
                       <td>Package: Outlanders</td>
                       <td>150.00</td>
                       <td>03/20/21</td>
                     </tr>
                     <tr>
                       <th scope="row">3</th>
                       <td>12,239</td>
                       <td>Venue: Mandani Bay Cebu</td>
                       <td>Package: Custom</td>
                       <td>00.00</td>
                       <td>03/19/21</td>
                     </tr>
                   </tbody>
                 </table>
                 <div>
                   <h5>Total budget spending: PHP(67,969.00)</h5>
                   <h5>Total spend for consulting: PHP(975.00)</h5>
                 </div>
              </div>
            </div>
          </div>

        </div>







      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



















<script type="text/javascript">
// for modal functionality
$('#myModal').on('shown.bs.modal', function () {
$('#myInput').trigger('focus')
})




</script>

<?php include 'inc/footer.inc.php'; ?>
