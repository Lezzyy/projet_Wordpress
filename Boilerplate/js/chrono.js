var seconds = 0;
var el = document.getElementById('chrono');

function incrementSeconds() {
    seconds += 1;
    el.innerText = "Vous êtes sur la page depuis " + seconds + " secondes.";
}

var cancel = setInterval(incrementSeconds, 1000);
