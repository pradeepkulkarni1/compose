<?php
$servername = "mysql";
$username = "root";
$password = "rootpassword";
$database = "demo_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to the database.";

// Create a table and insert a sample record
$conn->query("CREATE TABLE IF NOT EXISTS users (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50))");
$conn->query("INSERT INTO users (name) VALUES ('John Doe')");

// Fetch and display records
$result = $conn->query("SELECT * FROM users");

echo "<h2>Users:</h2>";
while ($row = $result->fetch_assoc()) {
    echo $row['id'] . " - " . $row['name'] . "<br>";
}

$conn->close();
?>

