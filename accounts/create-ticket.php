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
	<title>New Ticket - PartnersTrust FCU </title>
	<link rel="icon" type="image/x-icon" href="../ui/assets/img/favicon.ico" />
	<link href="../ui/assets/css/loader.css" rel="stylesheet" type="text/css" />
	<script src="../ui/assets/js/loader.js"></script>

	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
	<link href="../ui/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../ui/assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="../ui/assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->

	<link href="../ui/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../ui/assets/css/forms/theme-checkbox-radio.css">
	<link rel="stylesheet" type="text/css" href="../ui/assets/css/forms/switches.css">


	<link href="../ui/assets/css/apps/scrumboard.css" rel="stylesheet" type="text/css" />
	<link href="../ui/assets/css/components/tabs-accordian/custom-tabs.css" rel="stylesheet" type="text/css" />

	<link href="../ui/assets/css/apps/invoice-preview.css" rel="stylesheet" type="text/css" />


	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
		integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

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
			<a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
					xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
					stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
					class="feather feather-menu">
					<line x1="3" y1="12" x2="21" y2="12"></line>
					<line x1="3" y1="6" x2="21" y2="6"></line>
					<line x1="3" y1="18" x2="21" y2="18"></line>
				</svg></a>

			<ul class="navbar-nav flex-row">
				<li>
					<div class="page-header">

						<nav class="breadcrumb-one" aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="./dashboard">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page"><span>New Ticket</span></li>
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
		<?php include 'inc/sidebar.php'; ?>


		<!--  BEGIN CONTENT PART  -->
		<div id="content" class="main-content">
			<div class="content">

				<div class="container-fluid">

					<div class="row layout-top-spacing">



						<div id="basic" class="col-lg-6 mx-auto">
							<div class="statbox widget box box-shadow">
								<div class="widget-header">
									<div class="row">
										<div class="col-xl-12 col-md-12 col-sm-12 col-12">
											<h4>New Ticket</h4>
										</div>
									</div>
								</div>

								<div class="widget-content widget-content-area">
									<form method="POST" enctype="multipart/form-data">


										<label for="basic-url">Ticket Type</label>
										<div class="input-group mb-4">
											<select class="form-control  basic" required name="ticket_type">
												<option>Select Loan Type</option>
												<option value="My Account">My Account</option>
												<option value="Transfer">Transfer</option>
												<option value="Security">Security</option>
											</select>
										</div>










										<label for="basic-url">More Information</label>
										<div class="input-group mb-4">
											<textarea class="form-control" aria-label="With textarea" rows="6" required name="description"
												placeholder="Well detailed"></textarea>
										</div>


										<label for="basic-url">Account Pincode</label>
										<div class="input-group mb-4">
											<input type="text" class="form-control" placeholder="******" name="pin">
										</div>



										<div class="input-group">
											<button class="btn btn-primary mb-2" name="ticket_submit">Create New Ticket</button>
										</div>

									</form>

								</div>
							</div>

							<br><br><br>
						</div>

					</div>

				</div>



			</div>
			<!--  END CONTENT PART  -->

		</div>
		<!-- END MAIN CONTAINER -->

		<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
		<script src="https://demofederal.dirtyscripts.shop/ui/assets/js/libs/jquery-3.1.1.min.js"></script>
		<script src="../ui/bootstrap/js/popper.min.js"></script>
		<script src="../ui/bootstrap/js/bootstrap.min.js"></script>
		<script src="../ui/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../ui/assets/js/app.js"></script>
		<script>
			$(document).ready(function () {
				App.init();
			});
		</script>

		<!-- Flag click handler -->
		<script type="text/javascript">
			$('.translation-links a').click(function () {
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