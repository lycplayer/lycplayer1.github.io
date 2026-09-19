<?php
header('Content-Type: application/json');
function scan($dir, $root, &$result) {
    $files = scandir($dir);
    foreach ($files as $f) {
        if ($f == '.' || $f == '..') continue;
        $path = $dir . DIRECTORY_SEPARATOR . $f;
        $rel = str_replace($root, '', $path);
        $rel = str_replace('\\', '/', $rel);
        if (is_dir($path)) {
            $result[] = ['name' => $f, 'path' => $rel, 'type' => 'dir'];
            scan($path, $root, $result);
        } else {
            $result[] = ['name' => $f, 'path' => $rel, 'type' => 'file'];
        }
    }
}
$root = $_SERVER['DOCUMENT_ROOT'] . '/upload';
$result = [];
if (is_dir($root)) scan($root, $root, $result);
echo json_encode($result);
?>