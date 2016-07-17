<?php
// Подключаем  библиотеку конфига
require_once("config/config.php");
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title><? echo $title; ?></title>
		<meta charset="utf-8">
		<meta name="description" content="<? echo $metaDescription; ?>">
		<meta name="keywords" content="<? echo $metaKeywords; ?>">
		<meta name="author" content="<? echo $metaAuthor; ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="google-site-verification" content="a0_OSXqo_eBiN-ZmOYz8QtP8HDFjhbVK1AOfwXKEO1Y" />
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<!-- Bootstrap -->
		<link href="js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="js/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
		<!-- JavaScript -->
		<script src="js/jquery/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body class="game-body">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4 game-btn">
					<form method="POST" action="javascript:void(null);">
						<button type="submit" class="btn btn-danger btn-lg btn-block">NEW GAME</button>
					</form>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
		<!-- FOOTER -->
		<div class="footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						Coded &amp; Designed by <a href="http://swl.pp.ua" class="f-link" target="_blank">Scorpion Web Lair</a>. Copyright 2016 &copy;<br>
					</div>
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
					</div>
				</div>
			</div>
		</div>
		<!-- GIRL -->
		<div class="game-girl">
		</div>
	</body>
</html>