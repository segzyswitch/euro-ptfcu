<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Helpdesk - PartnersTrust FCU </title>
    <link rel="icon" type="image/x-icon" href="../ui/assets/img/favicon.ico" />
    <link href="../ui/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="../ui/assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../ui/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../ui/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="../ui/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="../ui/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link rel="stylesheet" type="text/css" href="../ui/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="../ui/plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="../ui/assets/css/forms/theme-checkbox-radio.css">
    <link href="../ui/assets/css/apps/invoice-list.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="../ui/assets/css/elements/alert.css">
    <link href="../ui/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />


    <link href="../ui/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../ui/assets/css/widgets/modules-widgets.css">

    <link href="../ui/assets/css/pages/helpdesk.css" rel="stylesheet" type="text/css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <style>
        .layout-px-spacing {
            min-height: calc(100vh - 166px) !important;
        }
    </style>

    <!-- Code provided by Google -->
    <div id="google_translate_element"></div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>


    <style>
        .btn-light {
            border-color: transparent;
        }
    </style>

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <style>
        h4.modal-title {
            color: #000;
        }

        .modal-content {
            border: none;
        }

        .modal-body {
            text-align: center;
        }

        p span.countdown-holder {
            color: #e7515a;
            font-size: 18px;
        }

        .modal-footer {
            border: none;
        }

        .progress {
            width: 50%;
            margin: 0 auto;
            border-radius: 30px;
            height: 10px;
        }

        .modal-backdrop {
            background-color: #060818;
        }

        .layout-px-spacing {
            min-height: calc(100vh - 149px) !important;
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 350px;
            }
        }
    </style>
    <!--  END CUSTOM STYLE FILE  -->

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
 <div class="header-container fixed-top">
     <header class="header navbar navbar-expand-sm">

         <ul class="navbar-item theme-brand flex-row  text-center">
             <li class="nav-item theme-logo">
                 <a href="/">
                     <img src="../ui/assets/img/logo.svg" class="navbar-logo" alt="logo">
                 </a>
             </li>
             <li class="nav-item theme-text">
                 <a href="/" class="nav-link"> Logo </a>
             </li>
         </ul>

         <ul class="navbar-item flex-row ml-md-0 ml-auto">
             <li class="nav-item align-self-center search-animated">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search">
                     <circle cx="11" cy="11" r="8"></circle>
                     <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                 </svg>
                 <form class="form-inline search-full form-inline search" role="search">
                     <div class="search-bar">
                         <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                     </div>
                 </form>
             </li>
         </ul>



         <ul class="navbar-item flex-row ml-md-auto">

             <li class="nav-item dropdown language-dropdown">
                 <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img src="../ui/assets/img/de.png" class="flag-width" alt="flag">
                 </a>
                 <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                     <a class="dropdown-item d-flex" href="#" data-lang="German" value="German"><img src="../ui/assets/img/ca.png" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;German</span></a>
                     <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../ui/assets/img/jp.png" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Japanese</span></a>
                     <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../ui/assets/img/fr.png" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;French</span></a>
                     <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../ui/assets/img/ca.png" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;English</span></a>
                 </div>
             </li>



             <li class="nav-item dropdown message-dropdown">
                 <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                         <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                         <polyline points="22,6 12,13 2,6"></polyline>
                     </svg>
                 </a>
                 <div class="dropdown-menu position-absolute" aria-labelledby="messageDropdown">
                     <div class="">
                                              <a class="dropdown-item">
                             <div class="">

                                 <div class="media">
                                     <div class="user-img">
                                         <div class="avatar avatar-xl">
                                             <span class="avatar-title rounded-circle">KY</span>
                                         </div>
                                     </div>
                                     <div class="media-body">
                                         <div class="">
                                             <h5 class="usr-name">Login into dashboard</h5>
                                             <p class="msg-title">2024-07-16 05:19:23</p>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                         </a>
                                                  <a class="dropdown-item">
                             <div class="">

                                 <div class="media">
                                     <div class="user-img">
                                         <div class="avatar avatar-xl">
                                             <span class="avatar-title rounded-circle">KY</span>
                                         </div>
                                     </div>
                                     <div class="media-body">
                                         <div class="">
                                             <h5 class="usr-name">New Wire Transfer</h5>
                                             <p class="msg-title">2024-07-16 04:16:03</p>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                         </a>
                                                  <a class="dropdown-item">
                             <div class="">

                                 <div class="media">
                                     <div class="user-img">
                                         <div class="avatar avatar-xl">
                                             <span class="avatar-title rounded-circle">KY</span>
                                         </div>
                                     </div>
                                     <div class="media-body">
                                         <div class="">
                                             <h5 class="usr-name">Login into dashboard</h5>
                                             <p class="msg-title">2024-07-16 04:12:35</p>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                         </a>
                                                  <a class="dropdown-item">
                             <div class="">

                                 <div class="media">
                                     <div class="user-img">
                                         <div class="avatar avatar-xl">
                                             <span class="avatar-title rounded-circle">KY</span>
                                         </div>
                                     </div>
                                     <div class="media-body">
                                         <div class="">
                                             <h5 class="usr-name">Login into dashboard</h5>
                                             <p class="msg-title">2024-07-16 03:43:55</p>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                         </a>
                                                 
                     </div>
                 </div>
             </li>

             <li class="nav-item dropdown notification-dropdown">
                 <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                         <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                         <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                     </svg><span class="badge badge-success"></span>
                 </a>
                 <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                     <div class="notification-scroll">
                     
                         <div class="dropdown-item">
                             <div class="media server-log">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server">
                                     <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                     <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                     <line x1="6" y1="6" x2="6" y2="6"></line>
                                     <line x1="6" y1="18" x2="6" y2="18"></line>
                                 </svg>
                                 <div class="media-body">
                                     <div class="data-info">
                                         <h6 class="">Credit</h6>
                                         <p class="">2024-07-14 16:35:00</p>
                                     </div>

                                     <!-- <div class="icon-status">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                             <line x1="18" y1="6" x2="6" y2="18"></line>
                                             <line x1="6" y1="6" x2="18" y2="18"></line>
                                         </svg>
                                     </div> -->
                                 </div>
                             </div>
                         </div>

                         

                         <div class="dropdown-item">
                             <div class="media server-log">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server">
                                     <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                     <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                     <line x1="6" y1="6" x2="6" y2="6"></line>
                                     <line x1="6" y1="18" x2="6" y2="18"></line>
                                 </svg>
                                 <div class="media-body">
                                     <div class="data-info">
                                         <h6 class="">Loan</h6>
                                         <p class="">2024-07-15 08:12:08</p>
                                     </div>

                                     <!-- <div class="icon-status">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                             <line x1="18" y1="6" x2="6" y2="18"></line>
                                             <line x1="6" y1="6" x2="18" y2="18"></line>
                                         </svg>
                                     </div> -->
                                 </div>
                             </div>
                         </div>

                         

                     </div>
                 </div>
             </li>

             <li class="nav-item dropdown user-profile-dropdown">
                 <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <img src="../ui/assets/img/user.png" alt="avatar" class="img-fluid">
                 </a>
                 <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                     <div class="">
                         <div class="dropdown-item">
                             <a class="" href="my-account.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                     <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                     <circle cx="12" cy="7" r="4"></circle>
                                 </svg> Profile</a>
                         </div>
                         <div class="dropdown-item">
                             <a class="" href="ticket.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox">
                                     <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                     <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                 </svg> Inbox</a>
                         </div>
                         <div class="dropdown-item">
                             <a class="" href="../lockscreen.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                     <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                     <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                 </svg> Lock Screen</a>
                         </div>
                         <div class="dropdown-item">
                             <a class="" href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                     <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                     <polyline points="16 17 21 12 16 7"></polyline>
                                     <line x1="21" y1="12" x2="9" y2="12"></line>
                                 </svg> Sign Out</a>
                         </div>
                     </div>
                 </div>
             </li>

         </ul>
     </header>
 </div>
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
                                <li class="breadcrumb-item active" aria-current="page"><span>Helpdesk</span></li>
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
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="helpdesk container">

            <div class="helpdesk layout-spacing">

                <div class="hd-header-wrapper">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4 class="">Helpdesk</h4>
                            <p class="">A knowledge base Admin Template </p>


                        </div>
                    </div>
                </div>

                <div class="hd-tab-section">
                    <div class="row">
                        <div class="col-md-12 mb-5 mt-5">

                            <div class="accordion" id="hd-statistics">
                                                                    <div class="card">
                                        <div class="card-header" id="hd-statistics-1">
                                            <div class="mb-0">
                                                <div class="" data-toggle="collapse" role="navigation" data-target="#collapse-hd-statistics-1" aria-expanded="false" aria-controls="collapse-hd-statistics-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                        <line x1="12" y1="17" x2="12" y2="17"></line>
                                                    </svg>
                                                    Get started                                                </div>
                                            </div>
                                        </div>

                                        <div id="collapse-hd-statistics-1" class="collapse" aria-labelledby="hd-statistics-1" data-parent="#hd-statistics">
                                            <div class="card-body">
                                                <p>How to register a account</p>
                                            </div>
                                        </div>
                                    </div>

                                                                    <div class="card">
                                        <div class="card-header" id="hd-statistics-2">
                                            <div class="mb-0">
                                                <div class="" data-toggle="collapse" role="navigation" data-target="#collapse-hd-statistics-2" aria-expanded="false" aria-controls="collapse-hd-statistics-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                        <line x1="12" y1="17" x2="12" y2="17"></line>
                                                    </svg>
                                                    How to send wire transfer                                                </div>
                                            </div>
                                        </div>

                                        <div id="collapse-hd-statistics-2" class="collapse" aria-labelledby="hd-statistics-2" data-parent="#hd-statistics">
                                            <div class="card-body">
                                                <p>When sending wire transfer, u need to ....... soooooooo</p>
                                            </div>
                                        </div>
                                    </div>

                                

                            </div>


                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>



    
</div>
<!--  END CONTENT PART  -->

</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="../ui/assets/js/libs/jquery-3.1.1.min.js"></script>
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

<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- <script src="../ui/assets/js/components/session-timeout/bootstrap-session-timeout.js"></script> -->
<!-- END PAGE LEVEL PLUGINS -->

<!--  BEGIN CUSTOM SCRIPTS FILE  -->
<!-- <script src="../ui/assets/js/components/session-timeout/custom-bootstrap_session_timeout.js"></script> -->
<!--  END CUSTOM SCRIPTS FILE  -->
</body>
</html>