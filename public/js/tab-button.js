var header = document.getElementById("tab-button");
var btns = header.getElementsByClassName("nav-item");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("act");
  current[0].className = current[0].className.replace(" act", "");
  this.className += " act";
  });
}
