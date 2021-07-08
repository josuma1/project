<?php
require_once "./connection.php";

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_FILES['fileToUpload']['name'] == "") {
  $target_file = "";
  echo "Sorry, you have not chosen any file";
  return;
} else {
  $target_file = test_input(mysqli_real_escape_string($con, basename($_FILES['fileToUpload']['name'])));
  $target_file_temp = $_FILES['fileToUpload']['tmp_name'];
  $target_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  $file_title = test_input(mysqli_real_escape_string($con, $_POST['filetitle']));
  $file_category = test_input(mysqli_real_escape_string($con, $_POST['category']));
  $file_dept = test_input(mysqli_real_escape_string($con, $_POST['department']));
  $file_level = test_input(mysqli_real_escape_string($con, $_POST['level']));
  $file_course_code = test_input(mysqli_real_escape_string($con, $_POST['coursecode']));
  $date = date("d/m/Y H:i:s");

  if (empty($file_title)) {
    echo "Please enter the name of the file being uploaded";
    return;
  }

  if (empty($file_category)) {
    echo "Please enter the category of the file being uploaded";
    return;
  } elseif ($file_category !== "recommended" && empty($file_dept)) {
    echo "Please enter the department to which the uploaded file belongs";
    return;
  }

  if (file_exists($target_file)) {
    echo "Sorry, file already exists";
    return;
  }

  if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    echo  "Sorry, your file is too large";
    return;
  }

  if ($target_file_type != "jpg" && $target_file_type != "png" && $target_file_type != "jpeg" && $target_file_type != "gif" && $target_file_type != "pdf" && $target_file_type != "doc" && $target_file_type != "docx" && $target_file_type != "txt") {
    echo "Sorry, file type not allowed";
    return;
  }

  
  $sql = "INSERT INTO `uploads_tb` (`FILE_NAME`, `TITLE`, `CATEGORY`, `DEPARTMENT`, `LEVEL`, `COURSE_CODE`, `DATE`) VALUES ('$target_file', '$file_title', '$file_category', '$file_dept', '$file_level', '$file_course_code', '$date')";

  $rst = $con->query($sql);
  if ($rst) {
    move_uploaded_file($target_file_temp, '../uploads/' . $target_file);
    echo "You have successfully uploaded $file_title";
  } else {
    echo "Error in uploading file. Make sure all fields are filled properly.</br>" . $con->connect_error;
  }
}


// function get_sql($target_file, $target_file_temp, $file_title, $file_category, $file_dept, $file_level, $file_course_code, $date)
// {
//   switch ($file_category) {
//     case 'books':
//       move_uploaded_file($target_file_temp, '../uploads/books/' . $target_file);
//       $sql = "INSERT INTO `books_tb` (`FILE_NAME`, `TITLE`, `CATEGORY`, `DEPARTMENT`, `LEVEL`, `COURSE_CODE`, `DATE`) VALUES ('$target_file', '$file_title', '$file_category', '$file_dept', '$file_level', '$file_course_code', date('d/m/Y H:i:s'))";
//       return $sql;

//     case 'videos':
//       move_uploaded_file($target_file_temp, '../uploads/videos/' . $target_file);
//       $sql = "INSERT INTO `videos_tb` (`FILE_NAME`, `TITLE`, `CATEGORY`, `DEPARTMENT`, `LEVEL`, `COURSE_CODE`, `DATE`) VALUES ('$target_file', '$file_title', '$file_category', '$file_dept', '$file_level', '$file_course_code', date('d/m/Y H:i:s'))";
//       return $sql;

//     case 'pastquestions':
//       move_uploaded_file($target_file_temp, '../uploads/pq/' . $target_file);
//       $sql = "INSERT INTO `past_tb` (`FILE_NAME`, `TITLE`, `CATEGORY`, `DEPARTMENT`, `LEVEL`, `COURSE_CODE`, `DATE`) VALUES ('$target_file', '$file_title', '$file_category', '$file_dept', '$file_level', '$file_course_code', date('d/m/Y H:i:s'))";
//       return $sql;

//     case 'recommended':
//       move_uploaded_file($target_file_temp, '../uploads/recommended/' . $target_file);
//       $sql = "INSERT INTO `recommended_tb` (`FILE_NAME`, `TITLE`, `CATEGORY`, `DEPARTMENT`, `LEVEL`, `COURSE_CODE`, `DATE`) VALUES ('$target_file', '$file_title', '$file_category', '$file_dept', '$file_level', '$file_course_code', date('d/m/Y H:i:s'))";
//       return $sql;

//     case '':
//       echo "Sorry, you have not selected the category of the file being uploaded";
//       return;
//   }
// }
