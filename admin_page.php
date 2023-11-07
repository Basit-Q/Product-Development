<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    h2 {
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <section class="headeradmin">
    <nav>
      <a href="home.html"><img src="images/logo.png" class="logo"></a>
      <div class="nav-links">
        <ul>
          <li><a href="home.html">HOME</a></li>
          <li><a href="registration.php">REGISTER</a></li>
          <li><a href="games.html">GAMES</a></li>
          <li><a href="admin_login.php">ADMIN LOGIN</a></li>
        </ul>
      </div>

    </nav>

 <center><h2 style="color: #fff">Registered User Details</h2></center>
 <br>

<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the entered username and password
  $username = $_POST['username'];
  $password = $_POST['password'];

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
  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);

  // Retrieve admin details from the 'admins' table
  $sql = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  // Check if the admin exists
  if (mysqli_num_rows($result) > 0) {
    // Retrieve data from the 'users' table
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    // Display the data in a table
    if (mysqli_num_rows($result) > 0) {
      echo "<table>
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Country</th>
              <th>Sports</th>
              <th>Other Sport</th>
            </tr>";

      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['first_name']."</td>
                <td>".$row['last_name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['country']."</td>
                <td>".$row['sports']."</td>
                <td>".$row['other_sport']."</td>
              </tr>";
      }

      echo "</table>";
    } else {
      echo "No data found.";
    }
  } else {
    echo "Invalid username or password. Please try again."
    ;
  }

  // Close the database connection
  mysqli_close($conn);
}
?>

<br>
<center>
<a href="home.html" class="hero-btn">Logout</a>
</center>

</body>
</html>