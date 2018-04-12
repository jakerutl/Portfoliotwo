(function(){

  var top = document.querySelector('.top');
  var sticky = document.querySelector('.Stickyhamburger');

  function scrollFunction() {
      if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 400) {
          document.querySelector(".top").style.display = "block";
      } else {
          document.querySelector(".top").style.display = "none";
      }
  }


  function moveTop(e){
    e.preventDefault();
    TweenLite.to(window, 0.5, {scrollTo: {y:0, autoKill:false}});
  };


function hideNav(){
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 10) {
      document.querySelector(".Stickyhamburger").style.display = "block";
  } else {
      document.querySelector(".Stickyhamburger").style.display = "none";
  }
}

top.addEventListener('click', moveTop, false);
window.addEventListener('scroll', scrollFunction,false);
window.addEventListener('scroll', hideNav,false);

  })();
