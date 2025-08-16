<?php
require "functions.php";

$so1 = $_POST['so1'];
$so2 = $_POST['so2'];
$pheptinh = $_POST['pheptinh'];

switch ($pheptinh) {
    case "cong":
        $ketqua = tong($so1, $so2);
        $pt = "Cộng";
        break;
    case "tru":
        $ketqua = hieu($so1, $so2);
        $pt = "Trừ";
        break;
    case "nhan":
        $ketqua = tich($so1, $so2);
        $pt = "Nhân";
        break;
    case "chia":
        $ketqua = thuong($so1, $so2);
        $pt = "Chia";
        break;
    default:
        $ketqua = "Bạn chưa chọn phép tính!";
        $pt = "";
}

echo "<h3>KẾT QUẢ PHÉP TÍNH TRÊN HAI SỐ</h3>";
echo "Chọn phép tính: $pt <br>";
echo "Số 1: $so1 <br>";
echo "Số 2: $so2 <br>";
echo "Kết quả: $ketqua <br><br>";

// Thêm phần kiểm tra số nguyên tố và số chẵn
echo "Số $so1 " . (laNguyenTo($so1) ? "là số nguyên tố" : "không phải số nguyên tố") . "<br>";
echo "Số $so2 " . (laNguyenTo($so2) ? "là số nguyên tố" : "không phải số nguyên tố") . "<br>";

echo "Số $so1 " . (laSoChan($so1) ? "là số chẵn" : "là số lẻ") . "<br>";
echo "Số $so2 " . (laSoChan($so2) ? "là số chẵn" : "là số lẻ") . "<br>";

echo "<br><a href='form.php'>Quay lại trang trước</a>";
?>
