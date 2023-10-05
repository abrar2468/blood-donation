<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pias";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Retrieve form data
  $name = $_POST["name"];
  $blood_group = $_POST["blood_group"];
  $gender = $_POST["gender"];
  $birthdate = $_POST["year"] . "-" . $_POST["month"] . "-" . $_POST["date"];
  $email = $_POST["email"];
  $contact_no = $_POST["contact_no"];
  $city = $_POST["city"];
  $password = $_POST["password"];

  // Hash the password (for security)
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // SQL query to insert data into the database
  $sql = "INSERT INTO users (name, blood_group, gender, birthdate, email, contact_no, city, password)
          VALUES ('$name', '$blood_group', '$gender', '$birthdate', '$email', '$contact_no', '$city', '$hashed_password')";

  if ($conn->query($sql) === TRUE) {
      echo "Registration successful!";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the database connection
  $conn->close();
}
?>
