<?php
session_start();
// Remove active sessions
unset($_SESSION["admin_login_id"]);
unset($_SESSION["admin_status"]);
// redirect to lign
header("Location: index");

?>