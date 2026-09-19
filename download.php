<?php
$type = $_GET['type'] ?? '';
$user = $_GET['user'] ?? '';
$path = $_GET['path'] ?? '';
$file = $_GET['file'] ?? '';
$file = basename($file);

if($type === 'user'){
    $p = "upload/$user/$path/$file";
} else {
    $p = "global/$file";
}

header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"$file\"");
readfile($p);
?>