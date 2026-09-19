<?php
$user = $_GET['user'] ?? '';
$path = $_GET['path'] ?? '';
$dir = "upload/$user/$path/";

if(!is_dir($dir)) mkdir($dir,0777,true);
move_uploaded_file($_FILES['file']['tmp_name'], $dir.$_FILES['file']['name']);
echo "ok";
?>