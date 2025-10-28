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
	<title>Self Transfer - PartnersTrust FCU</title>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css" integrity="sha512-H/zVLBHVS8ZRNSR8wrNZrGFpuHDyN6+p6uaADRefLS4yZYRxfF4049g1GhT+gDExFRB5Kf9jeGr8vueDsyBhhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
		<a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
		<ul class="navbar-nav flex-row">
			<li>
				<div class="page-header">
					<nav class="breadcrumb-one" aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="./dashboard">Dashboard</a></li>
							<li class="breadcrumb-item active" aria-current="page"><span>Self Transfer</span></li>
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
		<div class="content">
			<div class="container-fluid">
				<div class="row layout-top-spacing">
					<div id="basic" class="col-lg-6 mx-auto">
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
						<div class="statbox widget box box-shadow">
							<div class="widget-header">
								<div class="row">
									<div class="col-xl-12 col-md-12 col-sm-12 col-12">
										<h4>Self Transfer</h4>
									</div>
								</div>
							</div>
							<div class="widget-content widget-content-area">
								<form id="selfTransferForm" method="POST" enctype="multipart/form-data">
									<label for="basic-url">Amount</label>
									<div class="input-group mb-4">
										<div class="input-group-prepend">
											<span class="input-group-text">€</span>
										</div>
										<input type="text" name="amount" class="form-control" required placeholder="Amount (to the nearest dollar)">
									</div>
									<label for="basic-url">From Account</label>
									<div class="input-group mb-4">
										<select name="payment_account" class="form-control basic" required>
											<option value="">Select Payment Account</option>
											<option value="savings">
												(<?php echo $user_info['savings_account'] ?>) Savings: €<?php echo number_format($user_info['savings_bal']); ?>.00
											</option>
											<option value="current">
												(<?php echo $user_info['current_account'] ?>) Current: €<?php echo number_format($user_info['current_bal']); ?>.00
											</option>
										</select>
									</div>
									<label for="basic-url">To Account</label>
									<div class="input-group mb-4">
										<select name="recieving_account" class="form-control basic" required>
											<option value="">Select Recieving Account</option>
											<option value="savings">
												Savings Account (<?php echo $user_info['savings_account'] ?>)
											</option>
											<option value="current">
												Current Account (<?php echo $user_info['current_account'] ?>)
											</option>
										</select>
									</div>
									<label for="basic-url">Details</label>
									<div class="input-group mb-4">
										<textarea class="form-control" name="description" rows="2" placeholder="Reason for transfer"></textarea>
									</div>
									<div class="w-100 feedback"></div>
									<div class="input-group">
										<input type="hidden" name="self_transfer" value="send">
										<button class="btn btn-primary mb-2 submit-btn"
											type="submit"
											<?php if($user_info['status']=="disabled") echo 'disabled'; ?>>
											<soan>Make Transfer</soan>
										</button>
									</div>
								</form>
							</div>
						</div>
						<br><br><br>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--  END CONTENT PART  -->
</div>
<!-- END MAIN CONTAINER -->

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