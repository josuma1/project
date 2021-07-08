var SiteNew = {
  loginN: {},
  Reg: {},
  SignUp: {
    swittcher: function () {
      var depts = document.querySelector(".dept").classList;
      var seme1 = document.querySelector(".fst").classList;
      var seme2 = document.querySelector(".snd").classList;
      document.getElementById('getSignIn').style.display = "block";
      depts.replace("active", "inactive");
      seme1.replace("active", "inactive");
      seme2.replace("active", "inactive");

    }
  },

  cancle: {
    cancler: function () {
      document.getElementById('getSignIn').style.display = "none";
    }

  },
  cancle1: {
    cancler1: function () {
      document.getElementById('view').style.display = "none";
    }

  },

  swap: {
    lecturer: function () {
      var lectuer = document.getElementById('first').classList;
      var student = document.getElementById('second').classList;

      if (lectuer.contains("inactive")) {
        lectuer.replace("inactive", "active");
        student.replace("active", "inactive");
      }
    },
    student: function () {
      var lectuer = document.getElementById('first').classList;
      var student = document.getElementById('second').classList;
      if (student.contains("inactive")) {
        lectuer.replace("active", "inactive");
        student.replace("inactive", "active");

      }

    }
  }
};

// this code controlls the slidder motion
var Direction = 1;
var slider = null;
var books = 0;
var maxmove = 0;
var SlideNow = () => {
  // alert('jjj');
  Direction = 1;
  slider = document.querySelectorAll('.slider')[0];
  books = document.querySelectorAll('.book').length;
  maxmove = Math.ceil(books / 2) * 255;
  // alert(books);
  setInterval(() => {

    // console.log(books.scrollLeft);
    if (slider.scrollLeft >= maxmove) {
      Direction = 0;
    }
    if (slider.scrollLeft <= 0) {
      Direction = 1;
    }
    if (Direction == 1) {
      slider.scrollLeft += 5;
    } else {
      slider.scrollLeft -= 5;
    }

  }, 50);
}
//alert(slider.length);

//this event handles boddy canclling 

// this closes the alert pop up 
// var pop = document.querySelector(".popup ");

// var point = document.body.addEventListener("click", function(e) {
//     // console.log(e);
//     let clintx = e.clientX
//     let clinty = e.clientY
//     if (clintx > 953 || clintx < 548 || clinty > 219 || clinty<146) {
//         pop.style.display = "none";        
//     }


// })


//time bellow the footer
function showTime() {
  var date = new Date();
  var h = date.getHours();
  var m = date.getMinutes();
  var s = date.getSeconds();
  var season = "AM"
  if (h == 0) {
    h = 12;
  }
  if (h > 12) {
    h = h - 12;
    season = "PM";

  }
  if (m < 10) {
    m = "0" + m;
  }
  if (s < 10) {
    s = "0" + s
  }

  var time = h + ':' + m + ':' + s + season;
  // alert(time)
  document.getElementById('clockdisplay').innerHTML = time;
  setTimeout(showTime, 1000);
}
showTime();


//switching layers
function toggler(Id, btnid, id2, btnid2) {
  // first course
  var CIN = document.getElementsByClassName('interior1');
  for (i = 0; i < CIN.length; i++) {
    CIN[i].style.display = "none";

    var colour = document.getElementsByClassName('selebot1');
    for (j = 0; j < colour.length; j++) {
      colour[j].style.borderBottom = "solid 5px black";

    }

  }
  // first course
  document.getElementById(Id).style.display = "block";
  colour[btnid].style.borderBottom = "solid 5px white";

}

setTimeout(() => {
  let popup = document.querySelector('.popup');
  // popup.style.display = "none";
  // popup.style.transition = "ease-in-out 4s;";

  // console.log(popup)
}, 3000);

