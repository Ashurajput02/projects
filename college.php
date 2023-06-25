<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div>
    <h3>Registration</h3>
    <hr>

<form method="post">
<input type="radio" class="ash" name="ash"value="personal" checked>Personal
<input type="radio" class="ash" name="ash" value="company">Company
<hr>
<img src="mail.png"  class="email" alt="email symbol">
<br>

<input type="email" class="mail" placeholder="Email" name="email" required >
<img src="person2.jpg" alt="person" class="email3">

<input type="text" class="mail" placeholder="Name" name="name" required>
<img src="lock.png" alt="lock" class="email2">

<input type="password" class="mail" placeholder="Password"name="password" required>
<hr>
<input type="radio" class="gen" name="gen"  value="male"checked>Male

<input type="radio" class="gen" name="gen" value="female">Female
<hr>
<pre>By clicking ,you agree on our <a href="https://www.w3schools.com/about/about_privacy.asp"  target="_blank">Privacy Policy
    <p class="sip">for W3Docs</p></a></pre>
<input type="submit" class="ashbabe"  name="submit"value="Submit">
</form>
</div>


<?php
if (isset($_POST['submit'])) {
  $type = $_POST['ash'];
  $email = $_POST['email'];
  $name = $_POST['name'];
  $password = $_POST['password'];
  $gen = $_POST['gen'];
  echo $name;
  echo "<br>";
  echo $gen;

  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "jiggi";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Select the database
if (!mysqli_select_db($conn, $dbname)) {
  die("Database selection failed: " . mysqli_error($conn));
}

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(50),
firstname VARCHAR(30) NOT NULL,
passwordd VARCHAR(30)
)";

if (mysqli_query($conn,$sql)) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " .mysqli_error($conn);
}
$sql = "INSERT INTO jiggi.MyGuests (email,firstname,passwordd)VALUES('ashurajput7017','ashu','12')";
if (mysqli_query($conn,$sql)) {
  echo"data cant be inserted".mysqli_query($conn);
}
else{
  echo"data created";

}

// Close the connection
mysqli_close($conn);
}

?>

</body>
</html>

