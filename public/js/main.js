/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
// if (localStorage.theme === 'dark') document.documentElement.classList.add('dark')
// else document.documentElement.classList.remove('dark')
//
// localStorage.theme = 'light'
//
// localStorage.theme = 'dark'
var nav = document.getElementById('main_nav');
document.getElementById('nav_button').addEventListener('click', function () {
  nav.classList.toggle('flex');
  nav.classList.toggle('hidden');
  document.getElementById('menu_icon').classList.toggle('hidden');
  document.getElementById('close_icon').classList.toggle('hidden');
});
var acButtons = document.querySelectorAll('.accordion-button');
acButtons.forEach(function (btn) {
  btn.addEventListener('click', function (event) {
    event.target.childNodes[1].classList.toggle('rotate-180');
    document.getElementById(event.target.getAttribute('data-for')).classList.toggle('hidden');
  });
});
/******/ })()
;