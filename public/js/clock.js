var clockDisplay = document.getElementById("clock");
var optionsClock = { hour12: false, timeZone: "Asia/Jakarta" };

function refreshTime() {
  var clockString = new Date().toLocaleTimeString("en-us",optionsClock);
  clockDisplay.innerHTML = clockString;
}

setInterval(refreshTime, 1000);
