<?php
session_start();
// Remove active sessions
unset($_SESSION["reichs_account_id"]);
unset($_SESSION["accnt_status"]);
// redirect to lign
header("Location: ../");
