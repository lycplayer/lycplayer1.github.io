<?php
$user = $_GET['user'] ?? '';
$path = $_GET['path'] ?? '';
$dir = "upload/$user/$path";
$result = [];

if(is_dir($dir)){
    $files = scandir($dir);
    foreach($files as $f){
        if($f == "." || $f == "..") continue;
        $type = is_dir($dir."/".$f) ? "dir" : "file";
        $result[] = ["name"=>$f, "type"=>$type];
    }
}

echo json_encode($result);
?>