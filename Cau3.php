<?php
function checkEvenOddYear($year) {
    if ($year % 2 === 0) {
        return "Năm chẵn";
    } else {
        return "Năm lẻ";
    }
}

$currentYear = date('Y');
$result = checkEvenOddYear($currentYear);

echo "Năm " . $currentYear . " là " . $result;
?>