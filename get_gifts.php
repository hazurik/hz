<?php
$gifts = [];

if (file_exists('gifts.txt')) {
    $file = fopen('gifts.txt', 'r');
    while (($line = fgets($file)) !== false) {
        list($username, $gift_code) = explode(':', trim($line));
        $gifts[] = ['username' => $username, 'gift_code' => $gift_code];
    }
    fclose($file);
}

echo json_encode($gifts);
?>
