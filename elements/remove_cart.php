<?php 
session_start();
unset($_SESSION['cart']);
echo "<script>alert('Спасибо за заказ!');</script>";
header("Refresh:0; url=../index.php");
?>

