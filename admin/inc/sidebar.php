<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
	  <!-- Sidebar user panel -->
	  <div class="user-panel">
	    <div class="pull-left image">
	    <img src="https://demofederal.dirtyscripts.shop/assets/user/profile/user.png" class="img-circle" alt="User Image">
	    </div>
	    <div class="pull-left info">
	    <p><?php echo $admin_info['nickname']; ?></p>
	    <small><i class="fa fa-circle text-success"></i> Online</small>
	    </div>
	  </div>
	  <!-- sidebar menu: : style can be found in sidebar.less -->
	  <ul class="sidebar-menu" data-widget="tree">
	    <li class="header">MAIN NAVIGATION</li>
	    <li><a href="./dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
	    <!-- USERS -->
	    <li class="header">MANAGE USER</li>
	    <li><a href="./users"><i class="fa fa-user"></i> <span>All Users</span></a></li>
	    <li><a href="./createuser"><i class="fa fa-user"></i> <span>Create New Users</span></a></li>
	    <!-- FUNDING -->
	    <li class="header">FUNDING</li>
	    <li><a href="./fundings"><i class="fa fa-paper-plane-o"></i> <span>Credit/Debit User</span></a></li>
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
		      <!-- <li><a href="./create-funding-history.php"><i class="fa fa-circle-o"></i> Credit/Debit History</a></li> -->
		    </ul>
	    </li>
	    <li><a href="./cards"><i class="fa fa-credit-card"></i> <span>All Virtual Cards</span></a></li>
	    <!-- <li class="treeview">
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
	    </li> -->
	    <li><a href="./pending-deposit"><i class="fa fa-list-alt"></i> <span>Deposit Transactions</span></a></li>
	    <!-- <li><a href="./sendmessage.php"><i class="fa fa-credit-card"></i> <span>Send SMS Message</span></a></li> -->
	    <li class="header">SETTINGS & PROFILE</li>
	    <li><a href="./payment"><i class="fa fa-dollar"></i> <span>Set Crypto Payments</span></a></li>
	    <li><a href="./messages"><i class="fa fa-comments-o"></i> <span>Tickets</span></a></li>
	    <li><a href="./edit-profile"><i class="fa fa-user-o"></i> <span>Edit Profile</span></a></li>
	    <li><a href="./setting"><i class="fa fa-cog"></i> <span>System Settings</span></a></li>
	    <li><a href="./logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
	    <!-- <li><a href="./smtp_settings.php"><i class="fa fa-cog"></i> <span>SMTP Settings</span></a></li> -->
	    <!-- <li><a href="./api_settings.php"><i class="fa fa-cog"></i> <span>SMS Api</span></a></li> -->
	  </ul>
  </section>
  <!-- /.sidebar -->
</aside>