<?php
$index = $_POST['index'] ?? 0;
$user = $_POST['user'] ?? '';
$file = 'blog_data.json';

if(!$user || !file_exists($file)) exit;

$data = json_decode(file_get_contents($file), true);
if(!isset($data[$index])) exit;

// 点赞/取消点赞 逻辑（朋友圈一样）
if(!isset($data[$index]['likes'])) $data[$index]['likes'] = [];
$likes = $data[$index]['likes'];

if(($key = array_search($user, $likes)) !== false){
    array_splice($likes, $key, 1);
} else {
    $likes[] = $user;
}

$data[$index]['likes'] = $likes;
file_put_contents($file, json_encode($data, JSON_UNESCAPED_UNICODE));
echo "ok";
?>