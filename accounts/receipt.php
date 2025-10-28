<?php
require_once '../config/session.php';
$user_info = $Controller->User();
if ( isset($_GET['id']) ) {
  $invoice_id = $_GET['id'];
  $reciept = $Controller->singleTransaction($invoice_id);
}else {
  header('Location: ./history');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>Transaction - PartnersTrust FCU</title>
  <link rel="icon" type="image/x-icon" href="../ui/assets/img/favicon.ico" />
  <link href="../ui/assets/css/loader.css" rel="stylesheet" type="text/css" />
  <script src="../ui/assets/js/loader.js"></script>
  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link href="../ui/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../ui/assets/css/plugins.css" rel="stylesheet" type="text/css" />
  <link href="../ui/assets/css/dashboard/dash_2.css" rel="stylesheet" />
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
              <li class="breadcrumb-item"><a href="./history">History</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>Receipt</span></li>
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

  <!--  BEGIN CONTENT PART  -->
  <div id="content" class="main-content mb-5">
    <div class="layout-px-spacing">
      <div class="row invoice layout-top-spacing layout-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="doc-container">
            <div class="row">
              <div class="col-xl-9">
                <div class="invoice-container">
                  <div class="invoice-inbox">
                    <div id="ct" class="">
                      <div class="invoice-00001">
                        <div class="content-section">
                          <div class="inv--head-section inv--detail-section">
                            <div class="row">
                              <div class="col-sm-6 col-12 mr-auto">
                                <div class="d-flex">
                                  <img width="60" src="../ui/assets/img/favicon.ico" alt="company">
                                  <h3 class="in-heading align-self-center">PartnersTrust FCU</h3>
                                </div>
                              </div>
                              <div class="col-sm-6 text-sm-right">
                                <p class="inv-list-number"><span class="inv-title">Invoice : </span> <span class="inv-number"><?php echo $reciept['invoice']; ?></span></p>
                                <h3><span class="text-primary text-capitalize">Transaction <?php echo $reciept['status']; ?></span></h3>
                              </div>

                              <div class="col-sm-6 align-self-center mt-3">
                                <p class="inv-street-addr">3 Abbey Road, San Francisco CA 94102</p>
                                <p class="inv-email-address">info@partnerstrustfcu.com</p>
                                <p class="inv-email-address">(715) 600-6612</p>
                              </div>
                              <div class="col-sm-6 align-self-center mt-3 text-sm-right">
                                <p class="inv-created-date"><span class="inv-title"> </p>
                              </div>
                            </div>
                          </div>
                          <div class="inv--product-table-section">
                            <div class="table-responsive">
                              <table class="table">
                                  <tbody>
                                    <tr>
                                      <td>Transaction Amount</td>
                                      <td class="text-right"></td>
                                      <td>€<?php echo number_format($reciept['amount']); ?></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td>Beneficiary Name</td>
                                      <td class="text-right"></td>
                                      <td><?php echo $reciept['benef_name']; ?></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td>Beneficiary Account</td>
                                      <td class="text-right"></td>
                                      <td class="text-capitalize">
                                        <?php
                                        if ( in_array($reciept['benef_account'], array('current', 'savings')) ) {
                                          echo $reciept['benef_account'].' account ('.$user_info[$reciept['benef_account'].'_account'].')';
                                        }else {
                                          echo $reciept['benef_account'];
                                        }
                                        ?>
                                      </td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td>Bank Name</td>
                                      <td class="text-right"></td>
                                      <td><?php echo $reciept['benef_bank']; ?></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td>Transaction Type</td>
                                      <td class="text-right"></td>
                                      <td class="text-capitalize"><?php echo str_replace('_', ' ', $reciept['type']); ?></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td>Payment Account</td>
                                      <td class="text-right"></td>
                                      <td>
                                        <?php
                                        if ( $reciept['send_from'] == 'current' ) {
                                          echo "Current Account (".$user_info['current_account'].")";
                                        }elseif ( $reciept['send_from'] == 'savings' ) {
                                          echo "Savings Account (".$user_info['savings_account'].")";
                                        }else {
                                          echo $reciept['send_from'];
                                        }
                                        ?>
                                      </td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td>Transaction Status</td>
                                      <td class="text-right"></td>
                                      <td class="text-capitalize"><?php echo $reciept['status']; ?></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td>Transaction Date</td>
                                      <td class="text-right"></td>
                                      <td><?php echo date('h:i:s d/m/Y', strtotime($reciept['send_date'])); ?></td>
                                      <td></td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                          </div>

                          <div class="inv--total-amounts">

                            <div class="row mt-4">
                              <div class="col-sm-5 col-12 order-sm-0 order-1">
                              </div>
                              <div class="col-sm-7 col-12 order-sm-1 order-0">
                                <div class="text-sm-right">
                                  <div class="row">
                                    <div class="col-sm-8 col-7 grand-total-title">
                                      <h4 class="">Grand Total : </h4>
                                    </div>
                                    <div class="col-sm-4 col-5 grand-total-amount">
                                      <h4 class="">€<?php echo number_format($reciept['amount']); ?></h4>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>

                          <div class="inv--note">

                            <div class="row mt-4">
                              <div class="col-sm-12 col-12 order-sm-0 order-1">
                                <p><strong>NOTE: </strong> If you have any questions or would like more information, please call our 24-hour Contact Centre on (715) 600-6623 or send an email to support@partnerstrustcu.com</p>
                              </div>
                            </div>

                          </div>

                        </div>
                      </div>

                    </div>


                  </div>

                </div>
              </div>

              <!-- Print -->
              <div class="col-xl-3">
                <div class="invoice-actions-btn">
                  <div class="invoice-action-btn">
                    <div class="row">
                      <!-- <div class="col-xl-12 col-md-3 col-sm-6">
                        <a href="javascript:void(0);" class="btn btn-primary btn-send">New Transfer</a>
                      </div> -->
                      <div class="col-xl-12 col-md-3 col-sm-6">
                        <a href="javascript:void(0);" class="btn btn-secondary btn-print  action-print">Print Invoice</a>
                      </div>
                      <div class="col-xl-12 col-md-3 col-sm-6">
                        <a href="./create-ticket" class="btn btn-danger btn-download">Report Transaction</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- / Print -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END MAIN CONTAINER -->

</div>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="../ui/bootstrap/js/popper.min.js"></script>
<script src="../ui/bootstrap/js/bootstrap.min.js"></script>
<script src="../ui/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../ui/assets/js/app.js"></script>
<script>
  $(document).ready(function() {
    App.init();
  });
</script>
<script src="../ui/assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="../ui/assets/js/apps/invoice-preview.js"></script>
</body>

</html>