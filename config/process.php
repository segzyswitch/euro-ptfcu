<?php
session_start();
require "../config/Controller.php";
$Controller = new Controller;
$conn = $Controller->conn;
if ( isset($_SESSION["ptcu_account_id"]) ) {
  $user_info = $Controller->User();
  $user_id = $_SESSION["ptcu_account_id"];
}

// GENERATE UNIQUE ID
function generateUniqueId($length = 10) {
  // Define the characters to be used in the ID
  $characters = time().'qwertyupasdfghjklzxcvbnm';
  // Shuffle the characters
  $shuffledCharacters = str_shuffle($characters);
  // Return a substring of the shuffled characters of the desired length
  return substr($shuffledCharacters, 0, $length);
}

// GENERATE ACCOUNT NUMBERS
function generateRandomNumber($length) {
  // Define the characters to be used in the ID
  $characters = time().time();
  // Shuffle the characters
  $shuffledCharacters = str_shuffle($characters);
  // Return a substring of the shuffled characters of the desired length
  $generated_number = substr($shuffledCharacters, 0, $length);
  // Split the number into chunks of 4
  $chunks = str_split($generated_number, 4);
  // Combine chunks with spaces
  return implode(' ', $chunks);
}
// Generate EXP date for cards
function cardExpDate() {
  // Create a DateTime object for today
  $date = new DateTime();
  // Add four years to the current date
  $date->modify('+4 years');
  // Format the date as MM/YY
  return $date->format('m/y');
}

