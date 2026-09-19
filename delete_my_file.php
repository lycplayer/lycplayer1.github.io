<?php
$user = $_GET['user'] ?? '';
$path = $_GET['path'] ?? '';
$file = $_GET['file'] ?? '';
$full = "upload/$user/$path/$file";

if(file_exists($full)) unlink($full);
@unlink("global/$file");
@unlink("share_log/$file");
echo "ok";
?>