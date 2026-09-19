<?php
$user = $_GET['user'] ?? '';
$path = $_GET['path'] ?? '';
$old = $_GET['old'] ?? '';
$new = $_GET['new'] ?? '';

$oldPath = "upload/$user/$path/$old";
$newPath = "upload/$user/$path/$new";

if(is_dir($oldPath)){
    rename($oldPath, $newPath);
}

echo "ok";
?>