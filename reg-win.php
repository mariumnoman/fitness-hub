<?php
$con = new mysqli("localhost","root","","fitness hub");

// Check connection
if ($con->connect_error) {
  die("Failed to connect to MySQL: " .$con->connect_error);
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bootstrap 5 Carousel Slider With Thumbnail</title>
	<link href="https://fonts.googleapis.com/css2?family=Moon+Dance&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
    <style>
        body {
	font-family: montserrat;
}
.navbar-nav a {
	font-size: 15px;
	text-transform: uppercase;
	font-weight: 700;
	text-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
}
.navbar-light .navbar-brand {
	color: #fff;
	font-size: 25px;
	text-transform: uppercase;
	font-weight: bold;
	letter-spacing: 2px;
}
.navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
	color: #fff;
}
.navbar-light .navbar-nav .nav-link {
	color: #fff;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
	color: yellow;
}
.navbar-toggler {
	padding: 1px 5px;
	font-size: 18px;
	line-height: 0.3;
	background: #fff;
}
/*  carousel      */

.carousel-item {
	height: 100vh;
	min-height: 300px;
}
.bg-1 {
	background-image: url(img/1.jpg);
}
.bg-2 {
	background-image: url(img/2.jpg);
}
.bg-3 {
	background-image: url(img/3.jpg);
}
.bg-1, .bg-2, .bg-3 {
	-webkit-background-size: cover;
	background-size: cover;
}
.carousel-caption {
	bottom: 220px;
	z-index: 2;
}
.carousel-caption h5 {
	font-size: 85px;
	text-transform: capitalize;
	letter-spacing: 2px;
	margin-top: 25px;
	font-family: 'Moon Dance', cursive;
}
.carousel-caption p {
	width: 60%;
	margin: auto;
	font-size: 18px;
	line-height: 1.9;
}
.carousel-caption a {
	text-transform: uppercase;
	text-decoration: none;
	padding: 5px 20px;
	display: inline-block;
	color: #fff;
	margin-top: 15px;
	border-radius: 5px;
}
.carousel-inner:before {
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	background: rgba(0, 0, 0, 0.6);
	z-index: 1;
}
.carousel-indicators {
	bottom: 65px;
}
.carousel-indicators button {
	width: 100px !important;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
	.navbar-nav {
		text-align: center;
	}
	.navbar-collapse {
		background: #fff;
	}
	.navbar-collapse .nav-item .nav-link {
		color: #000;
	}
	.carousel-caption {
		bottom: 350px;
	}
	.carousel-caption h5 {
		font-size: 65px;
	}
	.carousel-caption p {
		font-size: 18px;
		width: 100%;
	}
}
@media only screen and (max-width: 767px) {
	.navbar-nav {
		text-align: center;
	}
	.navbar-collapse .nav-item .nav-link {
		color: #000;
	}
	.carousel-caption {
		bottom: 165px;
	}
	.carousel-caption h5 {
		font-size: 25px;
	}
	.carousel-caption p {
		font-size: 12px;
		width: 100%;
	}
	.carousel-caption a {
		padding: 10px 15px;
		font-size: 15px;
	}
	.navbar-collapse {
		background: #fff;
	}
}

    </style>
</head>
<body>

	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleCaptions">
		<div class="carousel-inner">
			<div class="carousel-item active bg-1">
				<div class="carousel-caption">
					<h5>Best In <span class="text-warning">Tourism</span></h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, culpa.</p><a class="bg-warning text-white" href="#">Learn More</a>
				</div>
			</div>
			<div class="carousel-item bg-2">
				<div class="carousel-caption">
					<h5>Worldwide <span class="text-warning">Recognition</span></h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, culpa.</p><a class="bg-warning text-white" href="#">Learn More</a>
				</div>
			</div>
			<div class="carousel-item bg-3">
				<div class="carousel-caption">
					<h5>Effordable <span class="text-warning">Budget</span></h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, culpa.</p><a class="bg-warning text-white" href="#">Learn More</a>
				</div>
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleCaptions" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleCaptions" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button> <!--thumbnails-->
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleCaptions" type="button"><img class="img-fluid" src="img/1.jpg"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleCaptions" type="button"><img class="img-fluid" src="img/2.jpg"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleCaptions" type="button"><img class="img-fluid" src="img/3.jpg"></button>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
	</script>
</body>
</html>
