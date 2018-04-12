<?php
  require 'nav.php';
 ?>

<div class="bodyOne">
<div class="Aboutbody">
  <h2 class="hidden">Main body</h2>
 <div class="pic">
   <img class="selfPic" src="images/low_poly_portrait2.png" alt="">
 </div>

  <div class="top">
    <div class="arrow"></div>
  </div>
  <div class="bio">
   <h2 class="title" id="about">About Me</h2>
   <p class="info"></p>
  </div>
 </div>

</div>

<div class="greyBox">
  <h1 id="portTitle">Portfolio</h1>
</div>

<div class="Gallery">
  <h2 class="hidden"> Gallery images</h2>
  <section class="buttons">
     <button class="image-holder" id="cat_1">After Effects</button>
     <button class="image-holder" id="cat_2">Photoshop</button>
     <button class="image-holder" id="cat_3">Illustrator</button>
     <button class="image-holder" id="cat_4">3D</button>
   </section>


 <ul class="subImagesContainer">

 </ul>

 <section class="lightbox">
   <i id="close" class="fa fa-times close-lightbox"></i>
   <video class="hidden" src=""  controls>
   </video>
   <img src="" alt="feature image" class="lightbox-img">
   <h1 class="img-title">placeholder</h1>
 <div class="desciption">
   <p class="img-desc">placeholder copy</p>
 </div>
     <div id="prev" class="glyphicon glyphicon-menu-left"></div>
     <div id="next" class="glyphicon glyphicon-menu-right"></div>
 </section>
</div>

 <div class="top">
   <div class="arrow"></div>
 </div>


 <?php
   require 'contact.php';
  ?>

<script src="js/database.js"></script>
<script src="js/openNav.js"></script>
<script src="js/scrollto.js"></script>
<script src="js/main.js"></script>
<script src="js/top.js"></script>
</body>
</html>
