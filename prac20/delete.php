<?php

require("../connection/connection.php");

// Prepare and execute the SQL statement
$sql = "DELETE FROM person WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);

// Set value for deletion
$username = $_POST["username"];

if ($stmt->execute()) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $stmt->error;
}

$stmt->close();

?>

