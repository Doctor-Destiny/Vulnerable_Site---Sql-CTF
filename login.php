<?php
$host = "localhost";
$user = "root";
$pass = ""; // Update if needed
$dbname = "testsite";

// Connect to MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get input (no sanitization — intentional)
$username = $_POST['username'];
$password = $_POST['password'];

// VULNERABLE QUERY
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h1 style='color: green;'>Welcome, $username!</h1>";
} else {
    echo "<h1 style='color: red;'>Invalid credentials</h1>";
}

mysqli_close($conn);
?>
