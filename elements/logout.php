<?php
session_start();
unset($_SESSION['user']);
header("Refresh:0; url=../sign_in.php");
?>