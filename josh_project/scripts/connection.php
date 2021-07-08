<?php
$con = mysqli_connect("localhost", "root", "", "onlinelibrary_db");
if ($con->connect_error) {
  die("Database does not exist. ".$con->connect_error);
}
?>