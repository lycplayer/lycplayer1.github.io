<?php
$path = $_GET['path'] ?? '';
$type = $_GET['type'] ?? '';
$root = $_SERVER['DOCUMENT_ROOT'] . '/upload';
$full = $root . $path;

if ($type === 'dir' && is_dir($full)) {
    function delDir($d) {
        $fs = array_diff(scandir($d), ['.', '..']);
        foreach ($fs as $f) {
            $p = $d . DIRECTORY_SEPARATOR . $f;
            if (is_dir($p)) delDir($p); else unlink($p);
        }
        rmdir($d);
    }
    delDir($full);
} else if (is_file($full)) {
    unlink($full);
}
echo 'ok';
?>