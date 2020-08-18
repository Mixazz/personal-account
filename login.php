<?php session_start() ?>
<?php require 'functions.php' ?>

<!DOCTYPE html>
<html lang="en" data-brk-skin="brk-blue.css">

<head>
	<title>Login - Berserk HTML</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="favicon.ico">
	<meta name="theme-color" content="#2775FF">
	<meta name="keywords" content="themeforest, theme, html, template">
	<meta name="description" content="themeforest, theme, html, template">
	<link rel="stylesheet" id="brk-direction-bootstrap" href="css/assets/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" id="brk-skin-color" href="css/skins/brk-blue.css">
	<link id="brk-base-color" rel="stylesheet" href="css/skins/brk-base-color.css">
	<link rel="stylesheet" id="brk-direction-offsets" href="css/assets/offsets.css">
	<link id="brk-css-min" rel="stylesheet" href="css/assets/styles.min.css">
</head>

<body>
	<div class="main-wrapper">
		<main class="main-container">
			<section>
				<div class="row no-gutters">
					<div class="col-12 col-lg-5 d-lg-block d-none">
						<div class="full-screen position-relative d-flex flex-column justify-content-center align-items-center z-index-2">
							<div class="brk-backgrounds brk-base-bg-gradient-15 brk-abs-overlay" data-brk-library="component__backgrounds_css,component__backgrounds_js,assets_particleground">
								<div class="brk-backgrounds__canvas brk-particles-standart"></div>
							</div>
							<a href="login.php" class="z-index-2 mb-60 pl-15 pr-15">
								<img src="img/456x82_logo1.png" alt="logo" class="">
							</a>
							<a href="index.php" class="btn-backgrounds btn-backgrounds_transparent btn-backgrounds_left-icon font__family-montserrat font__weight-normal text-uppercase font__size-13 z-index-2 text-center" style="padding-left:85px; padding-right: 60px;" data-brk-library="component__button">
								<span class="text">Вернуться на главную</span>
								<span class="before"><i class="fas fa-arrow-left"></i></span>
							</a>
						</div>
					</div>
					<div class="col-12 col-lg-7">
						<div class="full-screen d-flex align-items-center pt-30 pb-30 pt-lg-0 pb-lg-0">
							<div class="container-fluid">
								<div class="row justify-content-lg-start justify-content-center">
									<div class="col-lg-2 d-none d-lg-block"></div>
									<div class="col-12 col-lg-10">
										<h1 class="font__family-montserrat font__weight-bold font__size-42 line__height-42 mt-0 mb-45 text-center text-lg-left">ЛИЧНЫЙ КАБИНЕТ</h1>


										<form action="#" class="brk-form brk-form-strict maxw-570 mx-auto mx-lg-0" data-brk-library="component__form">
											<div class="col-sm-12">
												<?php display_flash_message('success') ?>
												<?php display_flash_message('danger') ?>

											</div>
											<input type="text" placeholder="Email адрес" required>
											<input type="password" placeholder="Пароль" required>
											<div class="no-margin pl-10 pr-10 mb-30 mt-40 d-flex flex-wrap justify-content-between align-items-center">
												<div>
													<input id="checkbox-strict-1" name="checkbox" type="checkbox" value="1" checked="checked">
													<label class="brk-form-checkbox-label" for="checkbox-strict-1">Запомнить меня</label>
												</div>
												<div>
													<a class="font__size-14 line__height-24 brk-base-font-color text-decoration_underline" href="#">Забыли пароль?</a>
												</div>
											</div>
											<div class="d-flex flex-wrap justify-content-between align-items-center flex-column flex-lg-row">
												<button class="btn-backgrounds btn-backgrounds btn-backgrounds_280 btn-backgrounds_white btn-backgrounds_left-icon font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center letter-spacing-20 mt-10" data-brk-library="component__button">
													<span class="text">Войти</span>
													<span class="before"><i class="far fa-hand-point-right"></i></span>
												</button>
												<a href="register.php" class="btn-backgrounds btn-backgrounds btn-backgrounds_280 btn-backgrounds_white font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center letter-spacing-20 mt-10" data-brk-library="component__button">
													<span class="text">Регистрицая</span>
													<span class="before"><i class="fas fa-user"></i></span>
												</a>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
	<a href="#top" id="toTop"></a>
	<script defer="defer" src="js/scripts.min.js"></script>
</body>

</html>