<?php
require_once "./connection.php";

$sql = "SELECT `TITLE`, `THUMBNAIL` FROM `uploads_tb` ORDER BY `DATE` DESC LIMIT 100";

$rst = $con->query($sql);

$num_rows = mysqli_num_rows($rst);
if ($num_rows == 0) {
  echo "No uploads yet.";
} else {
  $rows = mysqli_fetch_all($rst);
  echo json_encode($rows);
}