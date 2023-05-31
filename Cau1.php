<?php
function checkEvenOdd($number) {
    if ($number % 2 == 0) {
        return 'Số chẵn';
    } else {
        return 'Số lẻ';
    }
}

$number = 7;
$result = checkEvenOdd($number);

echo "Số $number là: $result";
?>