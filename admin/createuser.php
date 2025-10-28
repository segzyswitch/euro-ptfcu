<?php require('config/session.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Create Profile - PartnersTrust FCU</title>
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
      <h1>Create New User</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">New User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <form id="registerForm" method="POST" enctype="multipart/form-data" action="">
        <div class="box box-default">
          <div class="box-header with-border">
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="text" name="firstname" class="form-control" placeholder="First Name" required />
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="text" name="lastname" class="form-control" placeholder="Last Name" required />
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Email or Username</label>
                  <input type="text" name="email" class="form-control" placeholder="Enter Email" required />
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone Number (optional)</label>
                  <input type="text"
                    name="phone" minlength="8"
                    autocomplete="off" placeholder="+1 213 218 5486"
                    class="form-control" 
                  />
                </div>
                <!-- <div class="form-group">
                  <label class="form-label">Gender</label>
                  <select name="gender" required class="form-control select2">
                    <option value="" selected>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                  </select>
                </div> -->
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <!-- <div class="form-group">
                  <label for="exampleInputEmail1">Date of Birth</label>
                  <input type="date" name="dob" class="form-control" placeholder="Date of birth" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Home Address</label>
                  <input name="str_address" type="text" class="form-control" placeholder="Address" required>
                </div> -->
                <!-- <div class="form-group">
                  <label>City</label>
                  <input type="text" name="city" class="form-control" placeholder="Enter City" required>
                </div>
                <div class="form-group">
                  <label>State</label>
                  <input type="text" name="state" class="form-control" placeholder="Enter State" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Zipcode</label>
                  <input type="text" name="zipcode" inputmode="numeric" pattern="[0-9]+" minlength="3" maxlength="5" autocomplete="off" class="form-control" placeholder="23456" required>
                </div> -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Current Balance</label>
                  <input type="number"
                    inputmode="numeric" pattern="[0-9]+"
                    maxlength="15" autocomplete="off"
                    name="current_balance"
                    class="form-control" required 
                    placeholder="0.00" min="0" 
                  />
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Savings Balance</label>
                  <input type="number"
                    inputmode="numeric" pattern="[0-9]+"
                    maxlength="15" autocomplete="off"
                    name="savings_balance" required 
                    class="form-control"
                    placeholder="0.00" min="0" 
                  />
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" required name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Confirm Password</label>
                  <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputEmail1">Loan Balance</label>
                  <input inputmode="numeric"
                    pattern="[0-9]+" maxlength="15"
                    autocomplete="off" type="number"
                    name="loan_balance"
                    class="form-control" min="0" 
                    placeholder="0.00" required 
                  />
                </div> -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-sm-6 feedback"></div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer mt-0">
            <input type="hidden" name="add_account" />
            <button type="submit" class="btn btn-primary submit-btn">Create New Profile</button>
          </div>
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
</body>
</html>