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
	<title>Dashboard - PartnersTrust FCU</title>
	<link rel="icon" type="image/x-icon" href="../ui/assets/img/favicon.ico" />
	<link href="../ui/assets/css/loader.css" rel="stylesheet" type="text/css" />
	<script src="../ui/assets/js/loader.js"></script>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
	<link href="../ui/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../ui/assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
	<link href="../ui/plugins/apex/apexcharts.css" rel="stylesheet" />
	<link href="../ui/assets/css/dashboard/dash_1.css" rel="stylesheet" />
	<link rel="stylesheet" href="../ui/plugins/table/datatable/datatables.css" />
	<link rel="stylesheet" href="../ui/plugins/table/datatable/dt-global_style.css" />
	<link rel="stylesheet" href="../ui/assets/css/forms/theme-checkbox-radio.css" />
	<link href="../ui/assets/css/apps/invoice-list.css" rel="stylesheet" />
	<link rel="stylesheet" href="../ui/assets/css/elements/alert.css">
	<link href="../ui/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
	<link href="../ui/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../ui/assets/css/widgets/modules-widgets.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css" integrity="sha512-H/zVLBHVS8ZRNSR8wrNZrGFpuHDyN6+p6uaADRefLS4yZYRxfF4049g1GhT+gDExFRB5Kf9jeGr8vueDsyBhhA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- not confirmed -->
	<!-- href="https://demofederal.dirtyscripts.shop/ui/ -->
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
	<!--  END CUSTOM STYLE FILE  -->

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

<div class="sub-header-container">
	<header class="header navbar navbar-expand-sm">
		<a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
		<ul class="navbar-nav flex-row">
			<li>
				<div class="page-header">
					<nav class="breadcrumb-one" aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
						</ol>
					</nav>
				</div>
			</li>
		</ul>
	</header>
