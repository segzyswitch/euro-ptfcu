<?php
class Controller
{
  /* online server */
    // private $db_server = 'localhost';
    private $db_username = 'partner1_main';
    private $db_password = 'Primestar1$';
    private $db_name = 'partner1_euros';

  /* local server */
  private $db_server = 'localhost';
  // private $db_username = 'root';
  // private $db_password = '';
  // private $db_name = 'euro_ptfcu';
  // DB Connection
  public $conn;

  public function __construct() {
    try {
      $this->conn = @new PDO("mysql:host=$this->db_server;dbname=$this->db_name", $this->db_username, $this->db_password);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
      exit();
    }
  }

  // USERS INFO
  public function User() {
    $user_id = $_SESSION["ptcu_account_id"];
    $sql = "SELECT * FROM users WHERE id = '$user_id'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetch();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function singleUser($user_id) {
    $user_id = $_SESSION["ptcu_account_id"];
    $sql = "SELECT * FROM users WHERE id = '$user_id'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetch();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function fullName() {
    $user_info = $this->User();
    $fullname = $user_info['firstname'] . ' ' . $user_info['lastname'];
    return $fullname;
  }
  public function totalBalance() {
    $user_info = $this->User();
    $balanceSum = $user_info['savings_bal'] + $user_info['current_bal'];
    return '€'. number_format($balanceSum, 2);
  }

  // Login history
  public function userActivity() {
    $user_id = $_SESSION["ptcu_account_id"];
    $sql = "SELECT * FROM user_activity WHERE user_id = '$user_id' ORDER BY id DESC LIMIT 50";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function lastSession() {
    $last_session = $this->userActivity()[0];
    return $last_session;
  }


  // Transaction history
  public function Transactions() {
    $user_id = $_SESSION["ptcu_account_id"];
    $sql = "SELECT * FROM transactions WHERE user_id = '$user_id' ORDER BY id DESC LIMIT 50";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function singleTransaction($invoice_id) {
    $user_id = $_SESSION["ptcu_account_id"];
    $sql = "SELECT * FROM transactions WHERE id = '$invoice_id'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetch();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  
  // Cards
  public function myCard() {
    $user_id = $_SESSION["ptcu_account_id"];
    $sql = "SELECT * FROM cards WHERE user_id = '$user_id'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }


  // Pending deposits
  public function Deposits() {
    $user_id = $_SESSION["ptcu_account_id"];
    $sql = "SELECT * FROM deposits
    WHERE user_id = '$user_id'
    AND status = 'pending'
    ORDER BY id DESC";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  // Single deposit
  public function singleDeposit($deposit_id) {
    $sql = "SELECT * FROM deposits WHERE id = '$deposit_id'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetch();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }


  // Crypto wallets
  public function cryptoWallets() {
    $user_id = $_SESSION["ptcu_account_id"];
    $sql = "SELECT * FROM crypto_wallets ORDER BY id";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function singleWallet($id) {
    $sql = "SELECT * FROM crypto_wallets WHERE id = '$id'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetch();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

}
?>