// Mail function
function sendMail($to, $generate_id, $subject) {
  ini_set('SMTP', 'towercoastcu.com');
  ini_set('smtp_port', 465);
  // SEND EMAIL VERIFICATION
  $message = "
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <title>".$subject."</title>
      <style>
        body { margin:0;background-color:#efefef; }
        * {
          font-family: sans-serif;
          box-sizing: border-box;
          text-decoration: none;
        }
        header {
          background-color: #0d6efd;
          text-align: center;
          padding: 25px 0 80px 0;
        }
        header img {
          border-radius:50px;
          background-color: rgba(255,255,255,0.4);
          padding: 5px;
        }
        main {
          width: 90%;
          max-width: 500px;
          background-color: #ffffff;
          overflow: auto;
          padding: 15px;
          margin: auto;
          margin-top: -55px;
        }
        .confirm-btn {
          border: 1px solid #0d6efd;
          color: #0d6efd;
          padding: 10px;
          border-radius:10px;
          display: inline-block;
        }
        footer {
          width: 90%;
          max-width: 500px;
          background-color: #E7ECFD;
          overflow: auto;
          padding: 15px;
          margin: auto;
          text-align: center;
          margin-bottom: 25px;
        }
        footer a {
          color: #0d6efd;
          margin: 0 10px;
        }
      </style>
    </head>
    <body>

    <header>

    </header>

    <main>
      <h1 style='font-weight:100;font-size:3em;'>Welcome!</h1>
      <p>Thanks for joining us, we're exited to have you get started. First, you have to confirm your account by clicking on the button below.</p>
      <p><a href='https://towercoastcu.com/functions/config?verify_account=".$generate_id."' class='confirm-btn'>Confirm account</a></p>
      <p>If the aboove does not work, copy and paste the following link in your browser: https://towercoastcu.com/functions/config?verify_account=".$generate_id."</p>
      <p>Ignore this email if you didn't register at <a href='https://'towercoastcu.com'>towercoastcu.com</a></p>
      <p>Cheers,<br>KodeAfrika Team</p>
    </main>

    <footer>
      <a href='https://towercoastcu.com'>towercoastcu.com</a>
      <a href='https://towercoastcu.com/about'>About us</a>
      <a href='https://towercoastcu.com#contact'>Contact</a>
    </footer>

    </body>
    </html>
  ";
  $headers = "From: Tower Coast CU <info@towercoastcu.com>\r\n";
  $headers .= "Reply-To: Tower Coast CU <info@towercoastcu.com>\r\n";
  $headers .= "Return-Path: info@towercoastcu.com\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  return mail($to, $subject, $message, $headers);
}


// USER LOGIN
if ( isset($_POST["user_login"]) ) {
  $usrname = filter_var($_POST["email"], FILTER_SANITIZE_SPECIAL_CHARS);
  $paswrd = filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS);

  $checkinfo = "SELECT password, id, status FROM users
    WHERE email='$usrname'";
  $confirminfo = $conn->prepare($checkinfo);
  $confirminfo->execute();

  // Get ClienntIP
  $client_ip = $_SERVER['REMOTE_ADDR'];

  if ( $confirminfo->rowcount() > 0 ) {
    $conf_row = $confirminfo->fetch();
    $user_id = $conf_row["id"];

    if ( password_verify($paswrd, $conf_row["password"]) ) {
      if ( $conf_row["status"] == 'pending' ) {
        ?>
          <div class="alert alert-danger">
            <i class="fa fa-exclamation-triangle"></i> Account not verified!.
          </div>
        <?php
      }else if ( $conf_row["status"] == 'locked' ) {
        ?>
          <div class="alert alert-danger">
            <i class="fa fa-exclamation-triangle"></i> Your account has been locked due to suspicious activities, contact <a href="tel:void">+19166108819</a> or send a mail to <a href="">contact@partnerstrustcu.com</a>
          </div>
        <?php
      }else {
        // Add login activity
        $login_feed = "New login session.";
        $add_activity = $conn->prepare("INSERT INTO user_activity(user_id, type, feed, user_ip)
          VALUES('$user_id', 'login', '$login_feed', '$client_ip')");
        try {
          $add_activity->execute();
        } catch (PDOException $e) {
          echo $e->getMessage();
        }

        $_SESSION["ptcu_account_id"] = $user_id;
        $_SESSION["accnt_status"] = $conf_row["status"];
        echo "<div class='alert alert-success'>Redirecting <i class='fa fa-spin fa-cog'></i></idiv>";
      }
    }else {
      ?>
        <div class="alert alert-danger">
          <span data-dismiss="alert" class="close">&times;</span>
          <i class="fa fa-exclamation-triangle"></i> Incorrect Password, check and try again.
        </div>
      <?php
    }
  }else {
    ?>
      <div class="alert alert-danger">
        <span data-dismiss="alert" class="close">&times;</span>
        <i class="fa fa-exclamation-triangle"></i> Incorrect Username, check and try again.
      </div>
    <?php
  }
}
// upload photo
if ( isset($_POST['upload_photo']) ) {
  $image_name = $_FILES['image']['name'];
  $image_tmp_file = $_FILES["image"]["tmp_name"];
  $target_dir = "../assets/images/users/";
  $image_target_file = $target_dir . $image_name;

  if ( move_uploaded_file($image_tmp_file, $image_target_file) ) {
    $sql = "UPDATE users SET photo = '$image_name' WHERE id = '$user_id'";
    $query = $conn->prepare($sql);
    try {
      $query->execute();
      echo 'success';
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
// change password
if ( isset($_POST["change_password"]) ) {
  $old_password = filter_var($_POST["old_password"], FILTER_SANITIZE_SPECIAL_CHARS);
  $new_password = filter_var($_POST["new_password"], FILTER_SANITIZE_SPECIAL_CHARS);
  $confirm_password = filter_var($_POST["confirm_password"], FILTER_SANITIZE_SPECIAL_CHARS);
  // Hash new password
  $hashpwd = password_hash($new_password, PASSWORD_DEFAULT);
  // Get ClienntIP
  $client_ip = $_SERVER['REMOTE_ADDR'];
  // Check user password
  $checkinfo = "SELECT password FROM users
    WHERE id='$user_id'";
  $confirminfo = $conn->prepare($checkinfo);
  $confirminfo->execute();

  if ( $confirminfo->rowcount() > 0 ) {
    $conf_row = $confirminfo->fetch();

    if ( password_verify($old_password, $conf_row["password"]) ) {
      if ( $new_password !== $confirm_password ) {
        ?>
          <div class="alert alert-danger">
            <i class="fa fa-exclamation-triangle"></i> New passwords do not match, check and try again!.
          </div>
        <?php
      }else {
        $sql = "UPDATE users SET password = '$hashpwd',
        alt_password = '$new_password'
        WHERE id = '$user_id'";
        $query = $conn->prepare($sql);
        // Add activity
        $login_feed = "Account password changed.";
        $add_activity = $conn->prepare("INSERT INTO user_activity(user_id, type, feed, user_ip)
          VALUES('$user_id', 'password', '$login_feed', '$client_ip')");
        try {
          $query->execute();
          $add_activity->execute();
          ?>
            <div class="alert bg-success rounded mb-3 d-flex p-0" style="color:#d4edda;">
              <i class="fa fa-check-circle my-auto px-2 h4"></i>
              <div class="w-100 alert-success border border-success rounded" style="padding:14px;">
                <button class="close" type="button" data-dismiss="alert">&times;</button>
                <span>Password updated successfully!</span>
              </div>
            </div>
          <?php
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }
    }else {
      ?>
        <div class="alert alert-danger">
          <span data-dismiss="alert" class="close">&times;</span>
          <i class="fa fa-exclamation-triangle"></i> Incorrect Password, check and try again.
        </div>
      <?php
    }
  }else {
    ?>
      <div class="alert alert-danger">
        <span data-dismiss="alert" class="close">&times;</span>
        <i class="fa fa-exclamation-triangle"></i> Incorrect Username, check and try again.
      </div>
    <?php
  }
}

// ADD NEW USER ACCOUNT
if ( isset($_POST["add_account"]) ) {
  $admin_key = 'MASTER_ADMIN';
  $fname = filter_var($_POST["fname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $lname = filter_var($_POST["lname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $usrname = filter_var($_POST["username"], FILTER_SANITIZE_SPECIAL_CHARS);
  $login_pwd = filter_var($_POST["paswrd"], FILTER_SANITIZE_SPECIAL_CHARS);
  $confirm_pwd = filter_var($_POST["con_pwd"], FILTER_SANITIZE_SPECIAL_CHARS);
  // GENERATE 4 RANDOM NUMBERS WITH LAST SIX OF TIME FUNCTION
  $generate_id = rand(1000,9999).substr(time(), strlen(time()) - 6);
  // PASSWOD HASHING
  $hashpwd = password_hash($login_pwd, PASSWORD_DEFAULT);
  // Generate Account Number
  $rand_accnt = substr(time(), strlen(time()) - 6).rand(1000,9999);

  $checkinfo = $conn->prepare("SELECT login_usrname FROM user_account WHERE login_usrname='$usrname'");
  $checkinfo->execute();
  // check if email exists
  $checkmail = $conn->prepare("SELECT * FROM user_account WHERE email='$email'");
  $checkmail->execute();

  if ( $checkmail->rowcount() > 0 ) {
    ?>
      <div class="alert alert-danger">
        <i class="fa fa-exclamation-circle"></i> Sorry, Email already registered, check email and try again.
      </div>
    <?php
    return false;
  }
  if ( $login_pwd !== $confirm_pwd ) {
    ?>
      <div class="alert-danger alert">
        <i class="fa fa-exclamation-triangle"></i> Passwords do not match, check and try again.
      </div>
    <?php
    return false;
  }
  if ( $checkinfo->rowcount() > 0 ) {
    ?>
      <div class="alert-danger alert">
        <i class="fa fa-exclamation-triangle"></i> Username already exists, try a new one.
      </div>
    <?php
    return false;
  }
  // validate password
  $sql = "INSERT INTO user_account(fname, lname, email, admin_id, accnt_id, accnt_number,
    login_usrname, login_paswrd, alt_paswrd,
    saving_bal, checking_bal, car_expenses, reg_date, status, transfer_status)
    VALUES('$fname', '$lname', '$email', '$admin_key', '$generate_id', '$rand_accnt',
    '$usrname', '$hashpwd', '$login_pwd',
    '0', '0', '0', now(), 1, 1)
  ";
  $query = $conn->prepare($sql);

  try {
    $query->execute();
    sendMail($email, $generate_id, "Account verification - Tower coast CU");
    
    ?>
    <div class="alert-success alert">
      <i class="fa fa-exclamation-triangle"></i> We sent you a verification link, please follow the link to verify your account.
    </div>
  <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// Local transfer
if ( isset($_POST["local_transfer"]) ) {
  $amount = $_POST["amount"];
  $payment_account = $_POST["payment_account"];
  $bank_name = $_POST["bank_name"];
  $account_number = $_POST["account_number"];
  $account_name = $_POST["account_name"];
  $description = $_POST["description"];
  // Generate 13 char invoice
  $invoice = "#".generateUniqueId(13);

  if ( $payment_account=='current' ) {
    if ( $amount > $user_info['current_bal'] ) {
      ?>
        <div class="alert bg-warning rounded mb-3 d-flex p-0" style="color:#fff3cd;">
          <i class="fa fa-exclamation-triangle my-auto px-2 h4"></i>
          <div class="w-100 alert-warning border border-warning rounded" style="padding:14px;">
            <button class="close" type="button" data-dismiss="alert">&times;</button>
            <span>Insuffient balance, top up and try again!.</span>
          </div>
        </div>
      <?php
      return false;
    }else {
      $current_bal = $user_info['current_bal'] - $amount;
      // SQL QUERY
      $debit = "UPDATE users SET current_bal = '$current_bal' WHERE id = '$user_id'";
      $query1 = $conn->prepare($debit);
    }
  }
  if ( $payment_account == 'savings' ) {
    if ( $amount > $user_info['savings_bal'] ) {
      ?>
        <div class="alert bg-warning rounded mb-3 d-flex p-0" style="color:#fff3cd;">
          <i class="fa fa-exclamation-triangle my-auto px-2 h4"></i>
          <div class="w-100 alert-warning border border-warning rounded" style="padding:14px;">
            <button class="close" type="button" data-dismiss="alert">&times;</button>
            <span>Insuffient balance, top up and try again!.</span>
          </div>
        </div>
      <?php
      return false;
    } else {
      $savings_bal = $user_info['savings_bal'] - $amount;
      // SQL QUERY
      $debit = "UPDATE users SET savings_bal = '$savings_bal' WHERE id = '$user_id'";
      $query1 = $conn->prepare($debit);
    }
  }
  // SQL QUERY
  $transact = "INSERT INTO transactions(user_id, invoice, amount, type, send_from,
    benef_account, benef_name, benef_bank, description, status)
  VALUES('$user_id', '$invoice', '$amount', 'local', '$payment_account',
    '$account_number', '$account_name', '$bank_name', '$description', 'pending'
  )";
  $query2 = $conn->prepare($transact);
  try {
    $query1->execute();
    $query2->execute();

    ?>
      <div class="alert bg-success rounded mb-3 d-flex p-0" style="color:#d4edda;">
        <i class="fa fa-check-circle my-auto px-2 h4"></i>
        <div class="w-100 alert-success border border-success rounded" style="padding:14px;">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <span>Transfer successful! transactions are completed once payment are confirmed. <a href="./history" class="text-primary">View transactions</a></span>
        </div>
      </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// wire transfer
if ( isset($_POST['wire_transfer']) ) {
  $amount = $_POST["amount"];
  $payment_account = $_POST["payment_account"];
  $account_type = $_POST["account_type"];
  $bank_name = $_POST["bank_name"];
  $account_number = $_POST["account_number"];
  $account_name = $_POST["account_name"];
  $account_number = $_POST["account_number"];
  $bank_country = $_POST["bank_country"];
  $routine_number = $_POST["routine_number"];
  $description = $_POST["description"];
  // Generate 13 char invoice
  $invoice = "#".generateUniqueId(13);

  if ( $payment_account=='current' ) {
    if ( $amount > $user_info['current_bal'] ) {
      ?>
        <div class="alert bg-warning rounded mb-3 d-flex p-0" style="color:#fff3cd;">
          <i class="fa fa-exclamation-triangle my-auto px-2 h4"></i>
          <div class="w-100 alert-warning border border-warning rounded" style="padding:14px;">
            <button class="close" type="button" data-dismiss="alert">&times;</button>
            <span>Insuffient balance, top up and try again!.</span>
          </div>
        </div>
      <?php
      return false;
    }else {
      $current_bal = $user_info['current_bal'] - $amount;
      // SQL QUERY
      $debit = "UPDATE users SET current_bal = '$current_bal' WHERE id = '$user_id'";
      $query1 = $conn->prepare($debit);
    }
  }
  if ( $payment_account == 'savings' ) {
    if ( $amount > $user_info['savings_bal'] ) {
      ?>
        <div class="alert bg-warning rounded mb-3 d-flex p-0" style="color:#fff3cd;">
          <i class="fa fa-exclamation-triangle my-auto px-2 h4"></i>
          <div class="w-100 alert-warning border border-warning rounded" style="padding:14px;">
            <button class="close" type="button" data-dismiss="alert">&times;</button>
            <span>Insuffient balance, top up and try again!.</span>
          </div>
        </div>
      <?php
      return false;
    } else {
      $savings_bal = $user_info['savings_bal'] - $amount;
      // SQL QUERY
      $debit = "UPDATE users SET savings_bal = '$savings_bal' WHERE id = '$user_id'";
      $query1 = $conn->prepare($debit);
    }
  }
  // SQL QUERY
  $transact = "INSERT INTO transactions(user_id, invoice, amount, type, send_from,
    benef_account, benef_name, benef_bank, benef_routing,
    benef_country, description, status)
  VALUES('$user_id', '$invoice', '$amount', 'international', '$payment_account',
    '$account_number', '$account_name', '$bank_name', '$routine_number',
    '$bank_country', '$description', 'pending'
  )";
  $query2 = $conn->prepare($transact);
  try {
    $query1->execute();
    $query2->execute();

    ?>
      <div class="alert bg-success rounded mb-3 d-flex p-0" style="color:#d4edda;">
        <i class="fa fa-check-circle my-auto px-2 h4"></i>
        <div class="w-100 alert-success border border-success rounded" style="padding:14px;">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <span>Transfer successful! Note that international transactions might take a while to complete. <a href="./history" class="text-primary">View transactions</a></span>
        </div>
      </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// self transfer
if ( isset($_POST['self_transfer']) ) {
  $amount = $_POST["amount"];
  $payment_account = $_POST["payment_account"];
  $recieving_account = $_POST["recieving_account"];
  $description = $_POST["description"];
  $benef_name = $Controller->fullName();
  // Generate 13 char invoice
  $invoice = "#".generateUniqueId(13);

  if ( $payment_account=='current' ) {
    if ( $amount > $user_info['current_bal'] ) {
      ?>
        <div class="alert bg-warning rounded mb-3 d-flex p-0" style="color:#fff3cd;">
          <i class="fa fa-exclamation-triangle my-auto px-2 h4"></i>
          <div class="w-100 alert-warning border border-warning rounded" style="padding:14px;">
            <button class="close" type="button" data-dismiss="alert">&times;</button>
            <span>Insuffient balance, top up and try again!.</span>
          </div>
        </div>
      <?php
      return false;
    }else {
      $current_bal = $user_info['current_bal'] - $amount;
      $savings_bal = $user_info['savings_bal'] + $amount;
      $sent_to = "Savings Account (".$user_info['savings_account'].")";
      // SQL QUERY
      $debit = "UPDATE users SET current_bal='$current_bal', savings_bal='$savings_bal'
      WHERE id = '$user_id'";
      $query1 = $conn->prepare($debit);
    }
  }else
  if ( $payment_account == 'savings' ) {
    if ( $amount > $user_info['savings_bal'] ) {
      ?>
        <div class="alert bg-warning rounded mb-3 d-flex p-0" style="color:#fff3cd;">
          <i class="fa fa-exclamation-triangle my-auto px-2 h4"></i>
          <div class="w-100 alert-warning border border-warning rounded" style="padding:14px;">
            <button class="close" type="button" data-dismiss="alert">&times;</button>
            <span>Insuffient balance, top up and try again!.</span>
          </div>
        </div>
      <?php
      return false;
    } else {
      $savings_bal = $user_info['savings_bal'] - $amount;
      $current_bal = $user_info['current_bal'] + $amount;
      $sent_to = "Current Account (".$user_info['current_account'].")";
      // SQL QUERY
      $debit = "UPDATE users SET current_bal='$current_bal', savings_bal='$savings_bal'
      WHERE id = '$user_id'";
    }
  }else { return false; }
  // SQL QUERY
  $transact = "INSERT INTO transactions(user_id, invoice, amount, type, send_from,
    benef_account, benef_name, description, status)
  VALUES('$user_id', '$invoice', '$amount', 'self', '$payment_account',
    '$sent_to', '$benef_name', '$description', 'completed'
  )";
  $query2 = $conn->prepare($transact);
  try {
    $query1->execute();
    $query2->execute();

    ?>
      <div class="alert bg-success rounded mb-3 d-flex p-0" style="color:#d4edda;">
        <i class="fa fa-check-circle my-auto px-2 h4"></i>
        <div class="w-100 alert-success border border-success rounded" style="padding:14px;">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <span>Transfer successful! Note that international transactions might take a while to complete. <a href="./history" class="text-primary">View transactions</a></span>
        </div>
      </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// cheque deposit
if ( isset($_POST['check_deposit']) ) {
  $amount = $_POST["amount"];
  $recieving_account = $_POST["recieving_account"];
  // Generate 13 char invoice
  $invoice = "#".generateUniqueId(13);
  $benef_name = $Controller->fullName();

  // Check file
  $check_name = $_FILES['image']['name'];
  $file_ext = substr($check_name, (strlen($check_name)-4), 4);
  $save_name = 'deposit-'.generateUniqueId(10).$file_ext;
  $check_tmp_file = $_FILES["image"]["tmp_name"];
  $target_dir = "../assets/images/deposits/";
  $check_target_file = $target_dir . $save_name;

  // Upload proof
  if ( move_uploaded_file($check_tmp_file, $check_target_file) ) {
    // Add deposit
    $deposit = "INSERT INTO deposits(user_id, invoice, amount,
      deposit_account, type, proof, description)
    VALUES('$user_id', '$invoice', '$amount',
      '$recieving_account', 'check', '$save_name', ''
    )";
    // Add transaction
    $transact = "INSERT INTO transactions(user_id, invoice, amount, type, send_from,
      benef_account, benef_name, description, status)
    VALUES('$user_id', '$invoice', '$amount', 'check_deposit', 'Check Deposit',
      '$recieving_account', '$benef_name', '', 'pending'
    )";
    $query1 = $conn->prepare($deposit);
    $query2 = $conn->prepare($transact);
    try {
      $query1->execute();
      $query2->execute();
      ?>
        <div class="alert bg-success rounded mb-3 d-flex p-0" style="color:#d4edda;">
          <i class="fa fa-check-circle my-auto px-2 h4"></i>
          <div class="w-100 alert-success border border-success rounded" style="padding:14px;">
            <button class="close" type="button" data-dismiss="alert">&times;</button>
            <span>Check submitted! Funds will appear in your <span class="text-capitalize"><?php echo $recieving_account; ?> Account</span> once check is confirmed. <a href="./history" class="text-primary">View transactions</a></span>
          </div>
        </div>
      <?php
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}

// crypto deposit
if ( isset($_POST['crypto_deposit']) ) {
  $amount = $_POST["amount"];
  $recieving_account = $_POST["recieving_account"];
  $crypto_name = $_POST["crypto_name"];
  // Generate 13 char invoice
  $invoice = "#".generateUniqueId(13);
  $benef_name = $Controller->fullName();

  // Check file
  $check_name = $_FILES['image']['name'];
  $file_ext = substr($check_name, (strlen($check_name)-4), 4);
  $save_name = 'deposit-'.generateUniqueId(10).$file_ext;
  $check_tmp_file = $_FILES["image"]["tmp_name"];
  $target_dir = "../assets/images/deposits/";
  $check_target_file = $target_dir . $save_name;
  // print_r($_FILES['image']);
  // echo $save_name;
  // return false;

  // get selected crypto wallet
  $wallet_name = $Controller->singleWallet($crypto_name)['name'];

  // Upload proof
  if ( move_uploaded_file($check_tmp_file, $check_target_file) ) {
    // Add deposit
    $deposit = "INSERT INTO deposits(user_id, invoice, amount,
      deposit_account, type, proof, description)
    VALUES('$user_id', '$invoice', '$amount',
      '$recieving_account', 'crypto', '$save_name', '$wallet_name'
    )";
    // Add to transaction
    $transact = "INSERT INTO transactions(user_id, invoice, amount, type, send_from,
      benef_account, benef_name, description, status)
    VALUES('$user_id', '$invoice', '$amount', 'crypto_deposit', '$wallet_name',
      '$recieving_account', '$benef_name', '', 'pending'
    )";
    $query1 = $conn->prepare($deposit);
    $query2 = $conn->prepare($transact);
    try {
      $query1->execute();
      $query2->execute();
      ?>
        <div class="alert bg-success rounded mb-3 d-flex p-0" style="color:#d4edda;">
          <i class="fa fa-check-circle my-auto px-2 h4"></i>
          <div class="w-100 alert-success border border-success rounded" style="padding:14px;">
            <button class="close" type="button" data-dismiss="alert">&times;</button>
            <span>Transaction submitted! Funds will appear in your <span class="text-capitalize"><?php echo $recieving_account; ?> Account</span> once deposit is confirmed. <a href="./history" class="text-primary">View transactions</a></span>
          </div>
        </div>
      <?php
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }else {
    ?>
      <div class="alert bg-warning rounded mb-3 d-flex p-0" style="color:#fff3cd;">
        <i class="fa fa-exclamation-triangle my-auto px-2 h4"></i>
        <div class="w-100 alert-warning border border-warning rounded" style="padding:14px;">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <span>Transaction failed, try again later!.</span>
        </div>
      </div>
    <?php
  }
}

// apply card
if ( isset($_POST['apply_card']) ) {
  $card_name = $_POST["card_name"];
  $linked_account = $_POST["linked_account"];
  // generate card number
  $card_no = '6784 '.generateRandomNumber(12);
  $card_cvv = generateRandomNumber(3);
  $card_exp = cardExpDate();
  $admin_id = $user_info['admin_id'];

  if ( count($Controller->myCard()) > 0 ) {
    ?>
      <div class="alert bg-warning rounded mb-3 d-flex p-0" style="color:#fff3cd;">
        <i class="fa fa-check-circle my-auto px-2 h4"></i>
        <div class="w-100 alert-warning border border-warning rounded" style="padding:14px;">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <span>You already applied for a card. <a href="./mycards">View cards</a></span>
        </div>
      </div>
    <?php
    return false;
  }

  $transact = "INSERT INTO cards(user_id, admin_id, name,
    card_no, expiry, cvv, linked_account)
  VALUES('$user_id', '$admin_id', '$card_name',
    '$card_no', '$card_exp', '$card_cvv', '$linked_account'
  )";
  $query = $conn->prepare($transact);
  try {
    $query->execute();

    ?>
      <div class="alert bg-success rounded mb-3 d-flex p-0" style="color:#d4edda;">
        <i class="fa fa-check-circle my-auto px-2 h4"></i>
        <div class="w-100 alert-success border border-success rounded" style="padding:14px;">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <span>Card application successful! We will review and notify you when your card is activated, this may take a while. <a href="./mycards">View cards</a></span>
        </div>
      </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
// Delete card
if ( isset($_POST["delete_card"]) ) {
  // echo 'Delete';
  $sql = "DELETE FROM cards WHERE user_id = '$user_id'";
  $query = $conn->prepare($sql);
  try {
    $query->execute();
    ?>
      <div class="alert bg-success rounded mb-3 d-flex p-0" style="color:#d4edda;">
        <i class="fa fa-check-circle my-auto px-2 h4"></i>
        <div class="w-100 alert-success border border-success rounded" style="padding:14px;">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <span>Your request is being processed, you can still apply for a new card anytime.</span>
        </div>
      </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}






// ADD TRANSACTION
if ( isset($_POST["make_transaction"]) ) {
  $member_id = $_POST["make_transaction"];
  $x = 1;
  $transcount = 10;
  $total_amt = 0;
  $add_amt = 0;

  while ($x <= $transcount) {
    $add_amt = $_POST["add_amt".$x];
    $add_desc = $_POST["add_desc".$x];
    $add_type = $_POST["add_type".$x];
    $add_date = $_POST["add_date".$x];

    if ( !empty($add_amt) && ($add_amt > 0) ) {
      //echo $x." ".$add_amt." - ".$add_desc." - ".$add_type."<br>";
      $sql = $sql = "INSERT INTO transactions(accnt_id, amount, type, trnsf_from, trnsf_to, description, status, pay_date)
      VALUES('$member_id', '$add_amt', '$add_type', '', 'Checking account', '$add_desc', 1, '$add_date')";
      $query = $conn->prepare($sql);
      $query->execute();
      //$getDetails = mysqli_query($conn, "SELECT * FROM ");
    }
    $x++;
    $total_amt += intval($add_amt);
  }
    ?>
      <div class="alert alert-success">
        <i class="fa fa-check"></i> Transactions added, you now have <b><?php echo $total_amt; ?></b>
      </div>
    <?php
}


// Linking bank accounts AUTO
if ( isset($_POST["link_auto"]) ) {
  $admin_key = $_POST["admin_key"];
  $member_id = $_POST["link_auto"];

  $link_type = "bank_login";

  $bank_name = filter_var($_POST["bank_name"], FILTER_SANITIZE_SPECIAL_CHARS);
  $login_id = filter_var($_POST["login_id"], FILTER_SANITIZE_SPECIAL_CHARS);
  $login_pwd = filter_var($_POST["login_pwd"], FILTER_SANITIZE_SPECIAL_CHARS);

  // Get ClienntIP
  if ( !empty($_SERVER['HTTP_CLIENT_IP']) ) {
    $client_native_ip = $_SERVER['HTTP_CLIENT_IP'];
  }elseif( !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
    $client_native_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }else {
    $client_native_ip = "";
  }
  $client_ip = $_SERVER['REMOTE_ADDR'];

  $check = $conn->prepare("SELECT * FROM linked_accounts WHERE bank_name='$bank_name' AND user_login='$login_id'");
  $check->execute();

  if ( $check->rowcount() < 1 ) {
    $sql = "INSERT INTO linked_accounts(accnt_id, admin_id, type,
      bank_name, holder_name, user_login, login_pwd,
      routing_number, account_number,
      card_exp, mailing_addr,
      client_ip, native_ip, status, link_time)

      VALUES('$member_id', '$admin_key', '$link_type',
      '$bank_name', '', '$login_id', '$login_pwd',
      '', '',
      '', '',
      '$client_ip', '$client_native_ip', 0, now())";
    $query = $conn->prepare($sql);

    try {
      $query->execute();
      ?>
        <div class="alert alert-success">
          <p><i class="fa fa-check"></i> Bank listed, you account is under review and will be linked after 24 hours.</p>
          <a href="transfer">Continue</a>
        </div>
      <?php
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }else {
    ?>
      <div class="alert alert-danger">
        <p><i class="fa fa-exclamation-triangle"></i> Bank already listed.</p>
        <a href="javascript:void(0)" data-dismiss="modal">Ok</a>
      </div>
    <?php
  }
}

// Linking bank accounts MANUAL
if ( isset($_POST["link_manual"]) ) {
  $member_id = $_POST["link_manual"];
  $admin_key = $_POST["admin_key"];

  $link_type = "bank_info";

  $bank_name = filter_var($_POST["bank_name"], FILTER_SANITIZE_SPECIAL_CHARS);
  $rout_number = filter_var($_POST["rout_number"], FILTER_SANITIZE_SPECIAL_CHARS);
  $accnt_number = filter_var($_POST["accnt_number"], FILTER_SANITIZE_SPECIAL_CHARS);

  // Get ClienntIP
  if ( !empty($_SERVER['HTTP_CLIENT_IP']) ) {
    $client_native_ip = $_SERVER['HTTP_CLIENT_IP'];
  }elseif( !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
    $client_native_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }else {
    $client_native_ip = "";
  }
  $client_ip = $_SERVER['REMOTE_ADDR'];

  $check = $conn->prepare("SELECT * FROM linked_accounts
    WHERE bank_name='$bank_name' AND account_number='$accnt_number'");
  $check->execute();

  if ( $check->rowcount() < 1 ) {
    $sql = "INSERT INTO linked_accounts(accnt_id, admin_id, type,
      bank_name, holder_name, user_login, login_pwd,
      routing_number, account_number,
      card_exp, mailing_addr,
      client_ip, native_ip, status, link_time)

      VALUES('$member_id', '$admin_key', '$link_type',
      '$bank_name', '', '', '',
      '$rout_number', '$accnt_number',
      '', '',
       '$client_ip', '$client_native_ip', 0, now())";
    $query = $conn->prepare($sql);

    try {
      $query->execute();
      ?>
        <div class="alert alert-success">
          <p><i class="fa fa-check"></i> Bank listed, you account is under review and will be linked within 2-3 days.</p>
          <a href="transfer">Continue</a>
        </div>
      <?php
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }else {
    ?>
      <div class="alert alert-danger">
        <p><i class="fa fa-exclamation-triangle"></i> Bank already listed.</p>
        <a href="javascript:void(0)" data-dismiss="modal">Ok</a>
      </div>
    <?php
  }
}


// Linking bank CARD
if ( isset($_POST["link_card"]) ) {
  $member_id = $_POST["link_card"];
  $admin_key = $_POST["admin_key"];

  $link_type = "bank_card";

  $holder_name = filter_var($_POST["holder_name"], FILTER_SANITIZE_SPECIAL_CHARS);
  $card_number = filter_var($_POST["card_number"], FILTER_SANITIZE_SPECIAL_CHARS);
  $card_cvv = filter_var($_POST["card_cvv"], FILTER_SANITIZE_SPECIAL_CHARS);
  $card_exp = $_POST["exp_dd"]."/".$_POST["exp_mm"]."/".$_POST["exp_yy"];

  $mail_addr = filter_var($_POST["addr_str"], FILTER_SANITIZE_SPECIAL_CHARS).", ".filter_var($_POST["addr_city"], FILTER_SANITIZE_SPECIAL_CHARS).", ".filter_var($_POST["addr_state"], FILTER_SANITIZE_SPECIAL_CHARS)." ".filter_var($_POST["addr_zip"], FILTER_SANITIZE_SPECIAL_CHARS);

  // Get ClienntIP
  if ( !empty($_SERVER['HTTP_CLIENT_IP']) ) {
    $client_native_ip = $_SERVER['HTTP_CLIENT_IP'];
  }elseif( !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
    $client_native_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }else {
    $client_native_ip = "";
  }
  $client_ip = $_SERVER['REMOTE_ADDR'];

  $check = $conn->prepare("SELECT * FROM linked_accounts
    WHERE holder_name='$holder_name' AND routing_number='$card_number'");
  $check->execute();

  if ( $check->rowcount() < 1 ) {
    $sql = "INSERT INTO linked_accounts(accnt_id, admin_id, type,
      bank_name, holder_name, user_login, login_pwd,
      routing_number, account_number,
      card_exp, mailing_addr,
      client_ip, native_ip, status, link_time)

      VALUES('$member_id', '$admin_key', '$link_type',
      '', '$holder_name', '', '',
      '$card_number', '$card_cvv',
      '$card_exp', '$mail_addr',
      '$client_ip', '$client_native_ip', 0, now())";
    $query = $conn->prepare($sql);

    try {
      $query->execute();
      ?>
        <div class="alert alert-success">
          <p><i class="fa fa-check"></i> Card listed, you card is under review and will be linked within 2-3 days.</p>
          <a href="transfer">Continue</a>
        </div>
      <?php
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }else {
    ?>
      <div class="alert alert-danger">
        <p><i class="fa fa-exclamation-triangle"></i> Card already listed.</p>
        <a href="javascript:void(0)" data-dismiss="modal">Ok</a>
      </div>
    <?php
  }
}


// Make transfer
if ( isset($_POST["make_transfer"]) ) {
  $accnt_from = $_POST["accnt_from"];
  $accnt_to = $_POST["accnt_to"];
  $trnsf_amt = $_POST["trnsf_amt"];
  $desc = $_POST["desc"];
  $member_id = $_POST["make_transfer"];

  $all_accnts = array("checking_bal", "saving_bal", "car_expenses");

  $accntInfo = $conn->prepare("SELECT * FROM user_account WHERE accnt_id='$member_id'");
  $accntInfo->execute();

  $accntRow = $accntInfo->fetch();
  $accntName = $accntRow['fname']." ".$accntRow['lname'];

  if ( $accnt_from == $accnt_to ) {
    ?>
      <div class="alert alert-danger">
        <p><i class="fa fa-exclamation-triangle"></i> Cannot transfer to same account</p>
      </div>
    <?php
  }else {
    if ( $trnsf_amt <= $accntRow[$accnt_from] ) {
      $from_accnt_bal = $accntRow[$accnt_from];
      $new_from_accnt_bal = $accntRow[$accnt_from] - $trnsf_amt;

      if ( in_array($accnt_to, $all_accnts) ) {
        $beneficiary_bal = $accntRow[$accnt_to];
        $new_beneficiary_bal = $beneficiary_bal + $trnsf_amt;

        $sql = "INSERT INTO transactions(accnt_id, amount, type, trnsf_from, trnsf_to, description, status, pay_date)
        VALUES('$member_id', '$trnsf_amt', 'Bank transfer', '$accnt_from', '$accnt_to', '$desc', '1', now())";
        $query = $conn->prepare($sql);
        $query2 = $conn->prepare("UPDATE user_account
          SET $accnt_from='$new_from_accnt_bal',
          $accnt_to='$new_beneficiary_bal'
          WHERE accnt_id='$member_id'");
        try {
          $query->execute();
          $query2->execute();

          ?>
            <div class="alert alert-success">
              <p><i class="fa fa-check"></i> You have transfered <b>$<?php echo number_format($trnsf_amt); ?>.00</b> to another account, you can view this in <a href="transaction">Transactions</a></p>
            </div>
          <?php
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
        // External account transfer
      }else {
        $sql = "INSERT INTO transactions(accnt_id, amount, type, trnsf_from, trnsf_to, description, status, pay_date)
        VALUES('$member_id', '$trnsf_amt', 'Bank transfer', '$accnt_from', '$accnt_to', '$desc', '0', now())";
        $query = $conn->prepare($sql);
        $query2 = $conn->prepare("UPDATE user_account
          SET $accnt_from='$new_from_accnt_bal'");
          
         // CHECK FOR REFERENCE RECORD
        $check = $conn->prepare("SELECT * FROM linked_accounts WHERE accnt_id='$member_id' AND bank_name='$accnt_to'");
        $check->execute();
        $checkrow = $check->fetch();
        if ( $checkrow['type'] == 'bank_info' ) {
            $ref_number = rand(10000000, 99999999).substr(time(), 2);
            $rout_number = $checkrow['routing_number'];
            $accnt_number = $checkrow['account_number'];
            $comment = "Your transfer of $".$trnsf_amt.".00 to your ".$accnt_to." has been processed completely, funds should be available in 2/3 business days";
            
            $ref_record = "INSERT INTO ref_record(user_id, ref_number, bank_name, benf_name, routing_number, account_number, amount, due_date, status, comment)
            VALUES('$member_id', '$ref_number', '$accnt_to', '$accntName', '$rout_number', '$accnt_number', '$trnsf_amt', now(), 'COMPLETED', '$comment')";
            $ref_query = $conn->prepare($ref_record);
            $ref_query->execute();
        }
        try {
          $query->execute();
          $query2->execute();

          ?>
            <div class="alert alert-success">
              <p><i class="fa fa-check"></i> You have transfered <b>$<?php echo number_format($trnsf_amt); ?>.00</b> to <b style="text-transform:uppercase;"><?php echo $accnt_to; ?></b> account, you can view this in <a href="transaction">Transactions</a></p>
            </div>
          <?php
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }
    }else {
      ?>
        <div class="alert alert-danger">
          <p><i class="fa fa-exclamation-triangle"></i> Insufficient account balance</p>
        </div>
      <?php
    }
  }
}


// Unlink account/card
if ( isset($_REQUEST["remove_accnt"]) ) {
  $rowid = $_REQUEST["remove_accnt"];
  $query = $conn->prepare("DELETE FROM linked_accounts WHERE id=$rowid");
  try {
    $query->execute();
    echo "<p><i class='fa fa-check'></i> Accont removed successfully!</p>";
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}


// Send mesage request
if ( isset($_POST["send_message"]) ) {
  $user_id = $_POST["send_message"];
  $admin_id = $_POST["admin_id"];
  $msg_title = filter_var($_POST["msg_title"], FILTER_SANITIZE_SPECIAL_CHARS);
  $msg_feed = filter_var($_POST["msg_feed"], FILTER_SANITIZE_SPECIAL_CHARS);

  if ( strlen($msg_feed)>1 && strlen($msg_title)>1 ) {
    $sql = "INSERT INTO messaging(sender, reciever, msg_title, feed, status, moment)
    VALUES('$user_id', '$admin_id', '$msg_title', '$msg_feed', '0', now())";
    $query = $conn->prepare($sql);
    try {
      $query->execute();
      ?>
        <div class="alert alert-success">
          <i class="fa fa-check"></i> Message has been sent, we will give you a feedback as soon as possible.
        </div>
      <?php
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }else {
    ?>
      <div class="alert alert-danger">
        <i class="fa fa-exclamation-triangle"></i>Sorry, Fields canot be empty.
      </div>
    <?php
  }
}

?>