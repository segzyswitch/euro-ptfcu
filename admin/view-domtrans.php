<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Domestic Transactions - PartnersTrust FCU</title>
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

    <header class="main-header">
      <!-- Logo -->
      <a href="./dashboard.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Edit Domestic Transactions</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="https://demofederal.dirtyscripts.shop/assets/user/profile/user.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Ofofonobs Developer</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="https://demofederal.dirtyscripts.shop/assets/user/profile/user.png" class="img-circle" alt="User Image">

                  <p>
                    Ofofonobs Developer                    <small>(+234 8114313795)</small>
                  </p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="./edit-profile.php" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="./logout.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="https://demofederal.dirtyscripts.shop/assets/user/profile/user.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Ofofonobs Developer</p>
            <a href="https://ofofonobs.com/contact-us/" target="_blank"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li><a href="./dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
          <li class="header">FUNDING</li>
          <li><a href="./fundings.php"><i class="fa fa-paper-plane-o"></i> <span>Credit/Debit User</span></a></li>





         
          
          
          <li class="treeview">
            <a href="#">
              <i class="fa fa-list-alt"></i> <span>Create Transaction History</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="./create-wire-history.php"><i class="fa fa-circle-o"></i> Wire Transfer History</a></li>
              <li><a href="./create-dom-history.php"><i class="fa fa-circle-o"></i> Domestic Transfer History</a></li>
              <li><a href="./create-funding-history.php"><i class="fa fa-circle-o"></i> Credit/Debit History</a></li>
            </ul>
          </li>





          <li><a href="./cards.php"><i class="fa fa-credit-card"></i> <span>All Virtual Cards</span></a></li>
         
          <li class="treeview">
            <a href="#">
              <i class="fa fa-list-alt"></i> <span>Bank Transactions</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="./inter-trans.php"><i class="fa fa-circle-o"></i> Self Transactions</a></li>
              <li><a href="./wire-trans.php"><i class="fa fa-circle-o"></i> Wire Transfer Transactions</a></li>
              <li><a href="./domestic-trans.php"><i class="fa fa-circle-o"></i> Domestic Transactions</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-list-alt"></i> <span>Deposit Transactions</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="./deposit-trans.php"><i class="fa fa-circle-o"></i> Pending Deposit Transactions</a></li>
              <li><a href="./pending-deposit.php"><i class="fa fa-circle-o"></i> Pending Deposit Transactions</a></li>
            </ul>
          </li>
          
          <li><a href="./sendmessage.php"><i class="fa fa-credit-card"></i> <span>Send SMS Message</span></a></li>
          <li class="header">MANAGE USER</li>
          <li><a href="./users.php"><i class="fa fa-user"></i> <span>All Users</span></a></li>

          <li><a href="./createuser.php"><i class="fa fa-user"></i> <span>Create New Users</span></a></li>

          <li class="header">SETTINGS & PROFILE</li>
          <li><a href="./messages.php"><i class="fa fa-comments-o"></i> <span>Tickets</span></a></li>
          <li><a href="./edit-profile.php"><i class="fa fa-user-o"></i> <span>Edit Profile</span></a></li>
          <li><a href="./smtp_settings.php"><i class="fa fa-cog"></i> <span>SMTP Settings</span></a></li>
          <li><a href="./api_settings.php"><i class="fa fa-cog"></i> <span>SMS Api</span></a></li>
          <li><a href="./payment.php"><i class="fa fa-comments-o"></i> <span>Set Crypto Payments</span></a></li>
          <li><a href="./setting.php"><i class="fa fa-cog"></i> <span>System Settings</span></a></li>



          <li><a href="./logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Domestic Transactions
        </h1>
        <ol class="breadcrumb">
            <li><a href="./dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        </ol>
    </section>



    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <form method="POST">
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
                                <label>Amount</label>
                                <input type="number" class="form-control" name="amount" placeholder="500" value="500" required>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Bank Name</label>
                                <input type="text" class="form-control" name="bank_name" placeholder="Opay account" value="Opay account" required>
                            </div>
                            <div class="form-group">
                                <label>Account Number</label>
                                <input type="text" inputmode="numeric" required pattern="[0-9]+" maxlength="12" autocomplete="off" class="form-control" name="account_number" placeholder="9068049531" value="9068049531" required>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Account Name</label>
                                <input type="text" class="form-control" name="account_name" placeholder="Elijah" value="Elijah" required>
                            </div>

                           

                            <div class="form-group">
                                <label>Date</label>
                                <input type="text" class="form-control" name="created_at" placeholder="2024-06-27 22:39:49" value="2024-06-27 22:39:49" required>
                            </div>




                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" name="update_trans" class="btn btn-primary">Update</button>
                    <button type="submit" name="accept" class="btn btn-success">Accept</button>
                    <form method="POST">
                        <button type="submit" name="hold" class="btn btn-warning">Hold</button>
                    </form>
                    <button type="submit" name="decline" class="btn btn-danger">Decline</button>


                </div>
            </form>
        </div>
        <!-- /.box -->




    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



  

  
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
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
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>