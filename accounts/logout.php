<?php
session_start();
// Remove active sessions
unset($_SESSION["ptcu_account_id"]);
unset($_SESSION["accnt_status"]);
// redirect to lign
header("Location: ../index");

?>