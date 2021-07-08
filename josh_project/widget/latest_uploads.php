<div onload="SlideNow()">
  <!-- slider with javascript -->
  <div class="slidingbox">
    .

  </div>

  <div class="slidingbox bigger">
    <div class="biggerovally">
      <div class="slider">
        <div class="slide">

          <div class="book">
            <img src="./image/cat3.jpeg" alt="photo">
            <div class="title">
              <h2>Foundation of Liquid Metal Analysis xdghdgh</h2>
            </div>
          </div>
          <div class="book">
            <img src="./image/cat3.jpeg" alt="photo">
            <div class="title">
              <h2>Foundation of Liquid Metal Analysis</h2>
            </div>
          </div>
          <div class="book">
            <img src="./image/cat2.jpeg" alt="photo">
            <div class="title">
              <h2>Foundation of Liquid Metal Analysis</h2>
            </div>
          </div>
          <div class="book">
            <img src="./image/cat3.jpeg" alt="photo">
            <div class="title">
              <h2>Foundation of Liquid Metal Analysis</h2>
            </div>
          </div>
          <div class="book">
            <img src="./image/cat2.jpeg" alt="photo">
            <div class="title">
              <h2>Foundation of Liquid Metal Analysis</h2>
            </div>
          </div>
          <div class="book">
            <img src="./image/cat3.jpeg" alt="photo">
            <div class="title">
              <h2>Foundation of Liquid Metal Analysis</h2>
            </div>
          </div>
          <div class="book">
            <img src="./image/cat1.jpeg" alt="photo">
            <div class="title">
              <h2>Foundation of Liquid Metal Analysis</h2>
            </div>
          </div>
          <div class="book">
            <img src="./image/cat3.jpeg" alt="photo">
            <div class="title">
              <h2>Foundation of Liquid Metal Analysis</h2>
            </div>
          </div>
          <div class="book">
            <img src="./image/cat2.jpeg" alt="photo">
            <div class="title">
              <h2>Foundation of Liquid Metal Analysis</h2>
            </div>
          </div>
          <div class="book">
            <img src="./image/cat2.jpeg" alt="photo">
            <div class="title">
              <h2>Foundation of Liquid Metal Analysis</h2>
            </div>
          </div>
          <div class="book">
            <img src="./image/cat1.jpeg" alt="photo">
            <div class="title">
              <h2>Foundation of Liquid Metal Analysis</h2>
            </div>
          </div>


        </div>


      </div>
    </div>
  </div>



  <div class="holder">
    <h3 class="topic">LATEST UPLOADS</h3>
    <div class="search-container">
      <form action="javascript:void(0)" method="POST" id="search">
        <button class="search-button" form="search" onclick="search()"><i class="fas fa-search"></i></button>
        <input class="search-box" type="text" name="search" placeholder="Search for your Books and Pass-questions">
      </form>
    </div>

  </div>

  <!-- <div class="category">
    <div class="cat">
      <div class="cat-1"> <img src="./image/cat1.jpeg" alt="photo">
        <p>description1</p>
      </div>
      <div class="cat-1"> <img src="./image/cat2.jpeg" alt="photo">
        <p>description2</p>
      </div>
      <div class="cat-1"> <img src="./image/cat3.jpeg" alt="photo">
        <p>description3</p>
      </div>
      <div class="cat-1"> <img src="./image/cat4.jpeg" alt="photo">
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
      <div class="cat-1"> <img src="./image/cat4.jpeg" alt="photo">
        <p>description4</p>
      </div>
      <div class="cat-1"> <img src="./image/cat1.jpeg" alt="photo">
        <p>description1</p>
      </div>
      <div class="cat-1"> <img src="./image/cat2.jpeg" alt="photo">
        <p>description2</p>
      </div>
      <div class="cat-1"> <img src="./image/cat2.jpeg" alt="photo">
        <p>description2</p>
      </div>
      <div class="cat-1"> <img src="./image/cat2.jpeg" alt="photo">
        <p>description2</p>
      </div>


    </div>
  </div> -->

</div>
<div id="latest-uploads">
  <div class="cat"></div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", showLatestUploads);

  function showLatestUploads() {
    let method = "POST";
    let url = `./scripts/getlatestuploads.php`;
    let async = true;
    let body = "";
    let handler = function() {
      if (this.readyState == 4 && this.status == 200) {
        let data = JSON.parse(this.responseText);
        let html = "";

        for (let a = 0; a < data.length; a++) {
          let name = data[a][0];
          let thumbnail = data[a][1];
         

          html += '<div class="cat-1">';
          html += '<img src="./image/cat1.jpeg" alt="photo">';
          html += `<p>${name}</p>`;
          html += '</div>';
        }

        document.querySelector('.cat').innerHTML = html;
      }
    };

    sendRequest(method, url, async, body, handler);
  }

  function sendRequest(method, url, async, body = new FormData, handler = new Function) {
    let xhttp = new XMLHttpRequest;
    xhttp.open(method, url, async);
    xhttp.onreadystatechange = handler;
    xhttp.send(body);
  }
</script>