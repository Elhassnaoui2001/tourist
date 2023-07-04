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
  $sql = "SELECT full_name ,destination, photo  FROM guides";
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








<!-- Team Start -->

<!-- HTML code to display guides -->
<?php foreach ($guides as $guide) : ?>
  <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
    <div class="team-item bg-white mb-4">
      <div class="team-img position-relative overflow-hidden">
        <!-- Add the guide photo using <img> tag -->
        <img class="img-fluid w-100" src="./pages/admin/pages/<?php echo $guide['photo'] ?>" alt="<?php echo $guide['full_name'] ?>">
        <div class="team-social">
          <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
          <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
          <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div class="text-center py-4">
        <h5 class="text-truncate"><?php echo $guide['full_name']; ?></h5>
        <p class="m-0"><?php echo $guide['destination']; ?></p>
        
      </div>
    </div>
  </div>
<?php endforeach; ?>
<!-- Team End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


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