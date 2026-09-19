<?php
$index = $_POST['index'] ?? 0;
$file = 'blog_data.json';

if(!file_exists($file)) exit;
$data = json_decode(file_get_contents($file), true);

if(isset($data[$index])){
    array_splice($data, $index, 1);
    file_put_contents($file, json_encode($data, JSON_UNESCAPED_UNICODE));
}

echo "ok";
?>