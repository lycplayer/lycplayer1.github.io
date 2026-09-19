<?php
$user = $_GET['user'] ?? '';
$path = $_GET['path'] ?? '';
$name = $_GET['name'] ?? '';
$fullPath = "upload/$user/$path/$name";

function delDir($dir){
    if(!is_dir($dir)) return;
    $files = scandir($dir);
    foreach($files as $f){
        if($f != "." && $f != ".."){
            $p = $dir."/".$f;
            if(is_dir($p)) delDir($p); else unlink($p);
        }
    }
    rmdir($dir);
}

delDir($fullPath);
echo "ok";
?>