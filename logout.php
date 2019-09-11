







<?php
session_start();
unset($_SESSION['sess_user']);
unset($_SESSION['login']);
session_destroy();
header("Location: log.php");
?>