<?php
/**
 * Trả về số lớn hơn trong hai số
 */
function max2($a, $b) {
    return ($a > $b) ? $a : $b;
}

/**
 * Trả về số nhỏ hơn trong hai số
 */
function min2($a, $b) {
    return ($a < $b) ? $a : $b;
}

/**
 * Kiểm tra số nguyên tố
 * @param int $n
 * @return bool true nếu là số nguyên tố, ngược lại false
 */
function isPrime(int $n): bool {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }
    return true;
}

/**
 * Tính giai thừa của n
 * n >= 0, nếu n < 0 trả về null
 */
function factorial(int $n) {
    if ($n < 0) {
        return null;
    }
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

/**
 * Tính Ước chung lớn nhất (ƯCLN)
 * theo thuật toán Euclid
 */
function gcd(int $a, int $b): int {
    $a = abs($a);
    $b = abs($b);

    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
?>
