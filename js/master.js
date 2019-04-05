const icon = document.querySelector(".icon");
const menu = document.querySelector(".menu");
const dropdown = document.querySelector(".dropdown");
const service = document.querySelector(".serviceDropdown");

icon.addEventListener("click", function() {
  menu.classList.toggle("hidden");
});

dropdown.addEventListener("click", function() {
  service.classList.toggle("hidden");
});