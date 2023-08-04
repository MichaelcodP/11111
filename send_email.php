<?php
require 'vendor/autoload.php'; // Залежності для використання бібліотеки Nodemailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$email = $_POST['email']; // Отримайте значення поля електронної пошти з форми

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'mishap7103@gmail.com';
    $mail->Password   = 'mzeavxocgvqidjhe';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('mishap7103@gmail.com');
    $mail->addAddress('mishap7103@gmail.com');
    $mail->Subject = 'Лист надіслений через node.js';
    $mail->Body    = 'Текст цього листа';

	 $mail->CharSet = 'UTF-8';


    if ($mail->send()) {
        echo 'Лист успішно відправлено';
    } else {
        echo 'Помилка при відправці листа: ' . $mail->ErrorInfo;
    }
} catch (Exception $e) {
    echo "Помилка при відправці листа: {$mail->ErrorInfo}";
}
?>
