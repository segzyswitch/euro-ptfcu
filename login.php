<?php
session_start();
if (isset($_SESSION["reichs_account_id"]) && isset($_SESSION["accnt_status"])) {
	header("Location: accounts/index");
}
?>
<!doctype html>
<html>

<head>

	<script>const Uss = JSON.parse(atob('eyJAUkUtUE9TVCI6ZmFsc2UsIlBsYXRmb3JtIjoiQWxwaGEgQmFuayJ9'));</script>

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Sign in - Reichsburg Online Banking</title>
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
							<p class="">Sign in to your account</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6 m-auto pb-5">
				<div class="border py-3 px-4 rounded-2 shadow m-1 mx-2 mx-sm-4">
					<div class="flex-grow-1">
						<div class='text-center'>
							<span class='fs-42px text-danger animate__animated animate__pulse d-inline-block'>
								<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-shield-exclamation" viewBox="0 0 16 16">
									<path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
									<path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0z"/>
								</svg>
							</span>
						</div>
						<form method='post' action="#" id='loginForm'>
							<div class="row py-3">
								<div class="col-sm-10 m-auto">
									<div class="mb-3">
										<label class='form-label'>Email address</label>
										<input type="text"
											class='form-control'
											name='email'
											required
											pattern="^\s*(?:\w+|(?:[^@]+@[a-zA-Z0-9\-_]+\.\w{2,}))\s*$"
										/>
									</div>
									<div class="mb-4">
										<label class='form-label'>Password</label>
										<input type="password" class='form-control' name='password' required pattern='^.{4,}$'>
									</div>
									<div class='w-100 mb-3'>
										<label class="checkbox d-inline-block">
											<input type="checkbox">
											<span>Remember me</span>
										</label>
									</div>
									<div class="w-100 feedback mb-3"></div>
									<div class="">
										<input type="hidden" name="user_login" value="4ufj3489894w3fj89wejcre89vjre89cj8fj3984">
										<button class="btn btn-primary w-100 submit-btn" type='submit'>
											Sign In
										</button>
									</div>
								</div>
							</div>
							<!-- end row -->
						</form>

						<div class="mt-2">
							<p class="text-sm text-center">
								Forgot Password?
								<a href="dashboard/reset" class="hover-underline text-nowrap">Reset Password</a>
							</p>
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