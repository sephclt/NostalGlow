<?php
session_start();

$_SESSION = array();

session_destroy();

header("Location: account-login.html");
exit();
