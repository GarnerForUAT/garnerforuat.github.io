<?php
session_start();
//user must be logged in to access this page

//if user is not logged in, redirect to login page
if($_SESSION['username'] == ""){

header("Location: login.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Intranet</title>
    <!--Code to call css file--> <link rel="stylesheet" type = "text/css" href="secure.css">
    <!--Code to call javascript file--> <script src="javascript.js"> </script>
</head>
<body>
    <header>
        <?php include 'menu.php'; ?>
        <h1>M.E.D.U Tour - Secure Employee Page</h1>
    </header>

      <br>
   <!--Code for the background image that was rendered in the program, Blender--><style> 
   body {
      background-image: url(images/Login\ screen\ BG.png);
      height:155vh;
      width:105vh;
    
      background-size: cover;
      background-position: center;
   }
</style>
<br>
<p>Welcome to the employee page. Please enter your job position below to receive email instructions on how to proceed moving forward.</p>
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
<!--ALL code below is for the fourms on this page-->
<main>
<!--First Form-->
<div id="divMessage" class= "error"></div>
<form method="post" id="frmSecure" name="frmSecure" action="employeesecretpage.php"

  onsubmit="return validateFormSecurePage();">
  <label for="txtEmployeeName">Your employee position:</label>
  <input type="text" id="txtEmployeeName" name="txtEmployeeName"
  placeholder="Your position">

  <input type="submit" value="Submit Application" onclick="SecureForms()">
<br>
<br>
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
</body>
</html>