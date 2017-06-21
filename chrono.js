var seconds = 0;
var el = document.getElementById('chrono');

function incrementSeconds() {
    seconds += 1;
    el.innerText = "Vous êtes sur la page depuis " + seconds + " secondes.";
}

var cancel = setInterval(incrementSeconds, 1000);



function openRs(evt, Facebook){
  var i, tabcontent, tablinks;

  tabcontent=
document.getElementByClassName ("tabcontent");
  for (i=0; i < tabcontent.length; i++){
    tabcontent [i].style.display = "none";
  }
  tablinks =
document.getElementByClassName("tablinks");
  for (i=0; i<tablinks.length; i++){
    tablinks [i].className.replace("active", "");
  }
  document.getElementById(Facebook).style.display="block";
  evt.currentTarget.className += "active";
}
