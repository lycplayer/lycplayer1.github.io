<?php
$file = 'blog_data.json';
echo json_encode(
    file_exists($file) ? json_decode(file_get_contents($file), true) : [],
    JSON_UNESCAPED_UNICODE
);
?>