<?php

function calculateGrade($percentage) {
    if ($percentage >= 90) {
        return 'A+';
    } elseif ($percentage >= 80 && $percentage < 90) {
        return 'A';
    } elseif ($percentage >= 70 && $percentage < 80) {
        return 'B+';
    } elseif ($percentage >= 60 && $percentage < 70) {
        return 'B';
    } elseif ($percentage >= 50 && $percentage < 60) {
        return 'C+';
    } elseif ($percentage >= 40 && $percentage < 50) {
        return 'C';
    } elseif ($percentage >= 33 && $percentage < 40) {
        return 'D+';
    } else {
        return 'Fail';
    }
}

function calculatePercentage($numbers) {
    $sum = array_sum($numbers);
    $count = count($numbers);
    
    if ($count > 0) {
        $mean = $sum / $count;
        return $mean;
    } else {
        return 0;
    }
}

?>

<h1>Grades</h1>
<table border=1 cellpadding=10 cellspacing=5>
<tr><th>Subject</th><th>Marks</th></tr>
<?php
foreach ($_POST as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
?>
</table>



<?php

$percentage = calculatePercentage([$_POST["maths"], $_POST["physics"], $_POST["chemistry"]]);

echo "<h4> Percentage: " . $percentage . "%</br>";
echo "Grade: " . calculateGrade($percentage) . "</br> </h4>";
?>

