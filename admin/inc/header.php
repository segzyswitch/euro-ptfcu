<header class="main-header">
  <!-- Logo -->
  <a href="./dashboard.php" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>A</b>LT</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg">Dashboard</span>
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
      <span class="hidden-xs"><?php echo $admin_info['nickname']; ?></span>
      </a>
      <ul class="dropdown-menu">
      <!-- User image -->
      <li class="user-header">
        <img src="https://demofederal.dirtyscripts.shop/assets/user/profile/user.png" class="img-circle" alt="User Image">
        <p><?php echo $admin_info['nickname']; ?></p>
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