<?php
$to = 'rage@gmail.com';
$from = 'rage.zp.ua';
$subject = 'Форма заявки Rage';
if (!empty($_POST['user_name']) && !empty($_POST['user_email']) && !empty($_POST['user_phone'])) {
    $message = "
    <html>
        <head>
        <title>{$subject}</title>
        <style>body{font: normal 1rem/1.5 sans-serif;}</style>
        </head>
        <body>
        <h2>Заявка от {$_POST['user_name']}</h2>
        <p>Email: {$_POST['user_email']}</p>
        <p>Телефон: {$_POST['user_phone']}</p>";
    $message .= "------<br>Основной сайт";
    $message .= "</body>
        </html>
    ";
    $headers = 'From: ' . $from . "\r\n" .
        'Reply-To: ' . $_POST['email'] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    mail($to, $subject, $message, $headers);
}
header('Location: page-thanks.php');