<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Phép tính trên hai số</title>
</head>
<body>
<h3>PHÉP TÍNH TRÊN HAI SỐ</h3>

<form method="post" action="ketqua.php">
    Chọn phép tính:
    <input type="radio" name="pheptinh" value="cong"> Cộng
    <input type="radio" name="pheptinh" value="tru"> Trừ
    <input type="radio" name="pheptinh" value="nhan"> Nhân
    <input type="radio" name="pheptinh" value="chia"> Chia
    <br><br>

    Số thứ 1: <input type="number" name="so1" required><br><br>
    Số thứ 2: <input type="number" name="so2" required><br><br>

    <input type="submit" value="Tính">
</form>
</body>
</html>
