 <?php
 include_once "./connection.php";
 $LN = mysqli_real_escape_string($con,$_POST['surname']);
 $ON =mysqli_real_escape_string($con,$_POST['othername']);
 $EM =mysqli_real_escape_string($con,$_POST['email']);
 $gend=mysqli_real_escape_string($con,$_POST['gender']);
 $PASS=mysqli_real_escape_string($con,$_POST['password1']);
 $PASS2=mysqli_real_escape_string($con,$_POST['confirmpassword']);
 $LECT_ID=mysqli_real_escape_string($con,$_POST['lec-id']);

 if ($LN == "" || $ON == "" || $EM == "" || $gend == "" || $LECT_ID == "" || $PASS == "") {
  echo("<h3 style='border: 2px solid red; text-align: center;'>Sorry, registeration is not successful. Fill in your details properly and try again.</h3>");
  return;
}
 $sql = "INSERT INTO user_tb(SURNAME, OTHER_NAME, EMAIL, USER_REG_ID, GENDER, PASSWORD) VALUES('$LN','$ON','$EM','$LECT_ID','$gend','$PASS')";

 $rst = $con->query($sql);
 if($rst){
  echo "<h3 style='border: 2px solid lime; text-align: center;'>Congratulations $LN, you have successfully registered. Click on LOGIN to access your account</h3>";
}else{
  echo "<h3 style='border: 2px solid red; text-align: center;'>Sorry, registeration is not successful. Fill in your details properly and try again.</h3>";
}
?>