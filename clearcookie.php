<?php
setcookie("user", "", time() - 1, "/");
header("Location: login.html");
