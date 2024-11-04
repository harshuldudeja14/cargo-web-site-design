<?php
$servername = "localhost";
$username = "id20649325_harshulandjai";
$password = "O04RDt_wTQEGS";
$dbname = "id20649325_carserv";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$service = $_POST['service'];
$date = $_POST['date'];
$request = $_POST['request'];

// Prepare SQL statement
$sql = "INSERT INTO bookings (name, email, service, date, request) VALUES ('$name', '$email', '$service', '$date', '$request')";

// Execute SQL statement
if (mysqli_query($conn, $sql)) {
  echo "Booking made successfully.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
