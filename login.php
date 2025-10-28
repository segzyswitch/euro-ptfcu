<!doctype html>
<html>

<head>

	<script>const Uss = JSON.parse(atob('eyJAUkUtUE9TVCI6ZmFsc2UsIlBsYXRmb3JtIjoiQWxwaGEgQmFuayJ9'));</script>

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Sign in - Partners Trust FCU</title>
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

	<link rel="shortcut icon" type="image/x-icon" href="uss-modules/uss-dashboard-main/ud-assets/images/general/7d4b83c9fc2bc05690ebc9008015b096c10dd5c1.png">

	<style>
		.preloader {
			background-position: center;
			background-repeat: no-repeat;
			background-image: url(uss-modules/uss-dashboard-main/ud-assets/images/general/7d4b83c9fc2bc05690ebc9008015b096c10dd5c1.png);
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
							<div class='mb-2'>
								<img alt=""
									src='logo.png'
									height="60"
								/>
							</div>
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
								<i class='bi bi-shield-lock'></i>
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
								<a href="dashboard/signup" class='text-nowrap'>Create an account</a>
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
	<script src='assets/js/forms.js' data-rc='jquery'></script>
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