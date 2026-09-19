<?php
$user = $_GET['user'] ?? '';
$path = $_GET['path'] ?? '';
$old = $_GET['old'] ?? '';
$new = $_GET['new'] ?? '';
$dir = "upload/$user/$path/";
rename($dir.$old, $dir.$new);
echo "ok";
?>