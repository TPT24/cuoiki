<?php
include "header.php";
include "menu.php";
include "db.php";

$rs = $cn->query("SELECT * FROM Giangvien ");
?>

<h3>Danh sách Giảng viên</h3>
<a href="giangvien_add.php">+ Thêm giảng viên</a>

<table>
    <tr>
        <th>Mã</th>
        <th>Họ tên</th>
        <th>Điện thoại</th>
        <th>Ghi chú</th>
        <th>Hành động</th>
    </tr>

    <?php while ($r = $rs->fetch_assoc()): ?>
        <tr>
            <td><?= $r["Magv"] ?></td>
            <td><?= $r["Hoten"] ?></td>
            <td><?= $r["Dienthoai"] ?></td>
            <td><?= $r["Ghichu"] ?></td>
            <td>
                <a href="giangvien_edit.php?id=<?= $r["Magv"] ?>">Sửa</a> |
                <a href="giangvien_delete.php?id=<?= $r["Magv"] ?>"
                    onclick="return confirm('Xóa giảng viên này?')">Xóa</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

<?php include "footer.php"; ?>