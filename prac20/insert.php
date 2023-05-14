<?php

require("connection.php");

// Prepare and execute the SQL statement
$sql = "INSERT INTO person (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);

// Set values for insert
$username = $_POST["username"];
$password = $_POST["password"];

if ($stmt->execute()) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . $stmt->error;
}

$stmt->close();

?>
