<?php
$user = $_GET['user'] ?? '';
$dir = "global/";
$list = [];

if(is_dir($dir)){
    $files = scandir($dir);
    foreach($files as $f){
        if($f != "." && $f != ".."){
            $list[] = $f;
        }
    }
}

echo json_encode($list);
?>