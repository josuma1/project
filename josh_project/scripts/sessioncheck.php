<?php

  if (isset($_SESSION['Error'])) {
    echo $_SESSION['Error'];
  } else {
    if (isset($_SESSION['UID'])) {
      echo $_SESSION['UID'];
    }
  }
  ?>