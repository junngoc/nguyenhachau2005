<?php
$total = 100;
$per_page = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $per_page;

echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "<tr><th>STT</th><th>Tên sách</th><th>Nội dung sách</th></tr>";

for ($i = $start + 1; $i <= min($start + $per_page, $total); $i++) {
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>Tensach$i</td>";
    echo "<td>Noidung$i</td>";
    echo "</tr>";
}
echo "</table>";

$total_pages = ceil($total / $per_page);
for ($i = 1; $i <= $total_pages; $i++) {
    echo "<a href='?page=$i'> $i </a> ";
}
?>
