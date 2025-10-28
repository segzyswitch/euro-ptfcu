<?php
require_once 'db_connect.php';

$sql = "SELECT * FROM page_config";
$query = $conn->prepare($sql);
try {
  $query->execute();
  $row = $query->fetchAll();
  $siteName = $row[0][2];
  $siteIcon = $row[1][2];
} catch (PDOException $e) {
  echo $e->getMessage();
}
?>