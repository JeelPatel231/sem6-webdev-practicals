<?php

require("../connection/connection.php");

$sql = "CREATE TABLE IF NOT EXISTS products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  made_in VARCHAR(255) NOT NULL,
  price DECIMAL(10, 2) NOT NULL
)";

// if ($conn->query($sql) === TRUE) {
//   echo "Table Products created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// Create a new product
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from the request
    $name = $_POST['name'];
    $made_in = $_POST['made_in'];
    $price = $_POST['price'];

    // Prepare the INSERT statement
    $stmt = $conn->prepare('INSERT INTO products (name, made_in, price) VALUES (?, ?, ?)');
    $stmt->bind_param('sss', $name, $made_in, $price);

    // Execute the statement
    if ($stmt->execute()) {
        echo 'Product created successfully.';
    } else {
        echo 'Failed to create product.';
    }
}

// Read all products
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Prepare the SELECT statement
    $stmt = $conn->query('SELECT * FROM products');

    $data = array();

    // Fetch rows and build the data array
    while ($row = $stmt->fetch_assoc()) {
        $data[] = $row;
    }

    // Free the result set
    $stmt->free();

    // Set the response headers
    header('Content-Type: application/json');

    // Return the products as JSON
    echo json_encode($data);
}

// Delete a product
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // Retrieve data from the request
    parse_str(file_get_contents('php://input'), $requestData);
    $product_id = $requestData['product_id'];

    // Prepare the DELETE statement
    $stmt = $conn->prepare('DELETE FROM products WHERE id = :product_id');
    $stmt->bindParam(':product_id', $product_id);

    // Execute the statement
    if ($stmt->execute()) {
        echo 'Product deleted successfully.';
    } else {
        echo 'Failed to delete product.';
    }
}

?>
