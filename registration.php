<?php

// print_r($_POST);
// exit;

include_once('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);
    $sth = $dbh->prepare("INSERT INTO users (username, email, phone, password) VALUES ('$username', '$email', '$phone', '$password')");
    $sth->execute();
    $query = $dbh->prepare("SELECT * FROM `users` WHERE id = ".$dbh->lastInsertId());
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    // print_r($result);

    setcookie('uid',$result['id'], time()+172800);
    setcookie('uhsh',md5($result['username'].$result['email']), time()+172800);
    header("Location: /");
}
/*
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beauty_salon_db";

// Проверка подключения
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "Show TABLES;";
var_dump($conn->query($sql));

// Обработка данных из формы регистрации
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Вставка данных в базу данных
    $sql = "INSERT INTO users (username, email, phone, password) VALUES ('$username', '$email', '$phone', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Перенаправление на страницу входа после успешной регистрации
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();*/
?>
