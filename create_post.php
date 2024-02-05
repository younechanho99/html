<?php
// Perform server-side validation and sanitization as needed

// Get form data
$title = $_POST['title'];
$content = $_POST['content'];

// Database connection (replace these values with your actual database credentials)
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database (replace 'posts' with your actual table name)
$sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";

if ($conn->query($sql) === TRUE) {
    echo "Post created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
