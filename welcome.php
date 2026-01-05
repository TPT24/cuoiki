<?php
session_start();
$u = $_POST['u'];
$p = $_POST['p'];

if ($u == "admin" && $p == "123") {
    $_SESSION['tk'] = $u;
    echo "Xin chào " . $_SESSION['tk'] . "<br>";
    echo "<a href='clearcookie.php'>Xóa cookie</a>";
} else {
    echo "Sai thông tin";
}
