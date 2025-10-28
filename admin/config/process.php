<?php
session_start();
require "../../config/Controller.php";
$Controller = new Controller;
$conn = $Controller->conn;


// GENERATE UNIQUE ID
function generateUniqueId($length = 10) {
  // Define the characters to be used in the ID
  $characters = time().'ABCDEFGHJKLMNPQRSTUVWXYZ';
  // Shuffle the characters
  $shuffledCharacters = str_shuffle($characters);
  // Return a substring of the shuffled characters of the desired length
  return substr($shuffledCharacters, 0, $length);
}
// GENERATE ACCOUNT NUMBERS
function generateRandomNumber($length = 10) {
  // Define the characters to be used in the ID
  $characters = time();
  // Shuffle the characters
  $shuffledCharacters = str_shuffle($characters);
  // Return a substring of the shuffled characters of the desired length
  return substr($shuffledCharacters, 0, $length);
}

// SIGN IN
if ( isset($_POST["sign_in"]) ) {
  $usrname = $_POST["username"];
  $paswrd = $_POST["password"];

  $sql = "SELECT * FROM auth_users WHERE username = '$usrname'";
  $query = $conn->prepare($sql);
  try {
    $query->execute();
    $row = $query->fetch();
    if ( $query->rowcount() < 1 ) {
      ?>
      <div class="alert alert-danger">
        <i class="close" data-dismiss="alert">&times;</i>
        <span><i class="fa fa-exclamation-triangle"></i> Incorrect Username, check and try again.</span>
      </div>
      <?php
    }else {
      if ( password_verify($paswrd, $row["password"]) ) {
        if ( $row['status'] == 1 ) {
          $_SESSION["admin_login_id"] = $row["admin_id"];
          $_SESSION["admin_status"] = $row["status"];
          echo "success";
        }elseif ( $row['status'] == 2 ) {
          ?>
          <div class="alert alert-danger">
            <i class="close" data-dismiss="alert">&times;</i>
            <i class="fa fa-exclamation-triangle"></i> Account locked, contact admin for support.
          </div>
          <?php
        }elseif ( $row['status'] == 0 ) {
          ?>
          <div class="alert alert-danger">
            <i class="close" data-dismiss="alert">&times;</i>
            <i class="fa fa-exclamation-triangle"></i> Account not confirmed, contact admin for support.
          </div>
          <?php
        }
      }else {
	      ?>
	      <div class="alert alert-danger">
          <i class="close" data-dismiss="alert">&times;</i>
	        <i class="fa fa-exclamation-triangle"></i> Incorrect Password, check and try again.
	      </div>
	      <?php
      }
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// ADD NEW USER ACCOUNT
if ( isset($_POST["add_account"]) ) {
  // ADMIN ID
  $admin_id = $_SESSION["admin_login_id"];
  // USER DETAILS
  $firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $phone = filter_var($_POST["phone"], FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS);
  $confirm_password = filter_var($_POST["confirm_password"], FILTER_SANITIZE_SPECIAL_CHARS);
  $current_balance = filter_var($_POST["current_balance"], FILTER_SANITIZE_SPECIAL_CHARS);
  $savings_balance = filter_var($_POST["savings_balance"], FILTER_SANITIZE_SPECIAL_CHARS);
  // GENERATE 4 RANDOM NUMBERS WITH LAST SIX OF TIME FUNCTION
  // $generate_id = generateUniqueId(10);
  // PASSWOD HASHING
  $hashpwd = password_hash($password, PASSWORD_DEFAULT);
  // Generate Account Number
  $current_account = substr(time(), strlen(time()) - 6).rand(1000,9999);
  $savings_account = substr(time(), strlen(time()) - 6).rand(1109,9988);

  // echo $generate_id;
  // return false;

  $checkinfo = $conn->prepare("SELECT email FROM users WHERE email='$email'");
  $checkinfo->execute();
  //
  if ( strlen($password) < 6 ) {
    ?>
      <div class="alert-danger alert">
        <i class="close" data-dismiss="alert">&times;</i>
        <span><i class="fa fa-exclamation-triangle"></i> Passwords should be at least 6 characters.</span>
      </div>
    <?php
  }elseif ( $password !== $confirm_password ) {
    ?>
      <div class="alert-danger alert">
        <i class="close" data-dismiss="alert">&times;</i>
        <span><i class="fa fa-exclamation-triangle"></i> Passwords do not match.</span>
      </div>
    <?php
  }elseif ( $checkinfo->rowcount() > 0 ) {
    ?>
      <div class="alert-danger alert">
        <i class="close" data-dismiss="alert">&times;</i>
        <span><i class="fa fa-exclamation-triangle"></i> Username or email already exists, try a new one.</span>
      </div>
    <?php
  }else {
    // validate password
    $sql = "INSERT INTO users(admin_id, firstname, lastname, email, phone,
        dob, gender,
        current_account, savings_account, savings_bal, current_bal,
        street_address, city, state, zipcode, password, alt_password)
        VALUES('$admin_id', '$firstname', '$lastname', '$email', '$phone', '', '',
        '$current_account', '$savings_account', '$savings_balance', '$current_balance',
        '', '', '', '', '$hashpwd', '$password')";
    $query = $conn->prepare($sql);
    try {
      $query->execute();
      ?>
      <div class="alert-success alert">
        <i class="close" data-dismiss="alert">&times;</i>
        <span><i class="fa fa-exclamation-triangle"></i> New user successfully created.</span>
        <a href="users">View users</a>
      </div>
    <?php
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
// delete user
if ( isset($_GET['delete_user']) ) {
  $wallet_id = $_GET['delete_user'];
  $sql = "DELETE FROM users  WHERE id = '$wallet_id'";
  $query = $conn->prepare($sql);
  try {
    $query->execute();
    echo 'success';
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// update user status
if ( isset($_GET['activate_user']) ) {
  $user_id = $_GET['activate_user'];
  $status = $_GET['status'];
  // echo $user_id;
  $sql = "UPDATE users
    SET status = '$status'
  WHERE id = '$user_id'";

  $query = $conn->prepare($sql);
  try {
    $query->execute();
    echo "success";
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
// Modify transaction status
if ( isset($_GET['transact_user']) ) {
  $user_id = $_GET['transact_user'];
  $status = $_GET['status'];
  $new_status = null;
  if ( $status == 'true' ) {
    $new_status = 'false';
  }else {
    $new_status = 'true';
  }
  // echo $user_id;
  $sql = "UPDATE users
    SET transactions = '$new_status'
  WHERE id = '$user_id'";

  $query = $conn->prepare($sql);
  try {
    $query->execute();
    echo "success";
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
// update user profile
if ( isset($_POST['update_profile']) ) {
  $user_id = $_POST['update_profile'];
  $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_SPECIAL_CHARS);
  $lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $phone = filter_var($_POST["phone"], FILTER_SANITIZE_SPECIAL_CHARS);
  // $gender = filter_var($_POST["gender"], FILTER_SANITIZE_SPECIAL_CHARS);
  $dob = filter_var($_POST["dob"], FILTER_SANITIZE_SPECIAL_CHARS);
  $str_address = filter_var($_POST["str_address"], FILTER_SANITIZE_SPECIAL_CHARS);
  $city = filter_var($_POST["city"], FILTER_SANITIZE_SPECIAL_CHARS);
  $state = filter_var($_POST["state"], FILTER_SANITIZE_SPECIAL_CHARS);
  $zipcode = filter_var($_POST["zipcode"], FILTER_SANITIZE_SPECIAL_CHARS);
  $current_bal = filter_var($_POST["current_bal"], FILTER_SANITIZE_SPECIAL_CHARS);
  $savings_bal = filter_var($_POST["savings_bal"], FILTER_SANITIZE_SPECIAL_CHARS);

  // return false;
  $sql = "UPDATE users
  SET firstname = '$firstname',
  lastname = '$lastname',
  email = '$email',
  phone = '$phone',
  dob = '$dob',
  street_address = '$str_address',
  city = '$city',
  state = '$state',
  zipcode = '$zipcode',
  current_bal = '$current_bal',
  savings_bal = '$savings_bal'
  WHERE id = '$user_id'";

  $query = $conn->prepare($sql);
  try {
    $query->execute();
    // echo "success";
    ?>
    <div class="alert alert-success">
      <i class="close" data-dismiss="alert">&times;</i>
      <i class="fa fa-check-circle"></i> Account updated successfully.
    </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
// Credit/Debit User
if ( isset($_POST['make_payment']) ) {
  $user_id = $_POST['user_id'];
  $amount = filter_var($_POST['amount'], FILTER_SANITIZE_SPECIAL_CHARS);
  $payment_account = filter_var($_POST["payment_account"], FILTER_SANITIZE_SPECIAL_CHARS);
  $description = filter_var($_POST["description"], FILTER_SANITIZE_SPECIAL_CHARS);
  $payment_type = filter_var($_POST["payment_type"], FILTER_SANITIZE_SPECIAL_CHARS);
  $created_at = filter_var($_POST["created_at"], FILTER_SANITIZE_SPECIAL_CHARS);
  // get user info
  $getUser = $conn->prepare("SELECT * FROM users WHERE id = '$user_id'");
  $getUser->execute();
  $userRow = $getUser->fetch();
  $current_bal = $userRow['current_bal'];
  $savings_bal = $userRow['savings_bal'];
  // Generate 13 char invoice
  $invoice = "#".strtolower(generateUniqueId(13));
  $benef_name = $userRow['firstname'].' '.$userRow['lastname'];

  if ( $payment_account=='current' ) {
    if ( $payment_type == 'credit' ) {
      $current_bal = $userRow['current_bal'] + $amount;
    }else $current_bal = $userRow['current_bal'] - $amount;
    // SQL QUERY
    $debit = "UPDATE users SET current_bal = '$current_bal' WHERE id = '$user_id'";
    $query1 = $conn->prepare($debit);
  }
  if ( $payment_account == 'savings' ) {
    if ( $payment_type == 'credit' ) {
      $savings_bal = $userRow['savings_bal'] + $amount;
    }else $savings_bal = $userRow['savings_bal'] - $amount;
    // SQL QUERY
    $debit = "UPDATE users SET savings_bal = '$savings_bal' WHERE id = '$user_id'";
    $query1 = $conn->prepare($debit);
  }

  // Update user balance
  $sql = "UPDATE users
    SET current_bal = '$current_bal',
    savings_bal = '$savings_bal'
  WHERE id = '$user_id'";
  $query2 = $conn->prepare($sql);

  // Add transaction
  $transact = "INSERT INTO transactions(user_id, invoice, amount, type, send_from,
    benef_account, benef_name, description, status, send_date)
  VALUES('$user_id', '$invoice', '$amount', '$payment_type', '$payment_account',
    '$payment_account', '$benef_name', '$description', 'completed', '$created_at'
  )";
  $query3 = $conn->prepare($transact);

  try {
    $query1->execute();
    $query2->execute();
    $query3->execute();
    ?>
    <div class="alert alert-success">
      <i class="close" data-dismiss="alert">&times;</i>
      <i class="fa fa-check-circle"></i> Transaction completed successfully.
    </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// create transaction
if ( isset($_POST['create_transaction']) ) {
  $user_id = $_POST['user_id'];
  $amount = filter_var($_POST['amount'], FILTER_SANITIZE_SPECIAL_CHARS);
  $payment_account = filter_var($_POST["payment_account"], FILTER_SANITIZE_SPECIAL_CHARS);
  $account_type = filter_var($_POST["account_type"], FILTER_SANITIZE_SPECIAL_CHARS);
  $bank_name = filter_var($_POST["bank_name"], FILTER_SANITIZE_SPECIAL_CHARS);
  $account_name = filter_var($_POST["account_name"], FILTER_SANITIZE_SPECIAL_CHARS);
  $account_number = filter_var($_POST["account_number"], FILTER_SANITIZE_SPECIAL_CHARS);
  $bank_country = filter_var($_POST["bank_country"], FILTER_SANITIZE_SPECIAL_CHARS);
  $routine_number = filter_var($_POST["routine_number"], FILTER_SANITIZE_SPECIAL_CHARS);
  $description = filter_var($_POST["description"], FILTER_SANITIZE_SPECIAL_CHARS);
  $created_at = filter_var($_POST["created_at"], FILTER_SANITIZE_SPECIAL_CHARS);
  // get user info
  $getUser = $conn->prepare("SELECT * FROM users WHERE id = '$user_id'");
  $getUser->execute();
  $userRow = $getUser->fetch();
  // Generate 13 char invoice
  $invoice = "#".strtolower(generateUniqueId(13));
  // Set sender account
  $sending_account = $account_type.' ('.$account_number.')';

  // Add transaction
  $transact = "INSERT INTO transactions(user_id, invoice, amount, type, send_from,
    benef_account, benef_name, benef_bank,
    benef_routing, benef_country, description, status, send_date)
    VALUES('$user_id', '$invoice', '$amount', 'credit', '$sending_account',
    '$payment_account', '$account_name', '$bank_name',
    '$routine_number', '$bank_country', '$description', 'completed', '$created_at'
  )";
  $query1 = $conn->prepare($transact);

  // Add to activity
  $feed = 'You recieved $'.number_format($amount).'.00 from '.$account_name.'.';
  $add_activity = "INSERT INTO user_activity(user_id, type, feed, user_ip)
    VALUES('$user_id', 'fund', '$feed', '-')";
  $query2 = $conn->prepare($add_activity);

  try {
    $query1->execute();
    $query2->execute();
    ?>
    <div class="alert alert-success">
      <i class="close" data-dismiss="alert">&times;</i>
      <i class="fa fa-check-circle"></i> Transaction completed successfully.
    </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
// create local transaction
if ( isset($_POST['create_local_transaction']) ) {
  $user_id = $_POST['user_id'];
  $amount = filter_var($_POST['amount'], FILTER_SANITIZE_SPECIAL_CHARS);
  $payment_account = filter_var($_POST["payment_account"], FILTER_SANITIZE_SPECIAL_CHARS);
  $bank_name = filter_var($_POST["bank_name"], FILTER_SANITIZE_SPECIAL_CHARS);
  $account_name = filter_var($_POST["account_name"], FILTER_SANITIZE_SPECIAL_CHARS);
  $account_number = filter_var($_POST["account_number"], FILTER_SANITIZE_SPECIAL_CHARS);
  $description = filter_var($_POST["description"], FILTER_SANITIZE_SPECIAL_CHARS);
  $created_at = filter_var($_POST["created_at"], FILTER_SANITIZE_SPECIAL_CHARS);
  $trans_type = $_POST["trans_type"];
  // get user info
  $getUser = $conn->prepare("SELECT * FROM users WHERE id = '$user_id'");
  $getUser->execute();
  $userRow = $getUser->fetch();
  // Generate 13 char invoice
  $invoice = "#".strtolower(generateUniqueId(13));
  // Set sender account
  $sending_account = $bank_name.' ('.$account_number.')';

  // Add transaction
  $transact = "INSERT INTO transactions(user_id, invoice, amount, type, send_from,
    benef_account, benef_name, benef_bank, description, status, send_date)
    VALUES('$user_id', '$invoice', '$amount', '$trans_type', '$sending_account',
    '$payment_account', '$account_name', '$bank_name', '$description', 'completed', '$created_at'
  )";
  $query1 = $conn->prepare($transact);

  try {
    $query1->execute();
    ?>
    <div class="alert alert-success">
      <i class="close" data-dismiss="alert">&times;</i>
      <i class="fa fa-check-circle"></i> Transaction completed successfully.
    </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// Approve deposit
if ( isset($_GET['approve_deposit']) ) {
  $deposit_id = $_GET['approve_deposit'];
  $deposit_info = $Controller->singleDeposit($deposit_id);
  $amount = $deposit_info['amount'];
  $deposit_account = $deposit_info['deposit_account'];
  $invoice = $deposit_info['invoice'];
  $user_id = $deposit_info['user_id'];
  // User info
  $user_info = $Controller->singleUser($user_id);
  $new_savings_bal = $user_info['savings_bal'] + $amount;
  $new_current_bal = $user_info['current_bal'] + $amount;

  if ( $deposit_account == 'current' ) {
    $credit = "UPDATE users SET current_bal = '$new_current_bal'
    WHERE id = '$user_id'";
  }else {
    $credit = "UPDATE users SET savings_bal = '$new_savings_bal'
    WHERE id = '$user_id'";
  }

  $approve_deposit = "UPDATE deposits SET status = 'completed'
  WHERE id = '$deposit_id'";
  $approve_trans = "UPDATE transactions SET status = 'completed'
  WHERE invoice = '$invoice'";
  $query1 = $conn->prepare($credit);
  $query2 = $conn->prepare($approve_deposit);
  $query3 = $conn->prepare($approve_trans);

  try {
    $query1->execute();
    $query2->execute();
    $query3->execute();
    echo 'success';
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}


// Add wallet
if ( isset($_POST['add_wallet']) ) {
  $crypto_name = filter_var($_POST['crypto_name'], FILTER_SANITIZE_SPECIAL_CHARS);
  $wallet_address = filter_var($_POST['wallet_address'], FILTER_SANITIZE_SPECIAL_CHARS);

  $sql = "INSERT INTO crypto_wallets(admin_id, name, wallet_address)
  VALUES('$admin_id', '$crypto_name', '$wallet_address')";
  $query = $conn->prepare($sql);

  try {
    $query->execute();
    ?>
    <div class="alert alert-success">
      <i class="close" data-dismiss="alert">&times;</i>
      <i class="fa fa-check-circle"></i> Wallet added successfully.
    </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
// Update
if ( isset($_POST['update_wallet']) ) {
  $wallet_id = $_POST['update_wallet'];
  $crypto_name = filter_var($_POST['crypto_name'], FILTER_SANITIZE_SPECIAL_CHARS);
  $wallet_address = filter_var($_POST['wallet_address'], FILTER_SANITIZE_SPECIAL_CHARS);

  $sql = "UPDATE crypto_wallets
  SET name = '$crypto_name',
  wallet_address = '$wallet_address'
  WHERE id = '$wallet_id'";
  $query = $conn->prepare($sql);

  try {
    $query->execute();
    ?>
    <div class="alert alert-success">
      <i class="close" data-dismiss="alert">&times;</i>
      <i class="fa fa-check-circle"></i> Wallet updated successfully.
    </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
// delete wallet
if ( isset($_GET['delete_wallet']) ) {
  $wallet_id = $_GET['delete_wallet'];
  $sql = "DELETE FROM crypto_wallets  WHERE id = '$wallet_id'";
  $query = $conn->prepare($sql);
  try {
    $query->execute();
    echo 'success';
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}


// Cards
if ( isset($_POST['update_card']) ) {
  $card_id = $_POST['update_card'];
  $status = filter_var($_POST['status'], FILTER_SANITIZE_SPECIAL_CHARS);

  $sql = "UPDATE cards
  SET status = '$status'
  WHERE id = '$card_id'";
  $query = $conn->prepare($sql);

  try {
    $query->execute();
    echo "success";
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}






// ADD NEW ADMIN ACCOUNT
if ( isset($_POST["add_admin"]) ) {
  $nick_name = filter_var($_POST["nick_name"], FILTER_SANITIZE_SPECIAL_CHARS);
  $usrname = filter_var($_POST["usrname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $login_pwd = filter_var($_POST["login_pwd"], FILTER_SANITIZE_SPECIAL_CHARS);
  // GENERATE 4 RANDOM NUMBERS WITH LAST SIX OF TIME FUNCTION
  $generate_id = rand(1000,9999).substr(time(), strlen(time()) - 6);

  $checkinfo = $conn->prepare("SELECT usrname FROM admin_account WHERE usrname='$usrname'");
  $checkinfo->execute();
  //
  if ( $checkinfo->rowcount() > 0 ) {
    ?>
      <div class="alert-danger alert">
        <i class="fa fa-exclamation-triangle"></i> Username already exists, try a new one.
      </div>
    <?php
  }else {
    // validate password
    $sql = "INSERT INTO admin_account(admin_key, nick_name, usrname, login_pwd, status, moment)
    VALUES('$generate_id', '$nick_name', '$usrname', '$login_pwd', 1, now())";
    $query = $conn->prepare($sql);
    try {
      $query->execute();
      ?>
      <div class="alert-success alert">
        <i class="fa fa-exclamation-triangle"></i> New Sub-Admin profile has been created.
      </div>
    <?php
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}

// UPDATE PROFILE
if ( isset($_POST["update_account"]) ) {
  $user_id = $_POST["update_account"];

  $fname = filter_var($_POST["fname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $lname = filter_var($_POST["lname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $saving_bal = filter_var($_POST["saving_bal"], FILTER_SANITIZE_SPECIAL_CHARS);
  $checking_bal = filter_var($_POST["checking_bal"], FILTER_SANITIZE_SPECIAL_CHARS);
  $car_expenses = filter_var($_POST["car_expenses"], FILTER_SANITIZE_SPECIAL_CHARS);
  $username = filter_var($_POST["username"], FILTER_SANITIZE_SPECIAL_CHARS);
  $user_paswrd = filter_var($_POST["user_paswrd"], FILTER_SANITIZE_SPECIAL_CHARS);
  // PASSWOD HASHING
  $hashpwd = password_hash($user_paswrd, PASSWORD_DEFAULT);

  $sql = "UPDATE user_account
    SET fname = '$fname',
    lname = '$lname',
    saving_bal = '$saving_bal',
    checking_bal = '$checking_bal',
    car_expenses = '$car_expenses',
    login_usrname = '$username',
    login_paswrd = '$hashpwd',
    alt_paswrd = '$user_paswrd'
    WHERE id = '$user_id'";

  $query = $conn->prepare($sql);
  try {
    $query->execute();
    ?>
      <div class="alert alert-success">
        <i class="fa fa-check"></i> Details updated successfully
      </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// UPDATE PROFILE
if ( isset($_POST["update_admin"]) ) {
  $user_id = $_POST["update_admin"];

  $nick_name = filter_var($_POST["nick_name"], FILTER_SANITIZE_SPECIAL_CHARS);
  $usrname = filter_var($_POST["usrname"], FILTER_SANITIZE_SPECIAL_CHARS);
  $login_pwd = filter_var($_POST["login_pwd"], FILTER_SANITIZE_SPECIAL_CHARS);

  $sql = "UPDATE admin_account
    SET nick_name = '$nick_name',
    usrname = '$usrname',
    login_pwd = '$login_pwd'
  WHERE id = '$user_id'";

  $query = $conn->prepare($sql);
  try {
    $query->execute();
    ?>
      <div class="alert alert-success">
        <i class="fa fa-check"></i> Details updated successfully
      </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// Remove user account
if ( isset($_POST["remove_account"]) ) {
  $accnt_id = $_POST["remove_account"];

  $sql = "DELETE from user_account WHERE id='$accnt_id'";
  $query = $conn->prepare($sql);
  try {
    $query->execute();
    ?>
      <div class="alert alert-success">
        <i class="fa fa-check"></i> Account has been removed from record.
      </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// Block/Unblock user account
if ( isset($_POST["block_acount"]) ) {
  $action = $_POST["block_acount"];
  $rowid = $_POST["accnt_id"];

  if ( $action == 'Block' ) {
    $sql = "UPDATE user_account SET status=2 WHERE id='$rowid'";
    $outcome = "Blocked";
  }elseif ( $action == 'Unblock' ) {
    $sql = "UPDATE user_account SET status=1 WHERE id='$rowid'";
    $outcome = "Unblocked";
  }elseif ( $action == 'Confirm' ) {
    $sql = "UPDATE user_account SET status=1 WHERE id='$rowid'";
    $outcome = "Confirmed";
  }

  $query = $conn->prepare($sql);
  try {
    $query->execute();
    echo $outcome;
  } catch (PDOException $e) {
    echo $e->getMessage();
  }

}

// Block/Unblock admin account
if ( isset($_POST["block_admin"]) ) {
  $action = $_POST["block_admin"];
  $rowid = $_POST["admin_id"];

  if ( $action == 'Block' ) {
    $sql = "UPDATE admin_account SET status=2 WHERE id='$rowid'";
    $outcome = "Blocked";
  }elseif ( $action == 'Unblock' ) {
    $sql = "UPDATE admin_account SET status=1 WHERE id='$rowid'";
    $outcome = "Unblocked";
  }elseif ( $action == 'Confirm' ) {
    $sql = "UPDATE admin_account SET status=1 WHERE id='$rowid'";
    $outcome = "Confirmed";
  }

  $query = $conn->prepare($sql);
  try {
    $query->execute();
    echo $outcome;
  } catch (PDOException $e) {
    echo $e->getMessage();
  }

}

// Block/Unblock linked bank account
if ( isset($_POST["block_linked_account"]) ) {
  $action = $_POST["block_linked_account"];
  $rowid = $_POST["accnt_id"];
  $sql;

  if ( $action == 'Block' ) {
    $sql = "UPDATE linked_accounts SET status=2 WHERE id='$rowid'";
    $outcome = "Blocked";
  }elseif ( $action == 'Unblock' ) {
    $sql = "UPDATE linked_accounts SET status=1 WHERE id='$rowid'";
    $outcome = "Unblocked";
  }elseif ( $action == 'Confirm' ) {
    $sql = "UPDATE linked_accounts SET status=1 WHERE id='$rowid'";
    $outcome = "Approved";
  }

  $query = $conn->prepare($sql);
  try {
    $query->execute();
    echo $outcome;
  } catch (PDOException $e) {
    echo $e->getMessage();
  }

}

// Remove admin account
if ( isset($_POST["remove_admin"]) ) {
  $accnt_id = $_POST["remove_admin"];

  $sql = "DELETE from admin_account WHERE id='$accnt_id'";
  $query = $conn->prepare($sql);
  try {
    $query->execute();
    ?>
      <div class="alert alert-success">
        <i class="fa fa-check"></i> Account has been removed from record.
      </div>
    <?php
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

// send linking request
if ( isset($_POST["send_message"]) ) {
  $account_id = $_POST["send_message"];
  $msg = $_POST["msg"];
  $sendr = 'admin';

  if ( !empty($msg) ) {
    $sql = "INSERT INTO message_req(bank_id, sender, message, moment)
    VALUES('$account_id', '$sendr', '$msg', now())";
    $query = $conn->prepare($sql);
    try {
      $query->execute();
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

    $sql = "SELECT * FROM message_req WHERE bank_id='$account_id' ORDER BY id DESC";
    $query = $conn->prepare($sql);
    try {
      $query->execute();

      if ( $row = $query->fetch() ) {
        if ( $row["sender"] == "admin" ) {
          ?>
          <div style="width:100%;overflow:auto;margin:5px 0;border-radius:10px!important;">
            <div style="width:90%;float:right;padding:5px;background-color:#eee;">
              <small>You</small><br>
              <span><?php echo $row['message']; ?></span>
            </div>
          </div>
          <?php
        }
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
}

// Send message
if ( isset($_POST["send_msg"]) ) {
  $admin_key = $_POST["send_msg"];
  $member_id = $_POST["msg_to"];
  $msg_title = $_POST["msg_title"];
  $msg_body = $_POST["msg_body"];

  if ( !empty($msg_body) && !empty($msg_title) ) {
    $sql = "INSERT INTO messaging(sender, reciever, msg_title, feed, status, moment)
    VALUES('$admin_key', '$member_id', '$msg_title', '$msg_body', '0', now())";
    $query = $conn->prepare($sql);
    try {
      $query->execute();
      ?>
      <div class="alert alert-success">
        <i class="fa fa-check"></i> Success, Message has been delivered!<br>
        <a href="message#msgSent" class="maintab-toggle">View message</a>
      </div>
      <?php
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }else {
    ?>
    <div class="alert alert-danger">
      <i class="fa fa-exclamation-triangle"></i> Sorry, fields canot be empty!
    </div>
    <?php
  }
}
?>