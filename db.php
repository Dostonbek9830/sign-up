<?php
$servername = "localhost";
$username = "id20747667_dostonbek";
$password = "5092113Dos$";
$dbname = "id20747667_mydb98";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
$user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
$user_password = mysqli_real_escape_string($conn, $_POST['user_password']);

// attempt insert query execution
$sql = "INSERT INTO register (first_name, last_name, user_email, user_password) VALUES ('$first_name', '$last_name', '$user_email', '$user_password')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// close connection
mysqli_close($conn);
?>
