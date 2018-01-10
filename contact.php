<?php

  require_once("scripts/config.php");

  if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $street = $_POST['street'];
    $direct = "thankyou.php";
    if($street === "") {
      $sendMail = submitMessage($name, $email, $phone, $message, $direct);
    }
  }

?>

<div class="bodyOne">
   <div class="greyBox" id="3">
     <h1 class="section js-section" id="conTitle">Contact</h1>
   </div>
<div class="Concontainer">
 <h1 class="contactTitle"> Let's talk!</h1>
  <h2 class="contactHeader">Fill out the information below and send me an email!</h2>

<form id="contact" action="contact.php" method="post">

<fieldset>
  <input placeholder="Name..." type="text" tabindex="1" name="name" required>
</fieldset>

<fieldset>
  <input placeholder="Email..." type="email" name="email" tabindex="2" required>
</fieldset>

<fieldset>
  <input placeholder="Phone (optional)..." type="tel" name="phone" tabindex="3">
</fieldset>

<fieldset>
  <textarea placeholder="Your Message..." tabindex="5" name="message" required></textarea>
</fieldset>

<fieldset>
  <input class="street" placeholder="Street" type="text" name="street">
</fieldset>

<fieldset>
  <button name="submit" value="Send" type="submit" id="contact-submit">SEND</button>
</fieldset>
</form>
</div>
</div>



 </body>
 </html>
