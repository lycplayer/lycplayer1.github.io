<?php
$file = $_GET['file'] ?? '';
$path = "global/" . basename($file);

if(file_exists($path)){
    unlink($path);
}

echo "ok";
?>