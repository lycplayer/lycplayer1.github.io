<?php
$path = $_GET['path'] ?? '';
$new = $_GET['new'] ?? '';
$type = $_GET['type'] ?? '';
$root = $_SERVER['DOCUMENT_ROOT'] . '/upload';
$full = $root . $path;
$dir = dirname($full);
$target = $dir . DIRECTORY_SEPARATOR . $new;

if (($type === 'dir' && is_dir($full)) || ($type === 'file' && is_file($full))) {
    rename($full, $target);
}
echo 'ok';
?>