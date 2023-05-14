<!DOCTYPE html>
<html lang="en">

<head>
  <title>DB Operations</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
session_start();


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the item details from the form
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Create an associative array for the item
    $item = array('name' => $name, 'price' => $price);

    // Add the item to the cart
    $_SESSION['cart'][] = $item;
}

require("shopping_cart.php");
?>

  <h2>Add Item to Cart</h2>
  <form method="POST">
    <label for="name">Item Name:</label>
    <input type="text" name="name" id="name" required><br><br>

    <label for="price">Item Price:</label>
    <input type="number" name="price" id="price" required><br><br>

    <input type="submit" value="Add to Cart">
  </form>

  To remove item, <a href="remove_item.php">Click Here</a>

</body>
</html>