</div>

 <!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">
 	<!-- SIDEBAR -->
 	<?php include 'inc/sidebar.php'; ?>

	<!--  BEGIN CONTENT PART  -->
	<div id="content" class="main-content pt-2">
		<div class="layout-px-spacing mb-5">
			<!-- Alert example -->
			<?php
			if ( $user_info['status'] == "disabled" ) {
				?>
				<div class="alert bg-danger rounded mb-3 d-flex p-0" style="color:#f8d7da;">
					<i class="fa fa-exclamation-triangle my-auto px-2 h4"></i>
					<div class="w-100 border border-danger rounded text-danger" style="background-color:#f8d7da;padding:14px;">
						<button class="close text-danger" type="button" data-dismiss="alert">&times;</button>
						<span>Account not activated, contact support to activate your account!</span>
					</div>
				</div>
				<?php
			}
			?>

			<div class="row layout-top-spacing">
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
					<div class="widget widget-account-invoice-three">
						<div class="widget-heading" style="min-height:auto;height:auto;padding:20px;">
							<div class="wallet-usr-info">
								<h5><b>Welcome, <?php echo $Controller->fullName(); ?></b></h5>
							</div>
							<div class="wallet-balance">
							</div>
						</div>

						<div class="widget-amount">
							<div class="w-a-info w-75">
								<span class="d-block mb-1">Total balance</span>
								<h4 class="text-success"><?php echo $Controller->totalBalance(); ?></h4>
							</div>
							<!-- <div class="w-a-info funds-spent">
								<span>Outflow <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up">
										<polyline points="18 15 12 9 6 15"></polyline>
									</svg></span><br><span class="text-danger">Get loan</span>
							</div> -->
						</div>

						<div class="widget-content">
							<div class="invoice-list">
								<div class="inv-detail">
									<div class="info-detail-2">
										<p class="mb-3">
											Current Account <br />
											<small><?php echo $user_info['current_account']; ?></small>
										</p>
										<p class="bill-amount text-info">
											<b>€<?php echo number_format($user_info['current_bal'], 2); ?></b>
										</p>
									</div>
									<div class="info-detail-2">
										<p>
											Savings Account <br />
											<small><?php echo $user_info['savings_account']; ?></small>
										</p>
										<p class="bill-amount text-info">
											<b>€<?php echo number_format($user_info['savings_bal'], 2); ?></b>
										</p>
									</div>
									<!-- <div class="info-detail-2">
										<p>Loan Balance: </p>
										<p class="bill-amount text-secondary">
											<b>$<?php // echo number_format($user_info['loan_bal']).'.00'; ?></b>
										</p>
									</div> --><br>
									<!-- <div class="info-detail-2 d-none">
										<p>Last Login IP:</p>
										<p class="bill-amount text-danger">
											<b><?php // echo $Controller->lastSession()['user_ip'] ?></b>
										</p>
									</div> -->
									<!-- <div class="info-detail-2">
										<p>Last Login Date:</p>
										<p class="bill-amount text-danger">
											<b><?php // echo date('M d, Y', strtotime($Controller->lastSession()['createdat'])); ?></b>
										</p>
									</div> -->
								</div>
								<div class="inv-action">
									<a href="./history" class="btn btn-outline-primary view-details">View Details</a>
									<a href="./my-account" class="btn btn-outline-primary pay-now">Account Details</a>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
					<?php
						if($user_info['transactions'] == 'true') {
						?>
					<div class="widget widget-table-one">
						<div class="widget-heading">
							<h5 class="">Transactions</h5>
							<div class="task-action">
								<div class="dropdown">
									<a class="dropdown-toggle" href="#" role="button"
										id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
											<circle cx="12" cy="12" r="1"></circle>
											<circle cx="19" cy="12" r="1"></circle>
											<circle cx="5" cy="12" r="1"></circle>
										</svg>
									</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change:transform;">
										<a class="dropdown-item" href="./history">View All</a>
									</div>
								</div>
							</div>
						</div>
						<div class="widget-content">
							<?php
							if ( count($Controller->Transactions()) < 1 ) {
								?><h6 class="text-center py-4">No transactions yet</h6><?php
							}
							$count = 1;
							foreach ($Controller->Transactions() as $key => $value) {
								?>
							<div class="transactions-list t-info">
								<div class="t-item">
									<div class="t-company-name">
										<div class="t-icon">
											<div class="avatar avatar-xl">
												<span class="avatar-title bg-light">+</span>
											</div>
										</div>
										<div class="t-name">
											<h4 class="text-capitalize">
												<?php
												if ( $value['type'] == 'local' ) {
													echo "Debit";
												}else if ( $value['type'] == 'self' ) {
													echo "Transfer";
												}else {
													echo str_replace('_', ' ', $value['type']);
												}
												?>
											</h4>
											<p class="meta-date"><?php echo date('M d, Y', strtotime($value['send_date'])); ?></p>
										</div>
									</div>
									<div class="t-rate rate-inc">
										<p>
											<?php
											if (
											 in_array($value['type'], array('self', 'crypto_deposit', 'check_deposit', 'credit'))
											){
												?><span class="text-success">+€<?php echo number_format($value['amount']); ?></span><?php
											}else {
												?><span class="text-danger">-€<?php echo number_format($value['amount']); ?></span><?php
											}
											?>
										</p>
									</div>
								</div>
							</div>
								<?php
							}
							?>
						</div>
					</div>
						<?php
						}else {
						?>
					<div class="widget widget-table-one">
						<div class="widget-heading">
							<h5 class="">Live rates</h5>
							<!-- <div class="task-action">
								<div class="dropdown">
									<a class="dropdown-toggle" href="#" role="button"
										id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
											<circle cx="12" cy="12" r="1"></circle>
											<circle cx="19" cy="12" r="1"></circle>
											<circle cx="5" cy="12" r="1"></circle>
										</svg>
									</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change:transform;">
										<a class="dropdown-item" href="./history">View All</a>
									</div>
								</div>
							</div> -->
						</div>
						<div class="widget-content">
							<gecko-coin-price-chart-widget locale="en" outlined="true" initial-currency="usd"></gecko-coin-price-chart-widget>
						</div>
					</div>
						<?php
						}
					?>
				</div>

				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
					<div class="widget widget-activity-four">
						<div class="widget-heading">
							<h5 class="">Recent Activities</h5>
						</div>
						<div class="widget-content">
							<div class="w-100 mx-auto">
								<div class="timeline-line mb-4">
									<!-- activity item -->
									<?php
									foreach ($Controller->userActivity() as $key => $value) {
										?>
									<div class="item-timeline timeline-primary">
										<div class="t-dot" data-original-title="" title="">
										</div>
										<div class="t-text">
											<p><?php echo $value['feed']; ?></p>
											<span class="text-danger"><?php echo date('M d, Y', strtotime($value['createdat'])); ?></span>
										</div>
									</div>
										<?php
									}
									?>
								</div>
							</div>
							<div class="tm-action-btn">
								 <a href="./activities"> <button class="btn"><span></span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
										<line x1="5" y1="12" x2="19" y2="12"></line>
										<polyline points="12 5 19 12 12 19"></polyline>
									</svg> View All</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--  END CONTENT PART  -->

</div>
<!-- END MAIN CONTAINER -->
<script src="https://widgets.coingecko.com/gecko-coin-price-chart-widget.js"></script>
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