let dropdown = document.querySelector('.btn-container')
let loginButton = document.querySelector('.login-btn')
loginButton.addEventListener('click', () => {
  dropdown.classList.toggle("drop");
});
//buttons
let lecturerBtn = document.querySelector('.btn-container > #lecturer');
let studentBtn = document.querySelector('.btn-container > #student');


//containers
// let stdSignupCon = document.querySelector('.student-signup-container')
// let lectSignupCon = document.querySelector('.signup-container')

// let stdLoginCon = document.getElementsByClassName('student-loginform-container');
let popupCon = document.getElementsByClassName('form-container');

//forms
let lecLoginForm = document.querySelector('.lec-login');
let stdLoginForm = document.querySelector('.std-login');
let lecSignupForm = document.querySelector('.lec-signup');
let stdSignupForm = document.querySelector('.std-signup');


lecturerBtn.addEventListener('click', (e) => {
  popupCon[0].classList.add('fadeIn');
  popupCon[0].classList.remove('fadeOut')
  popupCon[0].style.display = "flex";
  lecLoginForm.style.display = "flex";
  stdLoginForm.style.display = "none";
  lecLoginForm.classList.remove('zoomOut');
  lecLoginForm.classList.add('zoomIn');
  document.querySelector('body').style.position = 'fixed';
  dropdown.classList.remove('drop');
})
studentBtn.addEventListener('click', (e) => {
  popupCon[0].classList.add('fadeIn');
  popupCon[0].classList.remove('fadeOut')
  popupCon[0].style.display = "flex";
  lecLoginForm.style.display = "none";
  stdLoginForm.style.display = "flex";
  stdLoginForm.classList.remove('zoomOut');
  stdLoginForm.classList.add('zoomIn');
  document.querySelector('body').style.position = 'fixed';
  dropdown.classList.remove('drop');
})


popupCon[0].addEventListener('click', (e) => {
  if ((stdLoginForm.style.display == "flex" || lecLoginForm.style.display == "flex" || lecSignupForm.style.display == "flex" || stdSignupForm.style.display == "flex") && (e.target == stdLoginForm || e.target == lecLoginForm || e.target == lecSignupForm || e.target == stdSignupForm)) {
    stdLoginForm.classList.add('zoomOut');
    lecLoginForm.classList.add('zoomOut');
    lecSignupForm.classList.add('zoomOut');
    stdSignupForm.classList.add('zoomOut');

    stdLoginForm.classList.remove('zoomIn');
    lecLoginForm.classList.remove('zoomIn');
    lecSignupForm.classList.remove('zoomIn');
    stdSignupForm.classList.remove('zoomIn');

    popupCon[0].classList.add('fadeOut')
    popupCon[0].classList.remove('fadeIn');

    document.querySelector('body').style.position = 'relative';


    setTimeout(() => {
      stdLoginForm.style.display = "none";
      lecLoginForm.style.display = "none";
      lecSignupForm.style.display = "none";
      stdSignupForm.style.display = "none";
      popupCon[0].style.display = "none";
    }, 300);
  }

})

function toLecturerSignup() {
  lecLoginForm.classList.remove('zoomOut');
  lecSignupForm.classList.remove('zoomOut');
  lecSignupForm.classList.add('zoomIn');
  lecLoginForm.style.display = "none";
  lecSignupForm.style.display = "flex";

}

function toLecturerLogin() {
  lecSignupForm.classList.remove('zoomOut');
  lecLoginForm.classList.add('zoomIn');

  lecLoginForm.style.display = "flex";
  lecSignupForm.style.display = "none";

}


function toStdLogin() {
  stdSignupForm.classList.remove('zoomOut');
  stdLoginForm.classList.add('zoomIn');

  stdSignupForm.style.display = "none"
  stdLoginForm.style.display = "flex"

}

function toStdSignup() {
  stdSignupForm.classList.add('zoomIn');
  stdSignupForm.classList.remove('zoomOut');
  stdLoginForm.classList.remove('zoomOut');

  stdSignupForm.style.display = "flex"
  stdLoginForm.style.display = "none";

}

