(function(){

var logo = document.querySelector(".homeLogo");
var port = document.querySelector("#port");

function moveLogo(){
TweenMax.from(logo, 1.5, {opacity:0, y: -100, delay:1});

}


window.addEventListener('load', moveLogo, false);

  })();
