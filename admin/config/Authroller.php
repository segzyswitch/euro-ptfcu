<?php
require_once "../config/Controller.php";

class Authroller extends Controller
{
  public function Admin() {
    $admin_id = $_SESSION["admin_login_id"];
    $sql = "SELECT * FROM auth_users WHERE admin_id = '$admin_id'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetch();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  // All users
  public function Users() {
    $sql = "SELECT * FROM users ORDER BY id DESC";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  // Single User
  public function singleUser($user_id) {
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

  // Pending transactions
  public function pendingTransactions() {
    $sql = "SELECT * FROM deposits
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
    $sql = "SELECT * FROM deposits
    WHERE id = '$deposit_id'
    ORDER BY id DESC";

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
  public function allCards() {
    $sql = "SELECT * FROM cards
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
}
?>