setInterval(() => {
  if (popupCon[0].style.display == "flex") {
    loginButton.disabled = true;
    loginButton.style.cursor = "not-allowed";
  } else {
    loginButton.disabled = false;
    loginButton.style.cursor = "pointer";
  }
}, 100);

function getThumbnail(fileInput) {
  let chosenFile = fileInput.files;
  alert(chosenFile.item(0).type + "file selected");
}


function uploadFile() {
  let uploadForm = document.forms.namedItem('upload-form');
  let formData = new FormData(uploadForm);

  let method = "POST";
  let url = "./scripts/uploads.php";
  let async = true;
  let body = formData;
  let handler = function () {
    if (this.readyState == 4 && this.status == 200) {
      let msg = document.getElementById('msg');
      msg.innerHTML = `<h3>` + this.responseText + `</h3>`;
      msg.classList.add('msg');
    }
  }

  sendRequest(method, url, async, body, handler);
}

function signUp(formName) {
  let form = document.forms.namedItem(formName);
  let formData = new FormData(form);

  let method = "POST";
  let url = `./scripts/${formName}.php`;
  let async = true;
  let body = formData;
  let handler = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.querySelector(`[name = ${formName}] .signup-msg`).innerHTML = this.responseText;
    }
  }

  sendRequest(method, url, async, body, handler);
}

function logIn(formName) {
  let form = document.forms.namedItem(formName);
  let formData = new FormData(form);

  let method = "POST";
  let url = `./scripts/${formName}.php`;
  let async = true;
  let body = formData;
  let handler = function () {
    if (this.readyState == 4 && this.status == 200) {

      if (this.responseText == "Invalid Username and Password") {
        document.querySelector(`[name = ${formName}] .login-msg`).innerHTML = this.responseText;
      } else {
        document.querySelector(`[name = ${formName}] .login-msg`).innerHTML = `Hi, ${this.responseText}`;

        setTimeout(() => {
          stdLoginForm.classList.add('zoomOut');
          lecLoginForm.classList.add('zoomOut');

          stdLoginForm.classList.remove('zoomIn');
          lecLoginForm.classList.remove('zoomIn');

          popupCon[0].classList.add('fadeOut')
          popupCon[0].classList.remove('fadeIn');

          document.querySelector('.login-btn').innerHTML = `<h3>Hi, ${this.responseText}</h3>`;
          document.querySelector('.btn-container #lecturer').style.display = "none";
          document.querySelector('.btn-container #student').style.display = "none";
          document.querySelector('.btn-container #logout').style.display = "inline-block";

        }, 2000);

        setTimeout(() => {
          stdLoginForm.style.display = "none";
          lecLoginForm.style.display = "none";
          popupCon[0].style.display = "none";
        }, 2200);

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
  }

  sendRequest(method, url, async, body, handler);
}



function search() {
  let form = document.forms.namedItem("search");
  let formData = new FormData(form);

  let method = "POST";
  let url = `./scripts/search.php`;
  let async = true;
  let body = formData;
  let handler = function () {
    if (this.readyState == 4) {
      if (this.status == 200) {

      }
    }
  }

  sendRequest(method, url, async, body, handler);
}

function sendRequest(method, url, async, body = new FormData, handler = new Function) {
  let xhttp = new XMLHttpRequest;
  xhttp.open(method, url, async);
  xhttp.onreadystatechange = handler;
  xhttp.send(body);
}

function openSection(adminSection) {
  closeSections();
  let section = document.querySelector(".admin-"+adminSection+"-body");
  section.style.opacity = "1";
  section.style.transition = "opacity 1.0s ease";
  section.style.zIndex = "1";
}

function closeSections() {
  let sections = document.querySelectorAll(".section")
  for (let section of sections) {
    section.style.opacity = "0";
    section.style.transition = "opacity 0.125s ease";
    section.style.zIndex = "0";
  }
}