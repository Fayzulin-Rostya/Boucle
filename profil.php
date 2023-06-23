<?php
session_start();
//var_dump($_SESSION);
if (!$_SESSION['user']) {
    header("Refresh:0; url=sign_in.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Style_galv/Styly.css">
    <link rel="icon" href="icons/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil</title>
</head>

<?php
require 'elements/header_session.php';
?>


<body class="d-flex flex-column min-vh-100 container " >

    <!-- User id: <h2><?= $_SESSION['user']['id']  ?></h2> -->
    Username: <h2><?= $_SESSION['user']['name']  ?></h2>
    Email: <h2><?= $_SESSION['user']['email']  ?></h2>

</body>

<?php
require 'elements/footer.php';
?>

</html>