<?php
require_once "functions.php";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>LAB 03 – PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        ul li {
            margin: 6px 0;
        }
        .box {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<h1>LAB 03 – CẤU TRÚC ĐIỀU KHIỂN & HÀM (PHP)</h1>

<p><b>Học phần:</b> IT3220 – Lập trình Web với PHP</p>

<hr>

<h2>Danh sách bài lab</h2>
<ul>
    <li>
        <b>Bài 1 – Phân loại điểm (if/elseif/else)</b><br>
        <a href="bai1_grade.php?score=9">
            Test: score = 9
        </a>
    </li>

    <li>
        <b>Bài 2 – Máy tính mini (switch–case)</b><br>
        <a href="bai2_calc.php?a=10&b=3&op=mul">
            Test: 18 × 36
        </a><br>
        <a href="bai2_calc.php?a=15&b=0&op=div">
            Test: chia cho 0
        </a>
    </li>

    <li>
        <b>Bài 3 – Vòng lặp (for / while / continue / break)</b><br>
        <a href="bai3_loops.php?n=25">
            Test: n = 36
        </a>
    </li>
</ul>

<hr>

<h2> Bài 4 – Test thư viện hàm (functions.php)</h2>

<div class="box">
<?php
echo "<b>max2(10, 20):</b> " . max2(10, 20) . "<br>";
echo "<b>min2(10, 20):</b> " . min2(10, 20) . "<br>";

echo "<b>isPrime(7):</b> ";
echo isPrime(7) ? "true" : "false";
echo "<br>";

echo "<b>factorial(5):</b> " . factorial(5) . "<br>";
echo "<b>factorial(-3):</b> ";
var_dump(factorial(-3));

echo "<br><b>gcd(24, 18):</b> " . gcd(24, 18);
?>
</div>

<hr>
<h2>Bài 5 – Mini Utility (functions.php)</h2>

<p>
    <a href="?action=max&a=10&b=20">Max</a> |
    <a href="?action=min&a=10&b=20">Min</a> |
    <a href="?action=prime&n=17">Prime</a> |
    <a href="?action=fact&n=6">Factorial</a> |
    <a href="?action=gcd&a=24&b=18">GCD</a>
</p>

<div class="box">
<?php
$action = $_GET["action"] ?? null;
$a = isset($_GET["a"]) ? (int)$_GET["a"] : null;
$b = isset($_GET["b"]) ? (int)$_GET["b"] : null;
$n = isset($_GET["n"]) ? (int)$_GET["n"] : null;

switch ($action) {
    case "max":
        echo "Max($a, $b) = " . max2($a, $b);
        break;

    case "min":
        echo "Min($a, $b) = " . min2($a, $b);
        break;

    case "prime":
        echo "$n ";
        echo isPrime($n) ? "là số nguyên tố" : "không phải số nguyên tố";
        break;

    case "fact":
        $kq = factorial($n);
        echo ($kq === null)
            ? "Không tính giai thừa cho n < 0"
            : "$n! = $kq";
        break;

    case "gcd":
        echo "GCD($a, $b) = " . gcd($a, $b);
        break;

    default:
        echo "Chọn một chức năng để test.";
}
?>
</div>

<p>
- Đã sử dụng: if/else, switch–case, for, while, continue, break<br>
-  Có thư viện hàm riêng (functions.php)<br>
- Test bằng URL
</p>

</body>
</html>
