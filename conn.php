<?php
// Database configuration
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "root"; // Change this to your MySQL username
$password = " "; // Change this to your MySQL password
$database = "shedrack"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$Username = $_POST['Username'];
$Password = $_POST['Password'];

// SQL query to insert data into the database
$sql = "INSERT INTO form (Username, Password) VALUES ('$Username', '$Password')"; // Change "your_table_name" to your actual table name

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
