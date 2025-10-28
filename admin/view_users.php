<?php
require('config/session.php');
if ( isset($_GET['id']) ) {
  $user_id = $_GET['id'];
  $user_info = $Authroller->singleUser($user_id);
}else {
  header("Location: ./dashboard");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit User - PartnersTrust FCU</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Favicon icon -->
  <link rel="shortcut icon" href="../ui/assets/img/favicon.ico" type="image/x-icon" />
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
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
      <div>
        <h1 class="mb-2">Edit User Profile</h1>
        <a href="./users">Back to users</a>
      </div>
      <ol class="breadcrumb">
        <li><a href="./dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Edit User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <form id="userUpdateForm" method="POST" enctype="multipart/form-data" action="">
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
                  <input type="text" name="firstname"
                    class="form-control"
                    value="<?php echo $user_info['firstname']; ?>"
                    placeholder="<?php echo $user_info['firstname']; ?>"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="text" name="lastname"
                    class="form-control"
                    value="<?php echo $user_info['lastname']; ?>"
                    placeholder="<?php echo $user_info['lastname']; ?>"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="text" name="email"
                    class="form-control"
                    value="<?php echo $user_info['email']; ?>"
                    placeholder="<?php echo $user_info['email']; ?>"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone number (optional)</label>
                  <input type="tel" name="phone"
                    class="form-control"
                    value="<?php echo $user_info['phone']; ?>"
                    placeholder="<?php echo $user_info['phone']; ?>"
                    required
                  />
                </div>
                <div class="form-group">
                  <label class="form-label">Gender</label>
                  <select class="form-control select2" name="acct_gender" required>
                    <option value="<?php echo $user_info['gender']; ?>"><?php echo $user_info['gender']; ?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Date of Birth</label>
                  <input type="date" name="dob"
                    class="form-control"
                    value="<?php echo $user_info['dob']; ?>"
                    placeholder="<?php echo $user_info['dob']; ?>"
                  />
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Street Address</label>
                  <input type="text" name="str_address"
                    value="<?php echo $user_info['street_address']; ?>"
                    placeholder="<?php echo $user_info['street_address']; ?>"
                    class="form-control"
                    required
                  />
                </div>
                <div class="form-group">
                  <label>City</label>
                  <input type="text"
                    name="city" required
                    value="<?php echo $user_info['city']; ?>"
                    placeholder="<?php echo $user_info['city']; ?>"
                    class="form-control"
                  />
                </div>
                <div class="form-group">
                  <label>State</label>
                  <input type="text"
                    value="<?php echo $user_info['state']; ?>"
                    placeholder="<?php echo $user_info['state']; ?>"
                    class="form-control"
                    name="state" required
                  />
                </div>
                <div class="form-group">
                  <label>Zip code</label>
                  <input type="tel"
                    name="zipcode" value="<?php echo $user_info['zipcode']; ?>"
                    placeholder="<?php echo $user_info['zipcode']; ?>"
                    class="form-control" maxlength="6"
                  />
                </div>
                <div class="form-group">
                  <label>Savings Balance</label>
                  <input type="number" name="savings_bal"
                    class="form-control" min="0"
                    value="<?php echo $user_info['savings_bal']; ?>"
                    placeholder="<?php echo $user_info['savings_bal']; ?>"
                    required
                  />
                </div>
                <div class="form-group">
                  <label>Current Balance</label>
                  <input type="number"
                    name="current_bal" class="form-control" min="0"
                    value="<?php echo $user_info['current_bal']; ?>"
                    placeholder="<?php echo $user_info['current_bal']; ?>"
                    required
                  />
                </div>
                <!-- <table class="table table-bordered mb-4">
                  <tbody>
                    <tr>
                      <th>Profile Picture</th>
                      <th><a href="../ui/assets/img/user.png" target="_blank"><img src="https://demofederal.dirtyscripts.shop/ui/assets/img/user.png" width="20%" alt=""></a></th>
                    </tr>
                    <tr>
                      <th>Address Proof</th>
                      <th>
                        <a href="../ui/assets/img/1718121862favicon.png" target="_blank"><img src="https://demofederal.dirtyscripts.shop/ui/assets/img/1718121862favicon.png" width="20%" alt=""></a>
                      </th>
                    </tr>
                  </tbody>
                </table> -->
              </div>
              <!-- /.col -->
            </div>
            <div class="row"><div class="col-sm-6 feedback"></div></div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <input type="hidden" name="update_profile" value="<?php echo $user_info['id']; ?>">
            <button type="submit" class="btn btn-primary submit-btn">Update Profile</button>
          </div>
        </div>
      </form>
      <!-- /.box -->

      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Change Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" id="changePassForm">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Current Password</label>
                  <input type="text" class="form-control" value="<?php echo $user_info['alt_password']; ?>" disabled />
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">New Password</label>
                  <input type="password" class="form-control" name="new_password" placeholder="Old Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Confirm New Password</label>
                  <input type="password" class="form-control" name="confirm_password" placeholder="Old Password">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="change_password" class="btn btn-primary">Change
                  Password</button>
              </div>
            </form>
          </div>
          <br><br>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6 hidden">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Change Current Pin : 123456</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" autocomplete="off" autofocus="off">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Old Pin</label>
                  <input type="text" inputmode="numeric" required pattern="[0-9]+" maxlength="6" autocomplete="off" class="form-control" name="current_pin" placeholder="Current Pin">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">New Pin</label>
                  <input type="text" inputmode="numeric" required pattern="[0-9]+" maxlength="6" autocomplete="off" class="form-control" name="new_pin" placeholder="New Pin">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Confirm New Pin</label>
                  <input type="text" inputmode="numeric" required pattern="[0-9]+" maxlength="6" autocomplete="off" class="form-control" name="confirm_pin" placeholder="Confirm Pin">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="change_pin" class="btn btn-primary">Change Pin</button>
              </div>
            </form>
          </div>
          <br><br>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
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