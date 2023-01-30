/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/addRow.js ***!
  \********************************/
var button = document.querySelector('.js');
var table = document.querySelector('table');
button.addEventListener('click', function () {
  var tr = document.createElement('tr');
  var counter = document.querySelector('.counter');
  var inputCounter = document.createElement('input');
  console.log(counter.value);
  inputCounter.value = ++counter.value;
  inputCounter.setAttribute('name', 'counter');
  inputCounter.setAttribute('hidden', 'hidden');
  inputCounter.classList.add('counter');
  counter.classList.remove('counter');
  tr.appendChild(inputCounter);
  let name_counter = 'word_' + inputCounter.value;
  var tdName = document.createElement('td');
  var inputName = document.createElement('input');
  let name_counter_name = name_counter + '[name]';
  inputName.setAttribute('name', name_counter_name);
  tdName.appendChild(inputName);
  tr.appendChild(tdName);
  var tdTranscription = document.createElement('td');
  var inputTranscription = document.createElement('input');
  inputName.setAttribute('name', 'transcription[name]');
  tdTranscription.appendChild(inputTranscription);
  tr.appendChild(tdTranscription);
  var tdMeaning = document.createElement('td');
  var inputMeaning = document.createElement('input');
  inputName.setAttribute('name', 'meaning[name]');
  tdMeaning.appendChild(inputMeaning);
  tr.appendChild(tdMeaning);
  table.appendChild(tr);
});
/******/ })()
;