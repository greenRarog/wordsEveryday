/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/createDate.js ***!
  \************************************/
var rootDiv = document.querySelector('div .today');
var date = new Date();
var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
var daysWeek = ['Sunday', 'Monday', 'Thuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
var today = 'today: ' + date.getFullYear() + ' , ' + date.getDate() + ' ' + months[date.getMonth()];
rootDiv.textContent = today;
/******/ })()
;