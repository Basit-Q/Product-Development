<?php
// Retrieve user input from the form
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$country = $_POST['country'];
$sports = $_POST['sports'];
$other_sport = $_POST['other_sport'];

// Establish a connection to the database
$host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'final';

$conn = mysqli_connect($host, $db_username, $db_password, $db_name);

// Check the connection
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

// Escape special characters in user input to prevent SQL injection
$first_name = mysqli_real_escape_string($conn, $first_name);
$last_name = mysqli_real_escape_string($conn, $last_name);
$email = mysqli_real_escape_string($conn, $email);
$country = mysqli_real_escape_string($conn, $country);
$other_sport = mysqli_real_escape_string($conn, $other_sport);

// Insert user data into the table
$sql = "INSERT INTO users (first_name, last_name, email, country, sports, other_sport) VALUES ('$first_name', '$last_name', '$email', '$country', '" . implode(",", $sports) . "', '$other_sport')";

if (mysqli_query($conn, $sql)) {
  echo '<script>window.location.href = "games.html";</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
