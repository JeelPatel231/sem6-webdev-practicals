<?php
session_start();


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the item index from the form
    $index = $_POST['index'];

    // Remove the item from the cart based on the index
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
    }

    // Reorder the array keys
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

require("shopping_cart.php");
?>
<form method="POST">
    <label for="index">Item Index:</label>
    <input type="number" name="index" id="index" required><br><br>
    
    <input type="submit" value="Remove from Cart">
</form>
