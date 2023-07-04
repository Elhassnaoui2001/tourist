<?php
include "nav_carousel.php";
?>
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
  $sql = "SELECT * FROM hotels";
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  // Fetch all rows from the result set
  $hotels = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

// Close the statement and the database connection
$stmt = null;
$conn = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Guide driss</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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
</head>

<body>
<!-- Room Start -->
<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Hotels</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Hotels</span></h1>
                </div>
                <div class="row g-4">
                <?php foreach ($hotels as $hotel) : ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <!-- <img src="./pages/admin/pages/photohs/6494e7c587376_room-3.jpg" alt=""> -->
                                <img class="img-fluid w-100" src="./pages/admin/pages/<?php echo $hotel['photo'] ?>" alt="">
                                <!-- <img class="img-fluid" src="img/room-1.jpg" alt=""> -->
                                <!-- <p class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</p> -->
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?php echo $hotel['name']; ?></h5>
                                    <!-- <h5 class="mb-0">Junior Suite</h5> -->
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <p class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $hotel['bed_number']; ?>bed</p>
                                    <p class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo $hotel['bath_number']; ?>bath</p>
                                    <p><i class="fa fa-wifi text-primary me-2"></i>Wifi</p>
                                </div>
                                <!-- <p class="text-body mb-3">Un hôtel de luxe offrant des chambres élégantes, un ser  vice exceptionnel et des installations modernes dans un cadre idyllique</p> -->
                                <p class="text-body mb-3"><?php echo $hotel['description']; ?></p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="" name='price'><?php echo $hotel['price']; ?>$</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="reservation.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room End -->

</body>
</html>