<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: skyblue;">
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

  <center>
    <br><br><br><br><br><br><br><br>
    <h1>ADMIN LOGIN</h1>
  
  <div style="background-color: lavenderblush; width: 500px;">
    <br>
  <form action="admin_page.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>
    <input type="submit" value="Login">
  </form>
  </div>
  </center>
</body>
</html>
