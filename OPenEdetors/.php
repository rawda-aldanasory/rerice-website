<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "contactus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tableCheckQuery = "SHOW TABLES LIKE 'comments'";
$result = $conn->query($tableCheckQuery);

if ($result->num_rows == 0) {
    $createTableQuery = "
    CREATE TABLE comments (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        phone VARCHAR(15) NOT NULL,
        message TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if ($conn->query($createTableQuery) === TRUE) {
        echo "Table `comments` created successfully.";
    } else {
        die("Error creating table: " . $conn->error);
    }
} else {
    echo "Table `comments` already exists.";
}

$conn->close();
?>
