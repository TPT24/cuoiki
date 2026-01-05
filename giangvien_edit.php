<?php
include "header.php";
include "menu.php";
include "db.php";

$id = $_GET["id"] ?? 0;

// Lấy dữ liệu cũ
$r = $cn->query("SELECT * FROM Giangvien WHERE Magv=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stm = $cn->prepare(
        "UPDATE Giangvien SET Hoten=?, Dienthoai=?, Ghichu=? WHERE Magv=?"
    );
    $stm->bind_param(
        "sssi",
        $_POST["hoten"],
        $_POST["dt"],
        $_POST["gc"],
        $id
    );
    $stm->execute();
    header("Location: giangvien.php");
}
?>

<h3>Sửa Giảng viên</h3>
<form method="post">
    Họ tên: <input name="hoten" value="<?= $r["Hoten"] ?>" required><br><br>
    Điện thoại: <input name="dt" value="<?= $r["Dienthoai"] ?>"><br><br>
    Ghi chú: <input name="gc" value="<?= $r["Ghichu"] ?>"><br><br>
    <button>Cập nhật</button>
</form>

<?php include "footer.php"; ?>