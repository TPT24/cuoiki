<?php
include "db.php";
$rs = $cn->query("SELECT * FROM Giangvien");
?>
<!doctype html>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<h3>Danh sách Giảng viên</h3>
<a href="giangvien_add.php">+ Thêm</a>
<table>
    <tr>
        <th>Mã</th>
        <th>Họ tên</th>
        <th>Điện thoại</th>
        <th>Ghi chú</th>
    </tr>
    <?php while ($r = $rs->fetch_assoc()): ?>
        <tr>
            <td><?= $r["Magv"] ?></td>
            <td><?= $r["Hoten"] ?></td>
            <td><?= $r["Dienthoai"] ?></td>
            <td><?= $r["Ghichu"] ?></td>
        </tr>
    <?php endwhile; ?>
</table>