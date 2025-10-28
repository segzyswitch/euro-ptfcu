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
	<title>History - PartnersTrust FCU</title>
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
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="../ui/plugins/table/datatable/datatables.css">
	<link rel="stylesheet" type="text/css" href="../ui/plugins/table/datatable/dt-global_style.css">
	<!-- END PAGE LEVEL STYLES -->
	<link href="../ui/assets/css/apps/invoice-list.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../ui/assets/css/elements/alert.css">
	<link href="../ui/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
	<link href="../ui/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../ui/assets/css/widgets/modules-widgets.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css" integrity="sha512-H/zVLBHVS8ZRNSR8wrNZrGFpuHDyN6+p6uaADRefLS4yZYRxfF4049g1GhT+gDExFRB5Kf9jeGr8vueDsyBhhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
							<li class="breadcrumb-item active" aria-current="page"><span>History</span></li>
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
			<div class="row layout-top-spacing">
				<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
					<div class="widget-content widget-content-area br-6">
						<table id="zero-config" class="table dt-table-hover" style="width:100%">
							<thead>
								<tr>
									<th>S/N</th>
									<th>Refrence ID</th>
									<th>Amount</th>
									<th>Type</th>
									<th>Payment Account</th>
									<th>Status</th>
									<th class="d-flex">
										<svg xmlns="http://www.w3.org/2000/svg"
											width="24" height="24"
											viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
											<line x1="16" y1="2" x2="16" y2="6"></line>
											<line x1="8" y1="2" x2="8" y2="6"></line>
											<line x1="3" y1="10" x2="21" y2="10"></line>
										</svg>
										<span class="d-inline-block my-auto pl-2">Date</span>
									</th>
									<th class="no-content">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$count = 1;
								foreach ($Controller->Transactions() as $key => $value) {
									?>
								<tr>
									<td><?php echo $count; ?></td>
									<td><?php echo $value['invoice']; ?></td>
									<td>
										<?php
										if (
										 in_array($value['type'], array('self', 'crypto_deposit', 'check_deposit', 'credit'))
										){
											?><span class="text-success">+€<?php echo number_format($value['amount']); ?></span><?php
										}else {
											?><span class="text-danger">-€<?php echo number_format($value['amount']); ?></span><?php
										}
										?>
									</td>
									<td class="text-capitalize"><?php echo str_replace('_', ' ', $value['type']); ?></td>
									<td>
										<?php
										if ( $value['send_from'] == 'current' ) {
											?><span class="badge badge-secondary inv-status">Current Account (<?php echo $user_info['current_account']; ?>)</span><?php
										}elseif ( $value['send_from'] == 'savings' ) {
											?><span class="badge badge-secondary inv-status">Savings Account (<?php echo $user_info['savings_account']; ?>)</span><?php
										}else {
											?><span class="badge badge-dark inv-status"><i class="fa fa-file-text"></i> <?php echo $value['send_from']; ?></span><?php
										}
										?>
									</td>
									<td>
										<?php
										if ( $value['status'] == 'completed' ) {
											?><span class="badge badge-primary inv-status">Completed</span><?php
										}else if ( $value['status'] == 'failed' ) {
											?><span class="badge badge-danger inv-status">Failed</span><?php
										}else if ( $value['status'] == 'hold' ) {
											?><span class="badge badge-danger inv-status">Held</span><?php
										}else {
											?><span class="badge badge-warning inv-status">Pending</span><?php
										}
										?>
									</td>
									<td>
										<span class="inv-date"><?php echo date('h:i:s d/m/Y', strtotime($value['send_date'])); ?></span>
									</td>
									<td>
										<a class="badge badge-info inv-status" href="./receipt?id=<?php echo $value['id']; ?>" aria-haspopup="true" aria-expanded="true">
											View Receipt </a>
									</td>
								</tr>
									<?php
									$count++;
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>


		<script src="../ui/plugins/table/datatable/datatables.js"></script>
		<script>
			$('#zero-config').DataTable({
				"dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
					"<'table-responsive'tr>" +
					"<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
				"oLanguage": {
					"oPaginate": {
						"sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
						"sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
					},
					"sInfo": "Showing page _PAGE_ of _PAGES_",
					"sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
					"sSearchPlaceholder": "Search...",
					"sLengthMenu": "Results :  _MENU_",
				},
				"stripeClasses": [],
				"lengthMenu": [7, 10, 20, 50],
				"pageLength": 7
			});
		</script>
	</div>
	<!--  END CONTENT PART  -->
</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
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