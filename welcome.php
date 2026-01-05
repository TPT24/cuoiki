<?php
$u = $_COOKIE["user"] ?? "";
if (!$u) {
    header("Location: login.html");
    exit;
}
date_default_timezone_set("Asia/Ho_Chi_Minh");
?>
<!doctype html>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<div class="box">
    Xin chào: <b><?= htmlspecialchars($u) ?></b><br>
    Thời gian: <?= date("H:i:s d/m/Y") ?><br>
    <a href="clearcookie.php">Logout</a>
</div>