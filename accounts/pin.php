<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>PartnersTrust FCU  </title>
    <link rel="icon" type="image/x-icon" href="../ui/assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../ui/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../ui/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../ui/assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="../ui/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="../ui/assets/css/forms/switches.css">

    <link rel="stylesheet" type="text/css" href="../ui/assets/css/loader.css">
    <script src="../ui/assets/js/loader.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>



</head>

<body class="form no-image-content">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

<div class="container">
  <div class="form-form">
    <div class="form-form-wrap">
      <div class="form-container">
        <div class="form-content">

          <div class="d-flex user-meta">
            <img src="https://demofederal.dirtyscripts.shop/assets/user/profile/user.png" class="usr-profile" alt="avatar">
            <div class="">
              <p class="">Ofofonobs Developer</p>
            </div>
          </div>

          <form class="text-left" method="POST" enctype="multipart/form-data">
            <div class="form">
              <div id="password-field" class="field-wrapper input mb-2">
                <div class="d-flex justify-content-between">
                  <label for="password">PINCODE</label>
                  <a href="./signout" class="forgot-pass-link">Sign out?</a>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
                <input id="password" name="input" type="password" class="form-control" value="123456" placeholder="******" required maxlength="6">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
              </div>
              <div class="d-sm-flex justify-content-between">
                <div class="field-wrapper">
                  <button type="submit" class="btn btn-primary" name="pincodesubmit">Unlock</button>
                </div>
              </div>

            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>




<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="../ui/assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="../ui/bootstrap/js/popper.min.js"></script>
<script src="../ui/bootstrap/js/bootstrap.min.js"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="../ui/assets/js/authentication/form-2.js"></script>

</body>
</html>