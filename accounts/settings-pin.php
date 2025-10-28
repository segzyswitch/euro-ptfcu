<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Manage Pin - PartnersTrust FCU </title>
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
                                <li class="breadcrumb-item active" aria-current="page"><span>Manage Pin</span></li>
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

     <div class="overlay"></div>
     <div class="search-overlay"></div>

     <!--  BEGIN SIDEBAR  -->
     <div class="sidebar-wrapper sidebar-theme">

         <nav id="sidebar">
             <div class="shadow-bottom"></div>

             <ul class="list-unstyled menu-categories" id="accordionExample">


                 <li class="menu">
                     <a href="./dashboard.php" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                 <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                 <polyline points="9 22 9 12 15 12 15 22"></polyline>
                             </svg>
                             <span> Dashboard</span>
                         </div>
                     </a>
                 </li>

                 <li class="menu">
                     <a href="#starter-kit7" data-active="false" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal">
                                 <polyline points="4 17 10 11 4 5"></polyline>
                                 <line x1="12" y1="19" x2="20" y2="19"></line>
                             </svg>
                             <span>Deposit Money</span>
                         </div>
                         <div>
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                 <polyline points="9 18 15 12 9 6"></polyline>
                             </svg>
                         </div>
                     </a>
                     <ul class="submenu list-unstyled collapse" id="starter-kit7" data-parent="#accordionExample" style="">
                   
                    
                         <li>
                             <a href="./check-deposit.php"> Check Deposit </a>
                         </li>
                         <li>
                             <a href="./deposit.php"> Mobile deposit </a>
                         </li>
                     </ul>
                 </li>

                 <li class="menu">
                     <a href="#starter-kit" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal">
                                 <polyline points="4 17 10 11 4 5"></polyline>
                                 <line x1="12" y1="19" x2="20" y2="19"></line>
                             </svg>
                             <span>Transfer Money</span>
                         </div>
                         <div>
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                 <polyline points="9 18 15 12 9 6"></polyline>
                             </svg>
                         </div>
                     </a>
                     <ul class="submenu list-unstyled collapse show" id="starter-kit" data-parent="#accordionExample" style="">
                        
                     
<li>
                             <a href="./transfer-pending.php"> Resume transfer</a>
                         </li>


                     <li>
                             <a href="./domestic-transfer.php"> Local transfer</a>
                         </li>
                         <li>
                             <a href="./wire-transfer.php"> Wire transfer</a>
                         </li>
                         <li>
                             <a href="./self-transfer.php"> Transfer to self </a>
                         </li>
                     </ul>
                 </li>


                 
<li class="menu">
                     <a href="./mycards.php" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                 <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                 <line x1="1" y1="10" x2="23" y2="10"></line>
                             </svg>
                             <span>Credit Cards</span>
                         </div>
                     </a>
                 </li>





                 <li class="menu">
                     <a href="#starter-kit2" data-active="false" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                 <circle cx="12" cy="12" r="10"></circle>
                                 <polyline points="12 6 12 12 15 15"></polyline>
                             </svg>
                             <span>Loan/Mortages</span>
                         </div>
                         <div>
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                 <polyline points="9 18 15 12 9 6"></polyline>
                             </svg>
                         </div>
                     </a>
                     <ul class="submenu list-unstyled collapse" id="starter-kit2" data-parent="#accordionExample" style="">
                         <li class="active">
                             <a href="./loan-request.php"> New Loans</a>
                         </li>
                         <li>
                             <a href="./loan.php"> My Loans</a>
                         </li>

                     </ul>
                 </li>


                 <li class="menu">
                     <a href="./history.php" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                 <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                 <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                             </svg>
                             <span>Bank Statement</span>
                         </div>
                     </a>
                 </li>










                 <li class="menu">
                     <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                 <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                 <polyline points="13 2 13 9 20 9"></polyline>
                             </svg>
                             <span>My Account</span>
                         </div>
                         <div>
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                 <polyline points="9 18 15 12 9 6"></polyline>
                             </svg>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="submenu2" data-parent="#accordionExample">
                         <li>
                             <a href="my-account.php"> Profile </a>
                         </li>
                         <li>
                             <a href="./pending-kyc.php"> Kyc Verification </a>
                         </li>
                         <li>
                             <a href="#sm2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Security <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                     <polyline points="9 18 15 12 9 6"></polyline>
                                 </svg> </a>
                             <ul class="collapse list-unstyled sub-submenu" id="sm2" data-parent="#submenu2">
                                 <li>
                                     <a href="./settings-password.php"> Password </a>
                                 </li>
                                 <li>
                                     <a href="./settings-pin.php">Pincode </a>
                                 </li>
                                 <li>
                                     <a href="./activities.php"> Activities </a>
                                 </li>
                                 <li>
                                     <a href="./create-ticket.php"> Report </a>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </li>


                                              

               

                 <li class="menu">
                     <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                 <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                 <circle cx="12" cy="12" r="10"></circle>
                                 <line x1="12" y1="17" x2="12" y2="17"></line>
                             </svg>
                             <span>Need help?</span>
                         </div>
                         <div>
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                 <polyline points="9 18 15 12 9 6"></polyline>
                             </svg>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="submenu3" data-parent="#accordionExample">
                         <li>
                             <a href="./create-ticket.php"> New ticket </a>
                         </li>
                         <li>
                             <a href="./ticket.php"> View tickets </a>
                         </li>
                         <!-- <li>
                             <a href="javascript:void(0);"> Live chat </a>
                         </li> -->

                         <li>
                             <a href="./helpdesk.php">Helpdesk </a>
                         </li>



                     </ul>
                 </li>




                 <li class="menu">
                     <a href="./logout.php" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                 <path d="M10 22H5a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h5"></path>
                                 <polyline points="17 16 21 12 17 8"></polyline>
                                 <line x1="21" y1="12" x2="9" y2="12"></line>
                             </svg>
                             <span> Sign out</span>
                         </div>
                     </a>
                 </li>

                 <br> <br> <br>
                 <center>
                     <p> </p>
                 </center>
             </ul>

         </nav>

     </div>
     <!--  END SIDEBAR  -->


<!--  BEGIN CONTENT PART  -->
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
                                <h4>Manage Pin</h4>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-area">
                            <form method="POST" enctype="multipart/form-data">

                                <label for="basic-url">Old Pin</label>
                                <div class="input-group mb-4">
                                <input type="text" inputmode="numeric" pattern="[0-9]+"  maxlength="6" autocomplete="off" class="form-control" name="current_pin" autocomplete="off" placeholder="Old Pin" required>
                        </div>

                                <label for="basic-url">New Password</label>
                                <div class="input-group mb-4">
                                <input type="text" inputmode="numeric" pattern="[0-9]+"  maxlength="6" autocomplete="off" class="form-control" name="new_pin" autocomplete="off" placeholder="New Pin" required>
                         </div>


                                <label for="basic-url">Confirm New Password</label>
                                <div class="input-group mb-4">
                                <input type="text" inputmode="numeric" pattern="[0-9]+"  maxlength="6" autocomplete="off" class="form-control" name="confirm_pin" autocomplete="off" placeholder="Confirm New Pin" required>
                        </div>




                                <div class="input-group">
                                    <button class="btn btn-primary mb-2" type="submit" name="change_pin">Change Pin</button>
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