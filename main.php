<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Style_galv/Styly.css">
	<link rel="icon" href="icons/favicon.ico" type="image/x-icon">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title>Boucle</title>
</head>

<!--header-->
<?php
if (!isset($_SESSION['user'])) {
	require 'elements/header.php';
} else {
	require 'elements/header_session.php';
}
?>

<body class="d-flex flex-column min-vh-100 container">
	<div id="carouselExampleIndicators" class="carousel  carousel-dark slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active" data-bs-interval="4000">
				<img class="d-block w-100"  src="carousel_img/1st.jpg" alt="">
				<div class="carousel-caption d-none d-md-block">
					<p class="fs-4 text-black-50">Успейте закупиться к пляжному сезону!</p>
				</div>
			</div>
			<div class="carousel-item" data-bs-interval="4000">
				<img class="d-block w-100" src="carousel_img/2nd.jpeg" alt="">
				<div class="carousel-caption d-none d-md-block">
					<p class="fs-4 text-white">Самые модный наряды для мужчин и женщин!</p>
				</div>
			</div>			
		</div>
	</div>

	<div>
		<h3 class="text-center border-top border-bottom mt-2 mb-2 pb-1">ТОП НАШИХ ТОВАРОВ</h3>
	</div>
	<div class="row text-center container">
		<div class="col mt-4 border-end">
			<h3>ТОП-3</h3>
			<img src="Style_galv\Foto\hudy\6.jpg" alt="">
			<p class="fs-5">ОВЕРСАЙЗ-ХУДИ <br> 1500 ПРОДАЖ!</p>
		</div>
		<div class="col">
			<h3 class="text-warning">ТОП-1</h3>
			<img src="Style_galv\Foto\svitsh\6.jpg" alt="">				
			<p class="fs-5">МОДНЫЙ СВИТШОТ <br> 7000 ПРОДАЖ!</p>
		</div>
		<div class="col mt-4 border-start">
			<h3 class="text-black-50">ТОП-2</h3>
			<img src="Style_galv\Foto\hats\4.jpg" alt="">
			<p class="fs-5">ИЗЯЩНАЯ ШЛЯПА <br> 3250 ПРОДАЖ!</p>
		</div>
	</div>
</body>

<?php
require 'elements/footer.php';
?>

</html>