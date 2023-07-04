<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "driss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the admin table to check if the username and password match
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($username=='admin' && $password=='@#/56.com90') {
        // Admin credentials are valid
        header("Location: pages/admin/index.php"); // Redirect to the admin dashboard
        exit();
    } else {
        // Invalid credentials
        echo "Invalid username or password.";
    }
}
?>

<?php
 include "nav_carousel.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Guide driss</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <style>
        /* Additional styles */
        .cont {
            width: 700px;
            height: 700px;

        }
       
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

    </style>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
  #more-text {
    display: none;
  }
</style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>contactdriss@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+212 650 548 753</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Booking Start -->
    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Destination</option>
                                        <option value="1">Destination 1</option>
                                        <option value="2">Destination 1</option>
                                        <option value="3">Destination 1</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Your Full Name" id=""  name="" required="required" />
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" placeholder="Your Email" id=""  name="" required="required" />
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="number" class="form-control p-4" placeholder="Phone Number" id=""  name="username" required="required" />
                                </div> -->
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Login</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" placeholder="Username" id="username"  name="username" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control p-4" placeholder="Password" id="password" name="password" required="required" />
                                </div>
                                 <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Select a destination</option>
                                        <option value="1">destination 1</option>
                                        <option value="2">destination 1</option>
                                        <option value="3">destination 1</option>
                                    </select>
                                </div> -->
                                <!-- <div>
                                    <button class="btn btn-primary btn-block py-3" name="submit" type="submit">Login</button>
                                </div> -->
                            <!-- </form>
                        </div>
                    </div>
                </div> -->
    </div> 
    <!-- Booking End -->

    <!-- About Start -->
    <div id="about" class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">We Provide Best Tour Packages In Your Budget</h1>
                        <p id="short-text">
  Welcome to Tourist Treasure, your ultimate destination for exceptional travel experiences. We pride ourselves on offering a comprehensive range of top-notch tourist services that cater to your every need. With our verified local guides, you can embark on enriching journeys, discovering the hidden gems and cultural wonders of each destination.
  Our selection of hotels ensures that you enjoy a comfortable and memorable stay, with impeccable service and unparalleled hospitality.
</p>

<p id="more-text">
  Our selection of hotels ensures that you enjoy a comfortable and memorable stay, with impeccable service and unparalleled hospitality. Whether you seek luxury accommodations or charming boutique hotels, we have the perfect options to suit your preferences.

  Transportation is made effortless with our reliable and convenient tourist transportation services. Sit back, relax, and let us take care of your travel arrangements, ensuring smooth and seamless journeys from start to finish.

  At Tourist Treasure, we believe that every trip should be an extraordinary adventure. That's why we curate exceptional travel experiences that go beyond the ordinary. From thrilling outdoor excursions to immersive cultural encounters, our carefully crafted itineraries guarantee unforgettable moments and lifelong memories.

  Looking for destination suggestions? Our expert team is here to provide you with tailored recommendations based on your interests and preferences. Whether you're seeking a tranquil beach getaway, a vibrant city experience, or an off-the-beaten-path adventure, we have the perfect destination for you.

  Planning your trip with us also means benefiting from practical tips and insights. Our team of travel experts is dedicated to assisting you in planning your journey optimally, ensuring that you make the most of your valuable time and resources.

  Discover a world of unparalleled travel experiences with Tourist Treasure. Let us be your trusted partner in crafting unforgettable memories and making your travel dreams a reality. Book with us today and embark on a journey of a lifetime.
