<?php
include "db.php";
$key = $_GET["k"] ?? "";
$sql = "SELECT * FROM giangvien WHERE Hoten LIKE '%$key%'";
$rs = $cn->query($sql);
?>
<!doctype html>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<h3>Tìm Giảng viên theo tên</h3>
<form>
    <input name="k" value="<?= htmlspecialchars($key) ?>" placeholder="Nhập tên...">
    <button>Tìm</button>
</form>

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