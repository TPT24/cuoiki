<?php
$cn = new mysqli("localhost", "root", "", "qldt");
$cn->set_charset("utf8mb4");
if ($cn->connect_error) die("DB lỗi");