</p>
<a href="#" onclick="toggleText(); return false;">Read More</a>


                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-2.jpg" alt="">
                            </div>
                        </div>
                        <!-- <a href="res.php" class="btn btn-primary mt-1">Book Now</a> -->
                        <a href="hotels.php" class="btn btn-primary mt-1">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Competitive Pricing</h5>
                            <p class="m-0">MUnlock incredible value with our unbeatable competitive pricing, ensuring you get the most out of your budget without compromising on quality or experiences</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Best Services</h5>
                            <p class="m-0">Experience the epitome of luxury and personalized attention with our world-class services, where every detail is meticulously crafted to exceed your expectations and create an unforgettable journey.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Worldwide Coverage</h5>
                            <p class="m-0">Embark on a global odyssey with our extensive worldwide coverage, granting you access to the most captivating destinations across morocco, allowing you to explore diverse cultures and awe-inspiring landscapes like never before</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->








    <!-- Destination Start -->
    <div id="destination" class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h1>Explore Top Destination</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/marrakech.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="marrakech.php">
                            <h5 class="text-white">Marrekech</h5>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/Ouarzazate.png" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="Ouarzazate.php">
                            <h5 class="text-white">Ouarzazate</h5>
                            <span>Click To know more</span> 
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/Meknes.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="Meknes.php">
                            <h5 class="text-white">Meknes</h5>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/Chefchaouen.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="Chefchaouen.php">
                            <h5 class="text-white">Chefchaouen</h5>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/Casablanca.jpeg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="Casablanca.php">
                            <h5 class="text-white">Casablanca</h5>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/Rabat.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="Rabat.php">
                            <h5 class="text-white">Rabat</h5>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/9l3a.jpeg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="Kelaat-M'Gouna.php">
                            <h5 class="text-white">Kellat-M'Gouna</h5>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/fes.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="fes.php">
                            <h5 class="text-white">Fes</h5>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/Essaouira.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="suira.php">
                            <h5 class="text-white">Essaouira</h5>
                            <span></span>
                        </a>
                    </div>
                </div>                                
            </div>
        </div>
    </div>
    <!-- Destination Start -->


<!-- Team Start -->
<div id="guides" class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Guides</h6>
            <h1>Our Travel Guides</h1>
        </div>
        <div class="row">
        <?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "driss";

