<?php
function printYears($years) {
    foreach ($years as $year) {
        echo $year . " ";
    }
}

$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
printYears($nam);
?>