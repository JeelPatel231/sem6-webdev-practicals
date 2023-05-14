<?php

require("../connection/connection.php");

// Read all products
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    // Prepare the SELECT statement
    $stmt = $conn->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->bind_param('s', $_GET["id"]);

    $stmt->execute();
    $data = array();
    $result = $stmt->get_result();
    // Fetch rows and build the data array
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Free the result set
    $result->free();

    // Set the response headers
    header('Content-Type: application/json');

    // Return the products as JSON
    echo json_encode($data);
}

?>
