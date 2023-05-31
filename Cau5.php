<!DOCTYPE html>
<html>
<head>
    <title>Dãy số từ 1 đến 100</title>
    <style>
        .even {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        function printNumberSequence() {
            for ($i = 1; $i <= 100; $i++) {
                if ($i % 2 == 0) {
                    echo '<span class="even">' . $i . '</span> ';
                } else {
                    echo $i . ' ';
                }
            }
        }

        // Gọi function để hiển thị dãy số
        printNumberSequence();
    ?>
</body>
</html>