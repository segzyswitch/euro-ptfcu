<?php
require_once '../config/session.php';
$user_info = $Controller->User();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	<title>KYC Verification - PartnersTrust FCU </title>
	<link rel="icon" type="image/x-icon" href="../ui/assets/img/favicon.ico" />
	<link href="../ui/assets/css/loader.css" rel="stylesheet" type="text/css" />
	<script src="../ui/assets/js/loader.js"></script>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
	<link href="../ui/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../ui/assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
	<link href="../ui/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
	<link href="../ui/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
	<link rel="stylesheet" type="text/css" href="../ui/plugins/table/datatable/datatables.css">
	<link rel="stylesheet" type="text/css" href="../ui/plugins/table/datatable/dt-global_style.css">
	<link rel="stylesheet" type="text/css" href="../ui/assets/css/forms/theme-checkbox-radio.css">
	<link href="../ui/assets/css/apps/invoice-list.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../ui/assets/css/elements/alert.css">
	<link href="../ui/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
	<link href="../ui/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
	<!--  -->
	<link rel="stylesheet" type="text/css" href="../ui/plugins/dropify/dropify.min.css">
	<link href="../ui/assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../ui/assets/css/widgets/modules-widgets.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css" integrity="sha512-H/zVLBHVS8ZRNSR8wrNZrGFpuHDyN6+p6uaADRefLS4yZYRxfF4049g1GhT+gDExFRB5Kf9jeGr8vueDsyBhhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<style>
		.layout-px-spacing {
			min-height: calc(100vh - 166px) !important;
		}
	</style>
	<!-- Code provided by Google -->
	<div id="google_translate_element"></div>
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
				pageLanguage: 'en',
				layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
				autoDisplay: false
			}, 'google_translate_element');
		}
	</script>
	<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
	<style>
		.btn-light {
			border-color: transparent;
		}
	</style>
	<!--  BEGIN CUSTOM STYLE FILE  -->
	<style>
		h4.modal-title {
			color: #000;
		}

		.modal-content {
			border: none;
		}

		.modal-body {
			text-align: center;
		}
		p span.countdown-holder {
			color: #e7515a;
			font-size: 18px;
		}
		.modal-footer {
			border: none;
		}
		.progress {
			width: 50%;
			margin: 0 auto;
			border-radius: 30px;
			height: 10px;
		}
		.modal-backdrop {
			background-color: #060818;
		}
		.layout-px-spacing {
			min-height: calc(100vh - 149px) !important;
		}
		@media (min-width: 576px) {
			.modal-dialog {
				max-width: 350px;
			}
		}
	</style>
	<!--  DROPIFY  -->
	<style>
		.dropify-wrapper .dropify-message p {
	    font-size: .5em; /* Adjust this value as needed */
	    color: #aaa; /* You can also change the color if needed */
		}
		/*.dropify-wrapper {
			background-image: url('../assets/images/drop-box.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
	  }*/
	</style>
	<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
</head>
<body>

<!-- BEGIN LOADER -->
<div id="load_screen">
	<div class="loader">
		<div class="loader-content">
			<div class="spinner-grow align-self-center"></div>
		</div>
	</div>
</div>
<!--  END LOADER -->

	 
<!--  BEGIN NAVBAR  -->
<?php include('inc/header.php'); ?>
<!--  END NAVBAR  -->

<!--  BEGIN NAVBAR  -->
<div class="sub-header-container">
	<header class="header navbar navbar-expand-sm">
		<a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

		<ul class="navbar-nav flex-row">
			<li>
				<div class="page-header">

					<nav class="breadcrumb-one" aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="./dashboard">Dashboard</a></li>
							<li class="breadcrumb-item active" aria-current="page"><span>KYC Verification</span></li>
						</ol>
					</nav>

				</div>
			</li>
		</ul>
	</header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">
 	<!-- SIDEBAR -->
 	<?php include('inc/sidebar.php'); ?>
	 <!--  END SIDEBAR  -->

	<!--  BEGIN CONTENT PART  -->
	<div id="content" class="main-content">
		<div class="layout-px-spacing">
			<div class="account-settings-container layout-top-spacing">
				<div class="account-content">
					<div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
								<form id="verifyKYCForm" class="section contact" method="POST" enctype="multipart/form-data">
									<div class="info">
										<h5 class="">More Informations Needed</h5>
										<div class="row">
											<div class="col-md-11 mx-auto">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="country">Photo of ID (front)</label>
															<input type="file"
																name="id_front" class="dropify"
																accept="image/*"
																id="input-file-max-fs"
																data-default-file="../assets/images/drop-box.jpg"
																data-max-file-size="5M" required
															/>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="address">Photo of ID (back)</label>
															<input type="file"
																name="id_back" class="dropify"
																accept="image/*" 
																id="input-file-max-fs"
																data-default-file="../assets/images/drop-box.jpg"
																data-max-file-size="5M" required
															/>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="location">ID Number</label>
															<input type="text" class="form-control mb-4" placeholder="ID Number" name="id_no">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="phone">Proof of Address</label>
															<input type="file" class="form-control mb-4" name="proofaddress">
														</div>
													</div>
													<div class="col-md-6">
														<div class="w-100 feedback"></div>
														<div class="input-group">
															<input type="hidden" name="verify_kyc">
															<button class="btn btn-primary mb-2 submit-btn">Submit Verification</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT PART -->
</div>
<!-- END MAIN CONTAINER -->

<script src="../ui/assets/js/users/account-settings.js"></script>
<script src="../ui/plugins/dropify/dropify.min.js"></script>
<script src="../ui/plugins/blockui/jquery.blockUI.min.js"></script>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="../assets/js/forms.js"></script>
<script src="../ui/bootstrap/js/popper.min.js"></script>
<script src="../ui/bootstrap/js/bootstrap.min.js"></script>
<script src="../ui/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../ui/assets/js/app.js"></script>
<script>
	$(document).ready(function() {
		App.init();
	});
</script>
<!-- Flag click handler -->
<script type="text/javascript">
	$('.translation-links a').click(function() {
		var lang = $(this).data('lang');
		var $frame = $('.goog-te-menu-frame:first');
		if (!$frame.size()) {
			alert("Error: Could not find Google translate frame.");
			return false;
		}
		$frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
		return false;
	});
</script>
<script src="../ui/assets/js/custom.js"></script>
<script src="../ui/plugins/table/datatable/datatables.js"></script>
<script src="../ui/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
<script src="../ui/assets/js/apps/invoice-list.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="../ui/plugins/apex/apexcharts.min.js"></script>
<script src="../ui/assets/js/dashboard/dash_1.js"></script>
<script src="../ui/plugins/highlight/highlight.pack.js"></script>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../ui/assets/js/scrollspyNav.js"></script>
<script src="../ui/assets/js/widgets/modules-widgets.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>
</html>