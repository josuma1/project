<?php
session_start();
require_once "./connection.php";
echo "session about";
$_SESSION = [];
session_destroy();

?>