try {
  // Create a PDO connection
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  // Set PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Prepare the SQL statement to fetch guide information
  $sql = "SELECT full_name ,destination, photo,langue  FROM guides";
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  // Fetch all rows from the result set
  $guides = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

// Close the statement and the database connection
$stmt = null;
$conn = null;
?>
<?php foreach ($guides as $guide) : ?>
  <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
    <div class="team-item bg-white mb-4">
      <div class="team-img position-relative overflow-hidden">
        <!-- Add the guide photo using <img> tag -->
        <img class="img-fluid w-100 cont" src="./pages/admin/pages/<?php echo $guide['photo'] ?>" alt="<?php echo $guide['full_name'] ?>">
        <div class="team-social">
          <!-- <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a> -->
          <a class="btn btn-outline-primary btn-square" href="https://www.facebook.com/driss.benameur.946"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-primary btn-square" href="https://instagram.com/idris_ait_ben_ameur?igshid=NGExMmI2YTkyZg=="><i class="fab fa-instagram"></i></a>
          <!-- <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a> -->
        </div>
      </div>
      <div class="text-center py-4">
        <h5 class="text-truncate" ><?php echo $guide['full_name']; ?><img class="" src="img/certifier (2).png" alt="" width="40"></h5>
        <p class="m-0" style="color: blue"><?php echo $guide['destination']; ?></p>
        <p class="m-0"><?php echo $guide['langue']; ?></p>
      </div>
    </div>
  </div>
<?php endforeach; ?>

            </div>
        </div>
    </div>
</div>

<!-- Team End -->


    <!-- Reviews Start -->
<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "driss";

try {
  // Create a PDO connection
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  // Set PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Prepare the SQL statement to fetch hotels
  $sql = "SELECT username,comment_text ,photo FROM commentaire";
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  // Fetch all rows from the result set
  $commentaire = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

// Close the statement and the database connection
$stmt = null;
$conn = null;
?>
<div id="reviews" class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Reviews</h6>
            <h1>What our customers say</h1>
        </div>
        <div class="row">
    <?php foreach ($commentaire as $commentaires) : ?>            
  <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
    <div class="team-item bg-white mb-4">
      <div class="team-img position-relative overflow-hidden">
        <!-- Add the guide photo using <img> tag -->
        <img class="img-fluid mx-auto" src="./pages/admin/pages/<?php echo $commentaires['photo'] ?>" alt="">
      </div>
      <div class="text-center py-2">
        <p class="mt-5"><?php echo $commentaires['comment_text']; ?></p>
        <h5 class="text-truncate"><?php echo $commentaires['username']; ?></h5>
      </div>
    </div>
  </div>
<?php endforeach; ?>

            </div>
        </div>
    </div>
</div>
    
    <!-- Reviews End -->
    <?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "driss";

try {
  // Create a PDO connection
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  // Set PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Prepare the SQL statement to fetch hotels
  $sql = "SELECT * FROM gallery";
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  // Fetch all rows from the result set
  $gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

// Close the statement and the database connection
$stmt = null;
$conn = null;
?>
    <!-- Service Start -->

























<div id="service" class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">gallery</h6>
            <h1>Tours & gallery pictures</h1>
        </div>
        <div class="row">
        <?php foreach ($gallery as $item) : ?>
  <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
    <div class="team-item bg-white mb-4">
      <div class="team-img position-relative overflow-hidden">
        <!-- Add the guide photo using <img> tag -->
        <img class="img-fluid mx-auto clickable-image" src="./pages/admin/pages/<?php echo $item['photo_or_video'] ?>" alt="" class="clickable-image" data-toggle="modal" data-target="#imageModal">
      </div>
      <div class="text-center py-2">
      <!-- <p class="mt-5">
        </p> -->
      </div>
    </div>
  </div>
  <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageModalLabel">Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php foreach ($gallery as $item) : ?>

      <div class="modal-body">
        <img src="./pages/admin/pages/<?php echo $item['photo_or_video'] ?>" class="img-fluid">
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</div>

    <!-- Service End -->


    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Offer</h6>
                        <h1 class="text-white"><span class="text-primary">30% OFF</span> For our Clients</h1>
                    </div>
                    <p class="text-white">Experience the ultimate getaway with our exclusive offer, designed to create unforgettable memories for discerning travelers.</p>
                    <!-- <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet diam</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.</li>
                    </ul> -->
                    <p class="text-white">Embark on a journey of a lifetime and indulge in the perfect blend of luxury, adventure, and relaxation with our unparalleled promotional package for avid explorers.
</p>

                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Login</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Username" id="username"  name="username" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control p-4" placeholder="Password" id="password" name="password" required="required" />
                                </div>

                                <div>
                                    <button class="btn btn-primary btn-block py-3" name="submit" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->

    <!-- Testimonial End -->


   
    <!-- Blog End -->


     <!-- Contact Start -->
 <div id="contact" class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contact</h6>
            <h1>Contact For Any Query</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form bg-white" style="padding: 30px;">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="control-group col-sm-6">
                                <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                    required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group col-sm-6">
                                <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                    required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">T_</span>Treasure</h1>
                </a>
                <p>Sed ipsum clita tempor ipsum ipsum amet sit ipsum lorem amet labore rebum lorem ipsum dolor. No sed vero lorem dolor dolor</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#home"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white-50 mb-2" href="#about"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#service"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#destination"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="#guides"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                    <a class="text-white-50 mb-2" href="#reviews"><i class="fa fa-angle-right mr-2"></i>Reviews</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Gelia, Marrakech, Morocco</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+212 650 548 753</p>
                <p><i class="fa fa-envelope mr-2"></i>contactdriss@gmail.com</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">T_Treasure</a>. All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by <a href="https://www.linkedin.com/in/mohamed-elhassnaoui-7a2162211/">Elhassnaoui</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <script>
  function toggleText() {
    var shortText = document.getElementById("short-text");
    var moreText = document.getElementById("more-text");

    if (moreText.style.display === "none") {
      moreText.style.display = "block";
    } else {
      moreText.style.display = "none";
    }
  }
</script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>