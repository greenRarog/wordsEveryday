let rootDiv = document.querySelector('div .today');

let date = new Date();
let months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
let daysWeek = ['Sunday', 'Monday', 'Thuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

var today = 'today: ' + date.getFullYear() + ' , ' + date.getDate() + ' ' + months[date.getMonth()];
rootDiv.textContent = today;