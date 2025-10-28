<?php require('config/session.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Users - PartnersTrust FCU</title>
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
  <style>
    .my-switch input {display: none;}
    .my-switch label {
      display: inline-block;
      width: 40px;
      height: 18px;
      border-radius: 15px;
      background-color: #ccc;
      transition: all .4s;
      position: relative;
    }
    .my-switch label:after {
      content: "";
      position: absolute;
      top: 0;
      aspect-ratio: 1;
      height: 18px;
      background-color: #888;
      z-index: 1;
      border-radius: 50%;
      left: 0;
      transition: all .4s;
      box-shadow: 0 0 5px #333;
    }
    .my-switch input:checked + label:after {
      content: "";
      position: absolute;
      top: 0;
      left: calc(100% - 18px);
      aspect-ratio: 1;
      height: 18px;
      background-color: blue;
      z-index: 1;
      border-radius: 50%;
    }
  </style>
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
      <h1>All Users</h1>
      <ol class="breadcrumb">
        <li><a href="./dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">All Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Account No</th>
                      <th>Name</th>
                      <th>Email/Username</th>
                      <th>Balance</th>
                      <th>Transaction</th>
                      <th>Status</th>
                      <th>Created</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php
                  	$count = 1;
                  	foreach ($Authroller->Users() as $key => $value) {
                  		?>
                    <tr id="userRow<?php echo $value['id']; ?>">
                      <td><?php echo $count; ?></td>
                      <td>
                      	<span><?php echo $value['current_account']; ?></span>
                      </td>
                      <td><?php echo $value['firstname'].' '.$value['lastname']; ?></td>
                      <td><?php echo $value['email']; ?></td>
                      <td>€<?php echo number_format($value['savings_bal']+$value['current_bal']); ?></td>
                      <td>
                        <div class="my-switch">
                          <input type="checkbox"
                            id="switch<?php echo $value['id']; ?>"
                            class="transact-switch"
                            <?= $value['transactions']=='true' ? 'checked' : '' ?>
                            onclick="updateStatus(<?php echo $value['id']; ?>, <?php echo $value['transactions']; ?>)"
                          />
                          <label for="switch<?php echo $value['id']; ?>"></label>
                        </div>
                      </td>
                      <td class="text-uppercase"><?php echo $value['status']; ?></td>
                      <td><?php echo date("d M, Y", strtotime($value['createdat'])); ?></td>
                      <td style="padding:5px;">
                        <a href="./view_users.php?id=<?php echo $value['id']; ?>" class="btn p-0 text-primary w-100">View</a>
                        <?php
                        if ( $value['status'] == 'pending' ) {
                          ?><a id="statusBtn<?php echo $value['id']; ?>" onclick="changeStatus(<?php echo $value['id']; ?>, 'active')" class="btn p-0 text-success w-100">Activate</a><?php
                        }elseif ( $value['status'] == 'disabled' ) {
                          ?><a id="statusBtn<?php echo $value['id']; ?>" onclick="changeStatus(<?php echo $value['id']; ?>, 'active')" class="btn p-0 text-success w-100">Activate</a><?php
                        }else {?><a id="statusBtn<?php echo $value['id']; ?>" onclick="changeStatus(<?php echo $value['id']; ?>, 'disabled')" class="btn p-0 text-warning w-100">Suspend</a><?php
                        }
                        ?>
                        <a id="deleteBtn<?php echo $value['id']; ?>" onclick="deleteUser(<?php echo $value['id']; ?>)" class="btn p-0 text-white bg-red btn-sm w-100">Del</a>
                      </td>
                    </tr>
                  		<?php
                  		$count++;
                  	}
                  	?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <br>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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