<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
  <title>Registration Form</title>
</head>
<body>
<?php


$myArray = [1,2,3,4,5,6,7,8,9,10];

$sum = 0;

foreach ($myArray as $value) {
  $sum += $value;
}

echo "<h1>";
echo join("+",$myArray) . " = " . $sum;
echo "</h1>";

?>

</body>
</html>
