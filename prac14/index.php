<?php
// Function to check if a number is prime
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Check if the number is submitted via GET request
if (isset($_GET['number'])) {
    $number = $_GET['number'];
    
    echo "<h1>";
    if (is_numeric($number)) {
        if (isPrime($number)) {
            echo "{$number} is a prime number.";
        } else {
            echo "{$number} is not a prime number.";
        }
    } else {
        echo "Invalid input. Please enter a valid number.";
    }
    echo "</h1>";
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Prime Number Checker</title>
</head>

<body>
  <h2>Prime Number Checker</h2>
  <form action="" method="GET">
    <label for="number">Enter a number:</label>
    <input type="number" name="number" id="number" required><br><br>

    <input type="submit" value="Check">
  </form>
</body>

</html>
