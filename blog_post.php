<?php
$user = $_POST['user'] ?? '';
$title = $_POST['title'] ?? '';
$content = $_POST['content'] ?? '';
$time = date('Y-m-d H:i');

if(!$title || !$content) exit;

$file = 'blog_data.json';
$data = [];
if(file_exists($file)) $data = json_decode(file_get_contents($file), true);

array_unshift($data, [
    'user' => $user,
    'title' => $title,
    'content' => $content,
    'time' => $time,
    'likes' => [],
    'comments' => []
]);

file_put_contents($file, json_encode($data, JSON_UNESCAPED_UNICODE));
echo "ok";
?>