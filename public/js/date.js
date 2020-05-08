var dateDisplay = document.getElementById("date");
var optionsDate = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', timeZone: "Asia/Jakarta" };

function refreshTime() {
  var dateString = new Date().toLocaleString("en-us",optionsDate);
  var formattedString = dateString.replace(", ", " - ");
  dateDisplay.innerHTML = formattedString;
}

setInterval(refreshTime, 1000);
