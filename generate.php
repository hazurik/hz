<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $giftCode = bin2hex(random_bytes(10)); // Генерация случайного кода подарка
    $gift = $username . ':' . $giftCode . PHP_EOL;

    file_put_contents('gifts.txt', $gift, FILE_APPEND);

    echo 'Gift generated successfully!';
} else {
    echo 'Invalid request method.';
}
?>
