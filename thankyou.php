<?php

$name = $_GET['name'];

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
     <title>Jake Rutledge | Thank You!</title>
   <link href='http://fonts.googleapis.com/css?family=Mystery+Quest' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/lightbox.css" type="text/css">
   <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon"/>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js" charset="utf-8"></script>
 </head>
<body class="thanksBody">

<div class="thanksText">
  <h2 class="hidden">Thank You Page</h2>
  <p>Thank's a lot</p>
  <p class="thxEcho"><?php echo $name; ?></p>
  <p>for taking the time to look at my portfolio and sending me an email! I'll try my best to get back to you within 24 hours!</p>
  <br>
<a href="index.php">RETURN</a>
</div>

</body>
</html>
