<?php
include "db.php";
$sql = "SELECT sv.Hoten AS TenSV, dt.Tendt AS TenDT, gv.Hoten AS TenGV
        FROM Sinhvien sv
        JOIN Detai dt ON sv.Madt = dt.Madt
        JOIN Giangvien gv ON sv.Magv = gv.Magv
        ORDER BY sv.Masv";
$rs = $cn->query($sql);
?>
<!doctype html>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<h3>Danh sách Sinh viên - Đề tài - GVHD</h3>
<table>
    <tr>
        <th>Họ tên SV</th>
        <th>Tên đề tài</th>
        <th>Tên GVHD</th>
    </tr>
    <?php while ($r = $rs->fetch_assoc()): ?>
        <tr>
            <td><?= $r["TenSV"] ?></td>
            <td><?= $r["TenDT"] ?></td>
            <td><?= $r["TenGV"] ?></td>
        </tr>
    <?php endwhile; ?>
</table>