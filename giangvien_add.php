<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $hoten = $_POST["hoten"] ?? "";
    $dt = $_POST["dt"] ?? "";
    $gc = $_POST["gc"] ?? "";
    $stm = $cn->prepare("INSERT INTO Giangvien(Hoten,Dienthoai,Ghichu) VALUES (?,?,?)");
    $stm->bind_param("sss", $hoten, $dt, $gc);
    $stm->execute();
    header("Location: giangvien.php");
    exit;
}
?>
<!doctype html>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<h3>Thêm Giảng viên</h3>
<form method="post" class="box">
    Họ tên: <input name="hoten" required><br><br>
    Điện thoại: <input name="dt"><br><br>
    Ghi chú: <input name="gc"><br><br>
    <button>Lưu</button>
</form>