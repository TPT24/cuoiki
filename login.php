<?php
$u = $_POST["u"] ?? "";
$p = $_POST["p"] ?? "";
if ($u === "admin" && $p === "123") {
    setcookie("user", $u, time() + 3600, "/");
    header("Location: welcome.php");
} else {
    echo "Sai tài khoản/mật khẩu. <a href='clearcookie.html'>Thử lại</a>";
}
