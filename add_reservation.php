<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">

<title> </title>
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->
<link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 </head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $full_name = $_POST["full_name"];
  $destination = $_POST["destination"];
  $departure_date = $_POST["departure_date"];
  $return_date = $_POST["return_date"];
  $room_type = $_POST["room_type"];
  $num_people = $_POST["num_people"];
  $phone = $_POST["phone"];

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

    // Prepare the SQL statement
    $sql = "INSERT INTO reservations (full_name, destination, departure_date, return_date, room_type, num_people,phone) VALUES (?, ?, ?, ?, ?, ?,?)";
    $stmt = $conn->prepare($sql);

    // Bind the parameters and execute the statement
    $stmt->bindParam(1, $full_name);
    $stmt->bindParam(2, $destination);
    $stmt->bindParam(3, $departure_date);
    $stmt->bindParam(4, $return_date);
    $stmt->bindParam(5, $room_type);
    $stmt->bindParam(6, $num_people);
    $stmt->bindParam(7, $phone);
    $stmt->execute();

    // Check if the insertion was successful
    if ($stmt->rowCount() > 0) {  
    //   echo "Reservation added successfully!";
    echo '<div class="card-body px-0 pb-2">';
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">Reservation added successfully!</div>';
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
    echo '</div>';
    
    echo '<script>';
    echo 'setTimeout(function(){';
    echo 'window.location.href = "reservation.php";';
    echo '}, 2000);'; // Redirect after 2 seconds (adjust as needed)
    echo '</script>';
    
  

    } else {
      echo "Error adding reservation.";
    }
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  // Close the statement and the database connection
  $stmt = null;
  $conn = null;
}
?>
</body>
</html>
