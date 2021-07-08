<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>computer/elect library</title>
  <link rel="stylesheet" href="./css/new.css">
  <link rel="icon" href="./image/logonow.png">
  <link rel="stylesheet" href="./fontawesome-free-5.15.1-web/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="nav ">
      <div class="logo">
        <img style="height: 40px;width: 50px;" src="./image/logonow.png" alt="">
        <a href="index.php">Online-Library</a> </h2>
      </div>

      <div class="nav1">
        <ul>
          <li class="colorz" id="color1"><a href="./latestuploads.php"> LATEST UPLOADS</a></li>
          <li class="colorz" id="color3">
            <a>COMPUTER ENGINEERING</a>
            <div class="semester">
              <div class="sem-item">
                FIRST SEMESTER
              </div>
              <div class="sem-item">
                SECOND SEMESTER
              </div>
            </div>
          </li>
          <li class="colorz" id="color4">
            <a>ELECTRICAL ENGINEERING</a>
            <div class="semester">
              <div class="sem-item">
                FIRST SEMESTER
              </div>
              <div class="sem-item">
                SECOND SEMESTER
              </div>
            </div>
          </li>
        </ul>

        <button class="login-btn">Login</button>

        <div class="btn-container">
          <button id="lecturer"> Lecturer</button>
          <button id="student"> Student</button>
          <a id="logout" href="" class="btn">Log Out</a>
        </div>

      </div>
    </div>

    <nav>
      <a href="javascript:void(0)">Upload Books</a>
      <a href="javascript:void(0)">Upload Books</a>
      <a href="javascript:void(0)">Upload Books</a>
      <a href="javascript:void(0)">Manage Books</a>
    </nav>

  </div>
  <!-- lecture's login -->

  <div class="form-container">
    <div class="login-form lec-login zoomIn">
      <h2>Login</h2>
      <form action="javascript:void(0)" method="POST" id="login2" name="lectlogin">
        <div class="login-msg"></div>
        <div class="inputs">
          <input type="text" placeholder="Lecturer's ID" name="lecturer-id">
          <input type="password" placeholder="Password" name="password">
          <div class="btn-holder">
            <button type="submit" id="login" onclick="logIn('lectlogin')"> Login</button>
            <a href="javascript:void(0)" onclick="toLecturerSignup()">Sign up</a>
          </div>
        </div>
      </form>

    </div>
    <!-- student login -->
    <div class="student-loginform-container"></div>
    <div class="login-form std-login zoomIn">
      <h2>Login</h2>
      <form action="javascript:void(0)" method="POST" id="login2" name="studlogin">
        <div class="login-msg"></div>
        <div class="inputs">
          <input type="text" placeholder="Registration Number" name="regno">
          <input type="password" placeholder="Password" name="spassword">
          <div class="btn-holder">
            <button type="submit" id="login" onclick="logIn('studlogin')"> Login</button>
            <a href="javascript:void(0)" onclick="toStdSignup()">Sign up</a>
          </div>
        </div>
      </form>
    </div>




    <!-- Lecturers registerion form -->
    <div class="signup-container"></div>
    <div class="signup-form lec-signup zoomIn">
      <h2>Sign up</h2>
      <form action="javascript:void(0)" method="POST" name="lecturersignup">
        <div class="signup-msg"></div>
        <div class="names">
          <input type="text" placeholder="Surname" name="surname" class="input-field" required>
          <input type="text" placeholder="Othername" name="othername" class="input-field" required>
        </div>

        <div class="emailnreg">
          <input type="email" placeholder="Email" name="email" class="input-field" required>
          <input type="text" placeholder="Lecturer ID" name="lec-id" class="input-field" required>
        </div>

        <div class="passwords">
          <input type="password" placeholder="Password" name="password1" class="input-field">
          <input type="password" placeholder="Confirm password" name="confirmpassword" class="input-field" required>
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

        <a href="javascript:void(0)" onclick="toLecturerLogin()"> Login instead</a>
        <button type="submit" onclick="signUp('lecturersignup')">Sign up</button>

      </form>
    </div>
    <!-- student sign up form -->
    <!-- <div class="student-signup-container"></div> -->
    <div class="signup-form std-signup zoomIn">

      <h2>Sign up</h2>
      <form action="javascript:void(0)" method="POST" name="studentsignup">
        <div class="signup-msg"></div>
        <div class="name2">
          <input type="text" placeholder="Surname" name="surname" class="input-field" required>
          <input type="text" placeholder="Othername" name="othername" class="input-field" required>
        </div>

        <div class="emailnreg">
          <input type="email" placeholder="Email" name="email" class="input-field">
          <input type="text" placeholder="Registration Number" name="regno" class="input-field" required>
        </div>

        <div class="passwords">
          <input type="password" placeholder="Password" name="password1" class="input-field" required>
          <input type="password" placeholder="Confirm password" name="confirmpassword" class="input-field" required>
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

        <a href="javascript:void(0)" onclick="toStdLogin()"> Login instead</a>
        <button type="submit" onclick="signUp('studentsignup')"> Sign up</button>

      </form>
    </div>
  </div>

  <script>
    document.addEventListener("click", logOut);

    function logOut(e) {
      let logOutBtn = document.querySelector('#logout') || "";
      if (logOutBtn == "" || undefined || null) {
        return;
      } else if (e.target == logOutBtn) {
        let xhttp = new XMLHttpRequest;
        xhttp.open("POST", "./scripts/logout.php", true);
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            window.location = "./index.php";
            document.querySelector('.login-btn').innerHTML = `Login`;
            document.querySelector('.btn-container').innerHTML = `<button id="lecturer"> Lecturer</button><button id="student"> Student</button>`;
          };
          xhttp.send();
        }
      }
    }
  </script>