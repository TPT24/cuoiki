<?php
include "db.php";
$id = $_GET["id"] ?? 0;
$cn->query("DELETE FROM Giangvien WHERE Magv=$id");
header("Location: giangvien.php");
