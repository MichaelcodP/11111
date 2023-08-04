<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Отримуємо значення полів форми
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $travelers = $_POST['travelers'];

    // Перевіряємо, чи всі поля заповнені
    if (empty($destination) || empty($date) || empty($travelers)) {
        echo 'Помилка: не всі поля заповнені.';
        exit;
    }

    // Параметри підключення до бази даних
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'bookings';

    // Підключення до бази даних
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die('Помилка підключення до бази даних: ' . $conn->connect_error);
    }

    // Підготовка SQL-запиту для вставки даних
    $sql = "INSERT INTO bookings (destination, date, travelers) VALUES ('$destination', '$date', '$travelers')";

    if ($conn->query($sql) === true) {
        // Якщо дані успішно вставлені
        echo 'Бронювання успішно збережено у базі даних.';
    } else {
        echo 'Помилка при збереженні бронювання: ' . $conn->error;
    }

    // Закриваємо підключення до бази даних
    $conn->close();
} else {
    // Якщо форма не була відправлена, повернення помилки
    echo 'Помилка: форма не відправлена.';
}
?>
