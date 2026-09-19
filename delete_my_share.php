<?php
$user = $_GET['user'] ?? '';
$file = $_GET['file'] ?? '';
$logFile = "share_log/".$file;

if(file_exists($logFile) && file_get_contents($logFile) === $user){
    @unlink("global/".$file);
    @unlink($logFile);
}

echo "ok";
?>