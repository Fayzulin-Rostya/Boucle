<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Style_partneram/Styly.css">
	<link rel="icon" href="icons/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Партнерам</title>
</head>

<?php
if (!isset($_SESSION['user'])) {
	require 'elements/header.php';
} else {
	require 'elements/header_session.php';
}
?>

<body class="d-flex flex-column min-vh-100 container">

	<!--Контент-->

	<div class="row">
		<div class="col-md-5">
			<form class="needs-validation" novalidate>
				<div class="form-row">
					<div class="col-md-9 mb-3">
						<label for="validationCustom01">Имя</label>
						<input type="text" class="form-control" id="validationCustom01" placeholder="Имя" value="" required>
						<div class="valid-feedback">
							Оk!
						</div>
					</div>
					<div class="col-md-9 mb-3">
						<label for="validationCustom02">Фамилия</label>
						<input type="text" class="form-control" id="validationCustom02" placeholder="Фамилия" value="" required>
						<div class="valid-feedback">
							Ok!
						</div>
					</div>
					<div class="col-md-9 mb-3">
						<label for="validationCustom03">Отвество</label>
						<input type="text" class="form-control" id="validationCustom02" placeholder="Отвество" value="" required>
						<div class="valid-feedback">
							Ok!
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-9 mb-3">
						<label for="validationCustom03">Название организации</label>
						<input type="text" class="form-control" id="validationCustom03" placeholder="Название организации" required>
						<div class="invalid-feedback">
							Пожалуйста корректно укажите организацию.
						</div>
					</div>
					<div class="col-md-9 mb-3">
						<label for="validationCustom04">E-mail</label>
						<input type="text" class="form-control" id="validationCustom04" placeholder="E-mail" required>
						<div class="invalid-feedback">
							Пожалуйста корректно укажите E-mail.
						</div>
					</div>
					<div class="col-md-9 mb-3">
						<label for="validationCustom05">Номер телефона</label>
						<input type="numbers" class="form-control" id="validationCustom05" placeholder="+7 (___) ___ __-__" required>
						<div class="invalid-feedback">
							Пожалуйста корректно укажите номер телефона.
						</div>
					</div>
					<div class="col-md-9 mb-3">
						<label for="validationCustom06">Напишите о себе</label>
						<textarea type="texta" class="form-control" id="validationCustom06" required placeholder="Сколько лет вашему бизнему, с какими российскими и зарубежными брендами вы работаете, укажите средний месячный оборот!">
			 			</textarea>
					</div>
				</div>
				<div class="form-group mb-3">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
						<label class="form-check-label" for="invalidCheck">
							Я согласен на обработку личных данных.
						</label>
						<div class="invalid-feedback">
							Вы должны подтвердить согласие на обработку данных.
						</div>
					</div>
				</div>
				<button class="btn btn-warning rounded-pill" type="submit">Отправить</button>
			</form>
		</div>
		<div class="col-md-6 mt-5">
			<div class="container">
				<h2 align="center">Стань партнером Boucle в своем регионе!</h3>
					<p align="center">Если вы уже связаны с нашим брендом и у вас есть один или несколько магазинов
						продажы одежды в сегменте middle up или premium, у вас есть возможность стать региональным
						партнером одного из самых успешних российских брендов. Вы можете заполнить форму заявки и
						наш менеджер свяжется с вами в ближайшее время!</p>
					<img src="Style_partneram/Foto/1.png" class="first" width="500px" height="300px">
			</div>
		</div>
	</div>
	</div>



	<script>
		(function() {
			'use strict';
			window.addEventListener('load', function() {
				var forms = document.getElementsByClassName('needs-validation');
				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>

</body>

<?php
require 'elements/footer.php';
?>

</html>