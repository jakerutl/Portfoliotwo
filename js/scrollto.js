

var home = document.querySelector(".home");
var about = document.querySelector(".about");
var port = document.querySelector(".port");
var contact = document.querySelector(".contact");
var home2 = document.querySelector(".home2");
var about2 = document.querySelector(".about2");
var port2 = document.querySelector(".port2");
var contact2 = document.querySelector(".contact2");
var down = document.querySelector(".Down");

down.onclick = function(e){
  e.preventDefault();
  TweenLite.to(window, 0.5, {scrollTo: {y:".navigation", autoKill:false}});
};

port.onclick = function(e) {
  e.preventDefault();
  TweenLite.to(window, 0.5, {scrollTo: {y:"#portTitle", autoKill:false}});
};

contact.onclick = function(e) {
  e.preventDefault();
  TweenLite.to(window, 0.5, {scrollTo: {y:"#conTitle", autoKill:false}});
};

about.onclick = function(e) {
  e.preventDefault();
  TweenLite.to(window, 0.5, {scrollTo: {y:"#about", autoKill:false}});
};

home.onclick = function(e) {
  e.preventDefault();
  TweenLite.to(window, 0.5, {scrollTo: {y:"#preloader", autoKill:false}});
};

port2.onclick = function(e) {
  e.preventDefault();
  TweenLite.to(window, 0.5, {scrollTo: {y:"#portTitle", offsetY:50, autoKill:false}});
};

contact2.onclick = function(e) {
  e.preventDefault();
  TweenLite.to(window, 0.5, {scrollTo: {y:"#conTitle", offsetY:50, autoKill:false}});
};

about2.onclick = function(e) {
  e.preventDefault();
  TweenLite.to(window, 0.5, {scrollTo: {y:"#about", offsetY:-400, autoKill:false}});
};

home2.onclick = function(e) {
  e.preventDefault();
  TweenLite.to(window, 0.5, {scrollTo: {y:"#about", offsetY:50, autoKill:false}});
};
