<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Style_galv/Styly.css">
	<link rel="icon" href="icons/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style_o_companii/Styly.css">
	<link rel="icon" href="icons/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>О компании</title>
</head>

<?php
if (!isset($_SESSION['user'])){
  require 'elements/header.php';
} else {
  require 'elements/header_session.php';
}
?>

<body class="d-flex flex-column min-vh-100 container">
	<!--Контент-->
	<h2 align="center">О компании</h2>
	<div class="row">
		<div class="col-sm">
			<h4 align="center">Спасибо что выбрали нас!</h4>
			<p>Наша компания "Boucle" является одной из ведущих в области моды.
				Мы находимся на рынке с 1991 года и за это время мы заслужили не последнее место в мире моды. На
				нашем счету не одна сотня довольных покупателей!</p>
			<img src="Style_o_companii/Foto/1.jpg" class="img-thumbnail">
		</div>
		<div class=col-sm><img src="Style_o_companii/Foto/2.jpg" class="img-thumbnail mt-5"></div>
		<div class="col-sm">
			<img src="Style_o_companii/Foto/3.jpg" class="img-thumbnail">
			На данный момент мы сотрудничаем с такими компаниями-гигантами как "Abibas", "Buma" и "Pike". Мы создаем
			неповторимые дизайны для одежды данных компаний. А также продолжаем быть авантюристами в направлении
			моды, искать всё новые и новые дизайны для собственной продукции.
		</div>
	</div>
</body>

<?php
require 'elements/footer.php';
?>

</html>