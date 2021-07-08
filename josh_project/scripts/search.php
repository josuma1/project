<?php
require_once "./connection.php";

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['search-input']) && $_POST['search-input'] != "") {
  $input = test_input(mysqli_real_escape_string($con, $_POST['search-input']));
  
  $search_query = "SELECT Name FROM uploads_tb WHERE Name LIKE '%$input%'";
  $result = mysqli_query($con, $search_query);

  $num_rows = mysqli_num_rows($result);

  echo "<h2 style='text-align: center;'>You have search for $input</h2>";

  if ($num_rows == 0) {
    echo "Sorry, there are no matching result for <b> $input </b>. </br> </br> 1. Try more general words. for example: If you want to search 'how to create a website' then use general keyword like 'create' 'website' </br> 2. Try different words with similar meaning </br> 3. Please check your spelling";
  } else {
    echo $num_rows. ' results found!<br><br>';
    $i = 1;
    while (($rows = mysqli_fetch_assoc($result)) && ($i <= $num_rows)) {
      echo $i.'. '.$rows['Name'].'<br>';
      $i++;
    }
  }
}

