<?php
$path = $_GET['path'] ?? '';
$root = $_SERVER['DOCUMENT_ROOT'] . '/upload';
$file = $root . $path;

if (!is_file($file)) exit('文件不存在');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . basename($file));
readfile($file);
?>