<?php
$host = "localhost";
$username = "id20649325_harshulandjai";
$password = "O04RDt_wTQEGS";
$dbname = "id20649325_carserv";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Prepare and bind SQL statement
  $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $name, $email, $message);

  // Execute SQL statement
  if ($stmt->execute()) {
    // Close statement and connection
    $stmt->close();
    mysqli_close($conn);

    // Redirect to thank you page
   echo "your querry will be entertained soon";
  } else {
    // Display error message
    echo "Error: " . $stmt->error;
  }
}
?>