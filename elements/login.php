<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "My_shop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

/*if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}*/

$email = $_POST['email'];
$password = $_POST['password'];


$result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");

if (mysqli_num_rows($result) > 0) {
    // Пользователь найден, создаем сессию и перенаправляем на главную страницу    
    $user = mysqli_fetch_assoc($result);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['username'],
        "email" => $user['email']
    ];

    echo "<script>alert('Добро пожаловать!!!');</script>";
    header("Refresh:0; url= ../profil.php");    
} else {
    // Пользователь не найден, выводим сообщение об ошибке
    echo "<script>alert('Неправильная почта или пароль');</script>";
    header("Refresh:0; url= ../sign_in.php");
}
mysqli_close($conn);
?>