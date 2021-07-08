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