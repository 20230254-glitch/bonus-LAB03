<?php
$n = (int)($_GET["n"] ?? 12345);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 3 - Vòng lặp</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid #000;
            padding: 5px 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>A) Bảng cửu chương 1..9</h2>

<table>
<?php
// A) Bảng cửu chương (for lồng nhau)
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 9; $j++) {
        echo "<td>$i x $j = " . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
?>
</table>

<hr>

<h2>B) Tính tổng chữ số của n (n = <?php echo $n; ?>)</h2>

<?php
$temp = $n;
$sum = 0;

// B) Tính tổng chữ số (while)
while ($temp > 0) {
    $sum += $temp % 10;
    $temp = (int)($temp / 10);
}

echo "Tổng chữ số của $n = $sum";
?>

<hr>

<h2>C) Các số lẻ từ 1 đến N (dừng khi > 15)</h2>

<?php
for ($i = 1; $i <= $n; $i++) {

    // Bỏ qua số chẵn
    if ($i % 2 == 0) {
        continue;
    }

    // Dừng sớm khi vượt quá 15
    if ($i > 15) {
        break;
    }

    echo $i . " ";
}
?>

</body>
</html>
