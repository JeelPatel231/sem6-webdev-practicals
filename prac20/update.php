<?php
require("../connection/connection.php");

// Prepare and execute the SQL statement
$sql = "UPDATE person SET password = ? WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $password, $username);

// Set values for update
$username = $_POST["username"];
$password = $_POST["password"];

if ($stmt->execute()) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $stmt->error;
}

$stmt->close();

?>
