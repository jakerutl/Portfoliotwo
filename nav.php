<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
    <title>Jake Rutledge | Portfolio</title>
  <link href='http://fonts.googleapis.com/css?family=Mystery+Quest' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/lightbox.css" type="text/css">
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js" charset="utf-8"></script>
</head>

<body id="navB">

  <div class="preloader">
    <h2 class="hidden">Header video</h2>
   <video class="preloader" autoplay muted>
       <source src="videos/animation.mp4" type="video/mp4">
   </video>
  </div>

<nav class="navCon">
  <div class="navigation">
    <h2 class="hidden">Navigation</h2>
    <ul>
      <li><a class="home" href="#">HOME</a></li>
      <li><a class="about" href="#1">ABOUT ME</a></li>
      <li><a class="port" href="#2">PORTFOLIO</a></li>
      <li><a class="contact" href="#3">CONTACT</a></li>
      <li><a href="resume.pdf">RESUME</a></li>
      <img class="headerLogo" src="images/new_logo4.png" alt="logo">
    </ul>
  </div>
</nav>


<div id="mySidenav" class="sidenav">
  <h2 class="hidden">Side Nav</h2>
  <div class="logo">
    <img src="images/jr.png" alt="small logo">
  </div>
  <ul>
    <li><a href="#" class="closebtn" onclick="closeNav()">&times;</a></li>
    <li><a href="index.php">HOME</a></li>
    <li><a onclick="closeNav()" href="#1">ABOUT ME</a></li>
    <li><a class="port2" onclick="closeNav()" href="#2">PORTFOLIO</a></li>
    <li><a href="resume.pdf">RESUME</a></li>
    <li><a class="contact2" onclick="closeNav()"href="#3">CONTACT</a></li>
  </ul>

 <div class="social">
   <h3 class="hidden">Social media buttons</h3>
  <a href="https://twitter.com/Jaker145"><img src="images/t_logo.png" alt="twitter logo"></a>
  <a href="https://www.facebook.com/jake.rutledge.10"><img id="fb" src="images/fb_logo.png" alt="facebook logo"></a>
  <a href="https://www.instagram.com/jaker145/?hl=en"><img src="images/in_logo.png" alt="instagram logo"></a>
 </div>
</div>

<div class="Stickyhamburger">
<div onclick="openNav()">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
</div>

<div class="hamburger">
<div onclick="openNav()">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
</div>



<script>
function openNav() {
    document.querySelector("#mySidenav").style.width = "250px";
}

function closeNav() {
    document.querySelector("#mySidenav").style.width = "0";
}
</script>
