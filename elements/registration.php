<?php
if ($_SESSION['user']) {
    header("Refresh:0; url=prfile.php");
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "My_shop";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    // Получаем данные из формы
    $names = $_POST['text'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}

// SQL-запрос для вставки данных в таблицу
$sql = "INSERT INTO users (username, password, email) VALUES ('$names', '$password', '$email')";

// SQL-запрос для выпорки данных
$test = "SELECT * FROM users WHERE email = '$email'";

$result = mysqli_query($conn, $test);
// Проверка данных
if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Пользователь с таким email уже зарегистрирован');</script>";
    header("Refresh:0; url=../sign_up.php");
    exit();
} else {
    // данные отсутствуют в базе, добавляем их
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Вы успешно зарегистрировались, пожалуйста войдите в свою учетную запись');</script>";
        header("Refresh:0; url=../sign_in.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>