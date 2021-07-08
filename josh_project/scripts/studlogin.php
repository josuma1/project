<?php
session_start();
require_once "connection.php";

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// {"ureg":"15\/eg\/co\/811","upass":"jumbo"
if(isset($_POST['regno']) && trim($_POST['regno']) != "" && isset($_POST['spassword']) && trim($_POST['spassword']) != ""){
    //valid
    $ureg =  test_input(mysqli_real_escape_string($con,$_POST['regno']));
    $upass =  test_input(mysqli_real_escape_string($con,$_POST['spassword']));
    //check if exist
    $ex = $con->query("SELECT * FROM students_tb WHERE `REG_NO`='{$ureg}' AND `PASSWORD`='{$upass}'");
    if($ex){
        $rec = $ex->fetch_assoc();
        //student exist
        $_SESSION['UID']=$rec['SURNAME'];
        echo $_SESSION['UID'];
    }else{
        $_SESSION['Error']= "Invalid Username and Password";
        echo $_SESSION['Error'];
    }
}else{
    //invalid
    $_SESSION['Error']= "Invalid Username or Password";
    echo $_SESSION['Error'];
}
?>