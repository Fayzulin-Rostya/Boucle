<?php
session_start();
if ($_SESSION['user']) {
    header("Refresh:0; url=profil.php");
}
?>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="Style_sign_in/off-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Style_galv/Styly.css">
    <link rel="icon" href="icons/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Вход</title>
</head>

<?php
require 'elements/header.php';
?>

<body class="d-flex flex-column min-vh-100 container">
    <main class="h-75 pt-lg-5 pb-6">
        <div class="text-center row">
            <div class="col-sm"></div>
            <main class="col-sm form-signin">
                <form method="post" action="elements/registration.php" width="1">
                    <h1 class="h3 mt-5 mb-3 fw-normal"><b>Регистрация</b></h1>
                    <div class="form-floating">
                        <input type="text" name="text" class="form-control mt-5" id="floatingUserName" placeholder="UserName" />
                        <label for="floatingUserName">User Name</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" />
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="checkbox mb-3 mt-3">
                        <!--space-->
                    </div>
                    <input class="w-100 btn btn-lg btn-warning rounded-pill" type="submit" name="submit">
                </form>
            </main>
            <div class="col-sm"></div>
        </div>
    </main>
</body>



<?php
require 'elements/footer.php';
?>

</html>