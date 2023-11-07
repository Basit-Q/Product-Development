<!DOCTYPE html>
<html>
<head>
  <title>User Registration Form</title>
  <link rel="stylesheet" type="text/css" href="regstyle.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <style>
    label {
      display: block;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <section class="header2">
    <nav>
      <a href="home.html"><img src="images/logo.png"></a>
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
  <div class="header3">
  <h2>Fun Olympic Registration Form</h2>
  <form action="register.php" method="post">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required>

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required>

    <label for="country">Country:</label>
    <input type="text" id="country" name="country" required>

    <label for="sports">Sports Interested in Watching Online:</label>
    <input type="checkbox" id="football" name="sports[]" value="Football">
    <label for="football">Football</label>

    <input type="checkbox" id="basketball" name="sports[]" value="Basketball">
    <label for="basketball">Basketball</label>

    <input type="checkbox" id="tennis" name="sports[]" value="Tennis">
    <label for="tennis">Tennis</label>

    <input type="checkbox" id="Water Polo" name="sports[]" value="Water Polo">
    <label for="Water Polo">Water Polo</label>

    <input type="checkbox" id="badminton" name="sports[]" value="Badminton">
    <label for="Badminton">Badminton</label>

    <input type="checkbox" id="golf" name="sports[]" value="Golf">
    <label for="golf">Golf</label>

    <input type="checkbox" id="weightlifting" name="sports[]" value="weightlifting">
    <label for="weightlifting">Weightlifting</label>

    <input type="checkbox" id="other" name="sports[]" value="Other">
    <label for="other">Other:</label>
    <input type="text" id="other-sport" name="other_sport">

    <br><br>
    <input type="submit" value="Submit" a href="games.html" class="button">
  </form>
  </div>
  </center>
  </section>
</body>
</html>
