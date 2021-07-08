<!------------------------------------ sign up first content-------------------------------------->
<!-- <div style="position: relative;width: 100%;height: 100vh;z-index: 5;display: none;"> -->
<div id="getSignIn" class="sign_up " style="display: none;">


  <div style="position: absolute;left:50%;top:50%;transform: translate(-50%,-50%);">
    <div class="dicor" style="position: relative;width:450px;height: fit-content;">
      <p>sign-up</p>
      <div class="cancel">
        <i onclick="SiteNew.cancle.cancler()" class="fa fa-times" aria-hidden="true"></i>
      </div>
      <div class="floter">
        <div class="choose">
          <i style="font-size: 25px;" class="far fa-user-circle"></i>
        </div>
        <!--                  buttons invoulved in sign-in                                -->
        <button class="beauty " id="button_1" onclick="SiteNew.swap.lecturer()">Student</button>
        <button class="beauty " id="button_2" onclick="SiteNew.swap.student()">lecturer</button>

      </div>
      <!-- first content, student  -->

      <div class="content content_1 active" id="first">
        <form action="connection\studentsignup.php" method="POST">
          <input type="text" placeholder="   Last Name" class="one" name="lastname">
          <input type="text" placeholder="   Other Names" class="one" name="othername"><br>
          <input type="text" placeholder="   Email" class="one" name="email"><br>
          <input type="text" placeholder="   Registration Number" class="one" name="RegistrationNumber"><br>
          <p style=" margin-top: 5px;">login details</p>
          <input style="width: 300px; margin-top: 5px;" type="password" placeholder="  Suggest Password" class="one" name="password"> <br>
          <input style="width: 300px; margin-top: 5px;" type="password" placeholder="  Confairm password" class="one"> <br>

          <button class="submit">submit</button>

        </form>
      </div>
      <!-------------------------------------- second content  lecturer-------------------------->
      <div class="content content_1 inactive" id="second">
        <form action="" method="POST" id="lecturer-form">
          <!-- <input type="text" placeholder="   Surname" class="one">
                        <input type="text" placeholder="   Other Names" class="one"> <br>
                        <input type="text" placeholder="   Phone Number" class="one">
                        <input type="text" placeholder="   Email" class="one"><br>
                        <input type="radio" name="gender" value="male" id="male" class="two" checked>
                        <label for="male" class="two">Male</label>
                        <input type="radio" name="gender" value="female" id="female" class="two">
                        <label for="female" class="two">Female</label> <br>
                        <input type="text" placeholder="   Department" class="one">
                        <input type="text" placeholder="   Staff ID" class="one"><br>
                        <p style=" margin-top: 5px;">login details</p>
                        <input style="width: 300px; margin-top: 5px;" type="text" placeholder="  Suggest Username" class="one three"> <br>
                        <input style="width: 300px; margin-top: 5px;" type="text" placeholder="  Suggest Password" class="one"> <br>
                        <input style="width: 300px; margin-top: 5px;" type="text" placeholder="  Confairm password" class="one"> <br>

                        <button class="submit">submit</button> -->

          <div class="names">
            <input type="text" placeholder="Surname" name="surname" id="input-field">
            <input type="text" placeholder="Othername" name="othername" id="input-field">
          </div>

          <div class="emailnpassword">
            <input type="email" placeholder="Email" name="email" id="input-field">
            <input type="password" placeholder="Password" name="password1" id="input-field">
            <input type="password" placeholder="Confirm password" name="confirmpassword" id="input-field">
          </div>

          <div class="gender">
            <div>
              <input type="radio" name="gender" value="female">
              <label for="female">Female</label>
            </div>
            <div>
              <input type="radio" name="gender" value="male">
              <label for="male">Male</label>
            </div>
          </div>

          <button type="submit"> Sign up</button>


        </form>
        <button type="button" id="login">Login Instead</button>


      </div>



    </div>
  </div>
</div>

<!-- <div class="sellector"></div> -->
</div>