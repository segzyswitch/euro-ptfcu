<?php require('config/session.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Credit/Debit Users - PartnersTrust FCU</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Favicon icon -->
	<link rel="shortcut icon" href="../ui/assets/img/favicon.ico" type="image/x-icon" />
	<!-- DataTables -->
	<link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
		 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
		 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="assets/bower_components/morris.js/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://demofederal.dirtyscripts.shop/assets/user/js/vendor/jquery/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<!-- HEADER -->
	<?php include('inc/header.php'); ?>
	<!-- Left side column. contains the logo and sidebar -->
	<?php include('inc/sidebar.php'); ?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		<h1>
			Credit/Debit User
		</h1>
		<ol class="breadcrumb">
			<li><a href="./dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<!-- SELECT2 EXAMPLE -->
			<form id="fundUserForm" class="box box-default">
				<!-- /.box-header -->
				<div class="box-body">
					<div class="w-100">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Select user</label>
									<select name="user_id" class="form-control select2 w-100" required>
										<option value="">Select User</option>
										<?php
										foreach ($Authroller->Users() as $key => $value) {
											?>
											<option value="<?php echo $value['id'] ?>"><?php echo $value['firstname'].' '.$value['lastname']; ?></option>
											<?php
										}
										?>
									</select>
								</div>
								<!-- /.form-group -->
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Amount</label>
									<input type="number" name="amount" min="0" class="form-control" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Funding Account</label>
									<select name="payment_account" class="form-control select2" required>
										<option value="">Select Payment Account</option>
										<option value="savings">Savings Balance</option>
										<option value="current">Current Balance</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Description</label>
									<input type="text" name="description" class="form-control" placeholder="" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Transaction type</label>
									<select name="payment_type" class="form-control select2" required>
										<option value="credit">Credit</option>
										<option value="debit">Debit</option>
										<option value="local">Local transfer</option>
										<option value="international">Wire transfer</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Date</label>
									<input type="date" class="form-control" name="created_at" placeholder="00:00:00" required>
								</div>
							</div>
							<div class="col-md-6 feedback"></div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<input type="hidden" name="make_payment">
					<button type="submit" name="credit" class="btn btn-primary submit-btn">Make Payment</button>
				</div>
			</form>
			<!-- /.box -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- CUSTOM FORM JS -->
<script src="assets/forms/script.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Query 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- DataTables -->
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="assets/bower_components/raphael/raphael.min.js"></script>
<script src="assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/bower_components/moment/min/moment.min.js"></script>
<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>

<script>

$("#send-to").change(function () {
	if ($(this).val() == '2'){
		$(".user-recipient").removeClass('hide');
		return;
	}
	$(".user-recipient").addClass('hide');
});

	$(function () {
	$('.select2').select2();
	$('#example1').DataTable()
	$('#example2').DataTable({
		'paging'    : true,
		'lengthChange': false,
		'searching'   : false,
		'ordering'  : true,
		'info'    : true,
		'autoWidth'   : false
	})
	})
</script>
</body>
</html>