<?php
session_start();

// Function to generate the bill and calculate the total
function generateBill() {
    $total = 0;
    echo "<h2>Shopping Cart:</h2>";
    echo "<table border=2 cellspacing=5 cellpadding=10>";
    echo "<tr><th>Item</th><th>Price</th></tr>";

    foreach ($_SESSION['cart'] as $index => $item) {
        echo "<tr>";
        echo "<td>" . $item['name'] . "</td>";
        echo "<td>" . $item['price'] . "</td>";
        echo "</tr>";

        $total += $item['price'];
    }

    echo "<tr><td colspan='2'><strong>Total: " . $total . "</strong></td></tr>";
    echo "</table>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>

<?php
generateBill()
?>
