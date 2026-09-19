<?php
$index = $_POST['index'] ?? 0;
$user = $_POST['user'] ?? '';
$content = $_POST['content'] ?? '';
$time = date('Y-m-d H:i');

if(!$user || !$content) exit;

$file = 'blog_data.json';
if(!file_exists($file)) exit;

$data = json_decode(file_get_contents($file), true);
if(!isset($data[$index])) exit;

if(!isset($data[$index]['comments'])) $data[$index]['comments'] = [];

array_push($data[$index]['comments'], [
    'user' => $user,
    'content' => $content,
    'time' => $time
]);

file_put_contents($file, json_encode($data, JSON_UNESCAPED_UNICODE));
echo "ok";
?>