<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Name of Website Page-->  <title>Assignment 1.1</title>
<!--Code to call css file--> <link rel="stylesheet" type = "text/css" href="/fourm_style.css">

</head>
<body>
    <!--All code in the nav tags below are for the navigation bar to be displayed-->
    <nav>
     <ul>
    
<?php include 'menu.php'; ?>
     </ul>
    </nav>
    
     <br>
     <br>
  <!--Header 1's text--> <h1>FORUMS</h1>
   <!--Code for the background image that was rendered in the program, Blender--><style> 
   body {
      background-image: url(images/Corridor\ scene.png);
      height:252vh;
      width:79Svh;
      background-size: cover;
      background-position: center;
   }
</style>
 <br>
    <br>
<script src="javascript.js"> </script><!--code to call JS.File-->

<!--Paragraph code below-->
<p>
Welcome to the Pilot forums! Please fill out the application below to apply to become a part of our new generation of pilots.
</p>
<br>
<br>
<br>
<br>
<br><br>
<br><br>
<br>
<!--ALL code below is for the fourms on this page-->
<main>
<!--First Form-->
<div id="divMessage" class= "error"></div>
<form method="post" id="frmApp" name="frmApp" action="/Pilot Gathering.php"

  onsubmit="return validateForm();">
  <label for="txtFullName">Full Name:</label>
  <input type="text" id="txtFullName" name="txtFullName"
  placeholder="Your Full Name" required>
<br>
<br>
<br>
<br>
<!--Second Form-->
 <div id="divMessage2" class= "error"></div>
<form method="post" id="frmApp2" name="frmApp2" action="/Pilot Gathering.php"

  onsubmit="return validateForm2();">
  <label for="txtSecondQuestion">Current age:</label>
  <input type="number" id="txtSecondQuestion" name="txtSecondQuestion"
  placeholder="Submit your age" required> 
<br>
<br>
<br>
<br>
<!--Third Form-->
 
 <div id="divMessage3" class= "error"></div>
<form method="post" id="frmApp3" name="frmApp3" action="/Pilot Gathering.php"

  onsubmit="return validateForm3();">
  <label for="txtThirdQuestion">Place of graduation :</label>
  <input type="text" id="txtThirdQuestion" name="txtThirdQuestion"
  placeholder="Institution Name" required>
<br>
<br>
<br>
<br>
 <!--Fourth Form-->
    <div id="divMessage4" class= "error"></div>
<form method="post" id="frmApp4" name="frmApp4" action="/Pilot Gathering.php"

  onsubmit="return validateForm4();">
  <label for="txtFourthQuestion">How you heard about us:</label>
  <input type="text" id="txtFourthQuestion" name="txtFourthQuestion"
  placeholder="Insert all sources here" required>
<br>
<br>
<br>
<br>
<!--Final Form-->
  <div id="divMessage5" class= "error"></div>
<form method="post" id="frmApp5" name="frmApp5" action="/Pilot Gathering.php"

  onsubmit="return validateForm5();">
  <label for="txtFinalQuestion">Your dream goals as a pilot with us:</label>
  <input type="text" id="txtFinalQuestion" name="txtFinalQuestion"
  placeholder="Specify your goals here" required>

  <input type="submit" value="Submit Application" onsubmit="Proceed()"> 
</form>
</main>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!--ALL code below is for the footer at the bottom of the html-->
<footer class ="footer">
  <div class="container">
    <div class="row">
       <div class="footer-col">
 <!--Code for the text above the email link--> <h3>Email</h3>
       </div>
        <div>
              <i class="fa fa-enevlope"></i>
    <!--Code to Link to my email-->          <p><a href="mailto:CGARNER84039@uat.edu">CGARNER84039@uat.edu</a></p>
        </div>
        <div class = "footer-col">
  <!--copyright text-->        <h4>@2025.Caleb Garner. All rights reserved.</h4>
        </div>
  </div>
</footer>
<php?
echo "Hey World!";
?>
</body>
</html>