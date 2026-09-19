<?php
$user = $_GET['user'] ?? '';
$shareLog = "share_log/";
$list = [];

if(is_dir($shareLog)){
    $files = scandir($shareLog);
    foreach($files as $f){
        if($f == "." || $f == "..") continue;
        if(file_get_contents($shareLog.$f) === $user){
            $list[] = $f;
        }
    }
}

echo json_encode($list);
?>