// Select DOM elements
const close = document.querySelector(".close");
const open = document.querySelector(".ham");
const menu = document.querySelector(".menu");

// Add event listener for closing the menu
close.addEventListener("click", () => {
  menu.style.visibility = "hidden";
});

// Add event listener for opening the menu
open.addEventListener("click", () => {
  menu.style.visibility = "visible";
});