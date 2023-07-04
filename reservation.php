<?php
include "nav_carousel.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../assets/img/favicon.png">

<title> </title>
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="pages/admin/assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="pages/admin/assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->
<link id="pagestyle" href="pages/admin/assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
<!-- bootstrap link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 </head>












      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3"> Reservation</h6>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">   
          <div class="container">
            <!-- <div class="panel panel-primary margetop60"> -->
               <!-- <div class="panel-heading">Les infos du nouveau stagiaire :</div> -->
               <div class=" ">
                <div class="row">
                  <div class="col-lg-11   mx-auto">
                    <div class="">
        
                      <div class="container">

                        <form role="form" class="text-start" method="POST" action="add_reservation.php" enctype="multipart/form-data">
                            <div class="my-3">
                              <label class="form-label">Full Name</label>
                              <input type="text" class="form-control" name="full_name" required>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Destination</label>
                              <input type="text" class="form-control" name="destination" required>
                            </div>
                            <div class="my-3">
                              <label class="form-label"> Phone number</label>
                              <input type="phone" class="form-control" name="phone" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Date of Departure</label>
                            <input type="date" class="form-control" name="departure_date" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Date of Return</label>
                            <input type="date" class="form-control" name="return_date" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Room Type</label>
                            <select class="form-select" name="room_type" required>
                            <option value="1">Single Room</option>
                            <option value="2">Double Room</option>
                            </select>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Number of People</label>
                            <input type="number" class="form-control" name="num_people" min="1" required>
                            </div>

                            <div class="text-center">
                              <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-5">Rserver</button>
                            </div>
                          </form>
                          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
           </div>   
       </div>      
              </div>
            </div>
          </div>
        </div>
    </div>


<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>



<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
  </body>

</html>
