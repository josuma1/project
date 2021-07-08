 <?php
 include_once "connection.php";
 $SN = mysqli_real_escape_string($con,$_POST['surname']);
 $ON =mysqli_real_escape_string($con,$_POST['othername']);
 $EM =mysqli_real_escape_string($con,$_POST['email']);
 $gend=mysqli_real_escape_string($con,$_POST['gender']);
 $REG =mysqli_real_escape_string($con,$_POST['regno']);
 $PASS=mysqli_real_escape_string($con,$_POST['password1']);
 $PASS2=mysqli_real_escape_string($con,$_POST['confirmpassword']);

  if ($SN == "" || $ON == "" || $EM == "" || $gend == "" || $REG == "" || $PASS == "") {
    echo("<h3 style='border: 2px solid red; text-align: center;'>Sorry, registeration is not successful. Fill in your details properly and try again.</h3>");
    return;
  }
 $sql = "INSERT INTO user_tb(SURNAME, OTHER_NAME, EMAIL, GENDER, USER_REG_ID, PASSWORD) VALUES('$SN','$ON','$EM','$gend','$REG','$PASS')";

 $rst = $con->query($sql);
 if($rst){
     echo("<h3 style='border: 2px solid lime; text-align: center;'>Congratulations $SN, you have successfully registered. Click on LOGIN to access your account</h3>");
 }else{
     echo("<h3 style='border: 2px solid red; text-align: center;'>Sorry, registeration is not successful. Fill in your details properly and try again.</h3>");
 }



?>
