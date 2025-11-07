<?php
if (!isset($_GET['uuid'])) {
	header("Location: ./");
	return false;
}
$uuid = $_GET['uuid'];
require "config/Controller.php";
$Controller = new Controller;
$conn = $Controller->conn;

$check = $conn->prepare("SELECT status FROM users WHERE uuid = '$uuid'");
try {
	$check->execute();
	if ( $check->rowCount() < 1 ) {
		echo "Invalid or expired link! <a href='./'>Go home</a>";
		return false;
	}
	$get_status = $check->fetch();
	$user_status = $get_status['status'];
	if ( $user_status == 'confirmed' ) {
		echo "Link already expired! <a href='./'>Go home</a>";
		return false;
	}
} catch (PDOException $e) {
	echo $e->getMessage();
	return false;
}


$sql = "UPDATE users
SET status = 'confirmed'
WHERE uuid = '$uuid'";
$query = $conn->prepare($sql);
try {
	$query->execute();
} catch (PDOException $e) {
	echo $e->getMessage();
	return false;
}

?>
<!doctype html>
<html>

<head>

	<script>const Uss = JSON.parse(atob('eyJAUkUtUE9TVCI6ZmFsc2UsIlBsYXRmb3JtIjoiQWxwaGEgQmFuayJ9'));</script>

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Account activation - Reichsburg Online Banking</title>
	<meta name="description" content="">

	<!-- CSS here -->
	<link rel="stylesheet" href="uss-modules/uss-bank/bank-home/assets/css/animate.css">
	<link rel="stylesheet" href="uss-modules/uss-bank/bank-home/assets/css/swiper-bundle.css">
	<link rel="stylesheet" href="uss-modules/uss-bank/bank-home/assets/css/slick.css">
	<link rel="stylesheet" href="uss-modules/uss-bank/bank-home/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="uss-modules/uss-bank/bank-home/assets/css/font-awesome-pro.css">
	<link rel="stylesheet" href="uss-modules/uss-bank/bank-home/assets/css/flaticon.css">
	<link rel="stylesheet" href="uss-modules/uss-bank/bank-home/assets/css/spacing.css">
	<link rel="stylesheet" href="uss-modules/uss-bank/bank-home/assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="accounts/assets/vendor/mckenziearts/laravel-notify/css/notify.css" />

	<link rel="shortcut icon" type="image/x-icon" href="logo.png">

	<style>
		.preloader {
			background-position: center;
			background-repeat: no-repeat;
			background-image: url(logo.png);
			background-size: 120px 120px;
		}
	</style>

	<meta name='viewport' content='width=device-width, initial-scale=1.0' data-rc='viewport'>
	<link rel='stylesheet' href='uss-core/assets/css/bootstrap.min.css' data-rc='bootstrap'>
	<link rel='stylesheet' href='uss-core/assets/vendor/bootstrap-icons/bootstrap-icons.css' data-rc='bs-icon'>
	<link rel='stylesheet' href='uss-core/assets/css/animate.min.css' data-rc='animate'>
	<link rel='stylesheet' href='uss-core/assets/vendor/glightbox/glightbox.min.css' data-rc='glightbox'>
	<link rel='stylesheet' href='uss-core/assets/vendor/toastr/toastr.min.css' data-rc='toastr'>
	<link rel='stylesheet' href='uss-core/assets/css/font-size.min.css' data-rc='font-size'>
	<link rel='stylesheet' href='uss-core/assets/css/main.css' data-rc='main-css'>
	<link rel="stylesheet" href="uss-modules/uss-dashboard-main/ud-assets/css/default.css" />
	<link rel='stylesheet' href='uss-modules/uss-bank/style.css'>
	<link rel='stylesheet' href='uss-modules/uss-support/utils/style.css' />
</head>

<body class="uss">
	<!-- header area start -->
	<?php include 'inc/header.php' ?>
	<!-- header area end -->


	<main class="mb-5">
		<div class="row g-0 auth-row">
			<div class="pt-5 pb-4">
				<div class="auth-cover-wrapper bg-primary-100">
					<div class="auth-cover">
						<div class="title text-center">
							<!-- image -->
							<!-- <div class='mb-2'>
								<img alt=""
									src='logo.png'
									height="70"
								/>
							</div> -->
							<p class="">Account activation</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6 m-auto pb-5">
				<div class="border py-3 px-4 rounded-2 shadow m-1 mx-2 mx-sm-4">
					<div class="flex-grow-1">
						<div class="row">
							<div class="col-sm-12 text-center">										
								<p class="h1" style="margin-bottom:25px;"><i>🎉</i></p>
								<p class="h3 fw-light mb-4">Account successfully activated!</p>
								<p style="color:#555;margin-bottom:25px;">Your account has been activated, and you're all set to start using AAVE-Investment platform. We're excited to have you on board!</p>
								<p class="mb-4"><a href="login" class="tp-btn">Sign In</a></p>
							</div>

						<div class="mt-2">
							<p class="text-sm text-center">
								Don't have an account yet?
								<a href="signup" class='text-nowrap'>Create an account</a>
							</p>
						</div>

					</div>
				</div>

			</div>

		</div>
	</main>

	<!-- footer area start -->
	<?php include 'inc/footer.php' ?>
	<!-- footer area end -->

	<script src='uss-core/assets/js/jquery-3.6.4.min.js' data-rc='jquery'></script>
	<script src="accounts/assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script src='js/forms.js'></script>
	<script src='uss-core/assets/js/bootstrap.bundle.min.js' data-rc='bootstrap'></script>
	<script src='uss-core/assets/js/bootbox.all.min.js' data-rc='bootbox'></script>
	<script src='uss-core/assets/vendor/glightbox/glightbox.min.js' data-rc='glightbox'></script>
	<script src='uss-core/assets/vendor/toastr/toastr.min.js' data-rc='toastr'></script>
	<script src='uss-core/assets/vendor/notiflix/notiflix-loading-aio-3.2.6.min.js' data-rc='notiflix'></script>
	<script src='uss-core/assets/vendor/notiflix/notiflix-block-aio-3.2.6.min.js' data-rc='notiflix'></script>
	<script src='uss-core/assets/js/main.js' data-rc='main-js'></script>
	<script src="uss-modules/uss-dashboard-main/ud-assets/js/polyfill.js"></script>
	<script src="uss-modules/uss-dashboard-main/ud-assets/js/access.js"></script>

	<!-- JS here -->
	<script src="uss-modules/uss-bank/bank-home/assets/js/vendor/waypoints.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/meanmenu.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/swiper-bundle.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/slick.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/jquery-appear.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/jquery-knob.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/range-slider.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/magnific-popup.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/nice-select.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/purecounter.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/countdown.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/wow.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/tweenmax.min.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/isotope-pkgd.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/imagesloaded-pkgd.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/main.js"></script>

	<script type='module'>
		import autosize from 'uss-modules/uss-dashboard-main/ud-assets/js/autosize.js'
		if ($('.chat-block textarea').length) autosize($('.chat-block textarea'));
	</script>
	<script src='uss-modules/uss-support/utils/script.js'></script>

</body>

</html>