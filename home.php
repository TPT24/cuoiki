<?php
include "header.php";
include "menu.php";
include "db.php";

$sql = "SELECT * from Sinhvien";

$rs = $cn->query($sql);
?>
<link rel="stylesheet" href="style.css">
<a href="Home.php">Home</a>
<a href="giangvien.php">Giảng viên</a>
<a href="giangvien_add.php">Thêm GV</a>
<a href="giangvien_search.php">Tìm GV</a>
<a href="sinhvien.php">Sinh viên</a>
<a href="login.html">Login</a>
<h3>Danh sách Sinh viên</h3>
<table>
    <tr>
        <th>Họ tên SV</th>
        <th>Mã SV</th>
        <th>Ngày sinh</th>
    </tr>
    <?php while ($r = $rs->fetch_assoc()): ?>
        <tr>
            <td><?= $r["Hoten"] ?></td>
            <td><?= $r["Masv"] ?></td>
            <td><?= $r["Ngaysinh"] ?></td>
        </tr>
    <?php endwhile; ?>
</table>

<?php include "footer.php"; ?>