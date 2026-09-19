<?php
$user = $_GET['user'] ?? '';
$path = $_GET['path'] ?? '';
$file = $_GET['file'] ?? '';
$source = "upload/$user/$path/$file";
$global = "global/";
$log = "share_log/";

if(!is_dir($global)) mkdir($global,0777,true);
if(!is_dir($log)) mkdir($log,0777,true);
copy($source, $global.$file);
file_put_contents($log.$file, $user);
echo "ok";
?>