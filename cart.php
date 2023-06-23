<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Style_cart/style.css">
	<link rel="icon" href="icons/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">
	<title>Cart</title>
</head>

<!--header-->

<?php
if (!isset($_SESSION['user'])) {
	require 'elements/header.php';
} else {
	require 'elements/header_session.php';
}
?>

<!--main_block-->
<body class="d-flex flex-column min-vh-100 container">

<h2 class="text-center">Ваши товары</h2>
 
		<?php

		$total = 0;

		$output .= "
		<table class='table table-bordered table-striped'>
		<tr>
		<th>ID</th>
		<th>Название</th>
		<th>Цена</th>
		<th>Количество</th>
		<th>Итого</th>
		<th></th>
		</tr>
		";  

		if (!empty($_SESSION['cart'])) {

			foreach ($_SESSION['cart'] as $key => $value) {

				$output .= "
				<tr>
				<td>".$value['id']."</td>
				<td>".$value['name']."</td>
				<td>".$value['price']."</td>
				<td>".$value['quantity']."</td>
				<td>".number_format($value['price'] * $value['quantity'])."₽</td>
				<td>
				<form action='elements/del_one_cart.php' method='POST'>
				<input type='hidden' name='action' value='remove'>
				<input type='hidden' name='id' value=".$value['id'].">
				<div class=d-grid gap-2>
				<input type='submit' name='del' class='btn btn-danger' value='Удалить'>    
				</div>          
				</form>
				</td>
				</tr>
				";

				$total = $total + $value['quantity'] * $value['price'];

			}			
			$output .= "
			<tr>
			<td colspan='3'></td>
			<td></b>Итоговая сумма</b></td>
			<td>".number_format($total,2)."₽</td>
			<td>
			<form action='elements/remove_cart.php'>
			<div class=d-grid gap-2>
			<button class='btn btn-success btn-primary'>Заказать</button>
			</div
			</form>
			</a>
			</td>
			</tr>	
			";
			
			
			
		}
		echo "$output";
		?>

</body>

</html>