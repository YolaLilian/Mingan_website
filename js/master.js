const icon = document.querySelector(".icon")
const menu = document.querySelector(".menu")

icon.addEventListener("click", function(event) {
  menu.classList.toggle("extended")
})
