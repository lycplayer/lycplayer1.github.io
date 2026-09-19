<?php
$dir = "global/";
$files = [];
if(is_dir($dir)){
    $arr = scandir($dir);
    foreach($arr as $f){
        if($f != "." && $f != "..") $files[] = $f;
    }
}
echo json_encode($files);
?>