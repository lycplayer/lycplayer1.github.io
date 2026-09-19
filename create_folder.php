<?php
$user = $_GET['user'] ?? '';
$path = $_GET['path'] ?? '';
$name = $_GET['name'] ?? '';
$fullPath = "upload/$user/$path/$name";

if(!is_dir(dirname($fullPath))){
    mkdir(dirname($fullPath), 0777, true);
}
mkdir($fullPath, 0777);
echo "ok";
?>