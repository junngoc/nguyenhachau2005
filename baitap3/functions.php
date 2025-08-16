<?php
// Hàm tính toán cơ bản
function tong($a, $b) {
    return $a + $b;
}

function hieu($a, $b) {
    return $a - $b;
}

function tich($a, $b) {
    return $a * $b;
}

function thuong($a, $b) {
    if ($b == 0) {
        return "Không thể chia cho 0";
    }
    return $a / $b;
}

// Kiểm tra số nguyên tố
function laNguyenTo($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

// Kiểm tra số chẵn
function laSoChan($n) {
    return $n % 2 == 0;
}
?>
