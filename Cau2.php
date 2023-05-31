<?php
function calculateAcademicRank($midtermScore, $finalScore) {
    $averageScore = ($midtermScore * 0.3) + ($finalScore * 0.7);

    if ($averageScore >= 9.0) {
        return "Xuất sắc";
    } elseif ($averageScore >= 7.0) {
        return "Giỏi";
    } elseif ($averageScore >= 5.0) {
        return "Khá";
    } else {
        return "Trung bình - Yếu";
    }
}

$midtermScore = 8.5;
$finalScore = 7.2;

$academicRank = calculateAcademicRank($midtermScore, $finalScore);
echo "Hạng học lực: " . $academicRank;
?>