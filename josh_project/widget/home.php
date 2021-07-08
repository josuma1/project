<div class="banner1">
  <div class="overlay">

  </div>
  <div class="wrapper">
    <div class="text-box slideInUp">
      <h1>We Bring The Library To Your Home</h1>
      <p>You can stay at home and read your lovely collections <br> at anytime of your choice</p>
    </div>
    <!-- search box -->
    <div class="search-container slideInUp">
      <form action="javascript:void(0)" method="POST" id="search" name="search">
        <button class="search-button slideInUp" form="search" onclick="search()"><i class="fas fa-search"></i></button>
        <input class="search-box" type="text" name="search-input" placeholder="Search for your books and past questions">
      </form>
    </div>
  </div>
</div>


<i class="fas fa-angle-down pulldown"></i>

<!------------------------------------------categories-------------------------------------------------->
<div class="backgroundxx">

  <div class="middle">
    <div class="header">
      <h3>RECOMMENDATION</h3>
    </div>
    <div class="category">
      <div class="cat">
        <div class="cat-1">
          <img src="./image/cat1.jpeg" alt="photo">
          <p>description1</p>
        </div>
        <div class="cat-1"> <img src="./image/cat2.jpeg" alt="photo">
          <p>description2</p>
        </div>
        <div class="cat-1"> <img src="./image/cat3.jpeg" alt="photo">
          <p>description3</p>
        </div>
        <div class="cat-1"> <img src="image/cat4.jpeg" alt="photo">
          <p>description4</p>
        </div>
        <div class="cat-1"> <img src="./image/cat1.jpeg" alt="photo">
          <p>description1</p>
        </div>
        <div class="cat-1"> <img src="./image/cat2.jpeg" alt="photo">
          <p>description2</p>
        </div>
        <div class="cat-1"> <img src="./image/cat3.jpeg" alt="photo">
          <p>description3</p>
        </div>
        <div class="cat-1"> <img src="image/cat4.jpeg" alt="photo">
          <p>description4</p>
        </div>
        <div class="cat-1"> <img src="./image/cat1.jpeg" alt="photo">
          <p>description1</p>
        </div>
        <div class="cat-1"> <img src="./image/cat2.jpeg" alt="photo">
          <p>description2</p>
        </div>
        <div class="cat-1"> <img src="./image/cat1.jpeg" alt="photo">
          <p>description1</p>
        </div>
        <div class="cat-1"> <img src="./image/cat1.jpeg" alt="photo">
          <p>description1</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="upload-wraper ">
  <i class="fas fa-upload"></i>
</div>

<div class="upload-popup-wraper ">
  <div id="msg"></div>
  <div class="upload-box comeOut">
    <div class="preview">
      <span>Preview...</span>
    </div>
    <form action="javascript:void(0)" id="upload-form" name="upload-form" method="post" enctype="multipart/form-data">
      <div class="inputs">
        <input type="text" id="filetitle" name="filetitle" placeholder="File Name" class="input-field" required>
        <select id="category" name="category" class="input-field" required>
          <option value="">Category...</option>
          <option value="books">Books</option>
          <option value="videos">Videos</option>
          <option value="pastquestions">Past Questions</option>
          <option value="recommended">Recommended</option>
        </select>

        <select id="department" name="department" class="input-field">
          <option value="Computer">Computer Engineering</option>
          <option value="Electrical">Electrical Engineering</option>
        </select>
        <select id="level" name="level" class="input-field">
          <option value="100">Level 100</option>
          <option value="200">Level 200</option>
          <option value="300">Level 300</option>
          <option value="400">Level 400</option>
          <option value="500">Level 500</option>
        </select>
        <input type="text" id="coursecode" name="coursecode" class="input-field" placeholder="Course Code eg. CPE111">
      </div>

      <div class="button-wrapper">
        <label for="fileToUpload"> Pick a file</label>
        <input type="file" name="fileToUpload" id="fileToUpload" onchange="getThumbnail(this)" required>

        <button type="submit" id="submitUpload" onclick="uploadFile()">
          <i class="fas fa-upload"></i> <span style="margin-left:10px;">Upload</span>
        </button>
      </div>
    </form>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', isLoggedIn);

  function isLoggedIn() {
    let xhttp = new XMLHttpRequest;
    xhttp.open("POST", "./scripts/sessioncheck.php", true);
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText == "" || this.responseText == "Invalid Username and Password") {
          return;
        } else {
          setTimeout(() => {
            let uploadbtn = document.querySelector('.upload-wraper');
            uploadbtn.style.display = 'flex';
            uploadbtn.classList.add('comeIn');

            let uploadBox = document.querySelector('.upload-box');
            let uploadBoxCont = document.querySelector('.upload-popup-wraper');

            uploadbtn.addEventListener('click', () => {
              uploadBoxCont.style.display = "flex";
              uploadBox.classList.add('comeIn');
              uploadBox.classList.remove('comeOut');
            })

            uploadBoxCont.addEventListener('click', (e) => {
              if (e.path[0].className.includes('upload-popup-wraper')) {

                uploadBox.classList.remove('comeIn');
                uploadBox.classList.add('comeOut');
                e.path[0].style.display = "none";
              }
            })
          }, 3000)
        }
      }
    };
    xhttp.send();
  }
</script>