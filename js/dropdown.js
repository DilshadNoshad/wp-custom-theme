const buttonCheck = document.querySelector(".check-button");
const hamburger = document.querySelector(".menu-icon");
const submenu = document.querySelector(".sub-menu");
const menu = document.querySelector(".menu");

buttonCheck.addEventListener("click", () => {
  menu.classList.toggle("show-dropdown");
  if (submenu) submenu.classList.toggle("show-dropdown");
  hamburger.classList.toggle("animate-button");
});
