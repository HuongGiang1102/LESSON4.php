<?php
function printNumbers() {
    $numbers = array();
    for ($i = 1; $i <= 100; $i++) {
        $numbers[] = $i;
    }
    return $numbers;
}

$result = printNumbers();
foreach ($result as $number) {
    echo $number . " ";
}
?>