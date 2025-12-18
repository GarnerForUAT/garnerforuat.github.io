<?php
// this php code checks the login credentials and displays appropriate messages

//session start needed for login code to work
session_start();
//
//
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once 'db_connection.php';

    // varibles to hold user name
    $username = $_POST['txtUserName'];

    $password = $_POST['pwdUser'];



    // query to check if user exists with given username and password
    $sql = "SELECT Firstname, userID FROM tbluser WHERE Username = '$username' AND Password =
    '$password'";


  // query database for a match of username and password 
  $result = mysqli_query($db_conn, $sql);

// for converting the result into an array
 $arrUser = mysqli_fetch_array($result);

 if (isset($arrUser)){
  $message = "Login succeed";
//$message = "Login succeeded.

$_SESSION['username'] = $username;



//add a redirection to forum page upon successful login
  header("Location: secure.php");

 }
 //if no match found, display login failed message
else{

  $message = "Login faaaaaaaaaaaaaaaailed. Please try again.";

  $_SESSION['username'] = "";
}
  
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.E.D.U Tourism</title>
<!--Code to call css file--> <link rel="stylesheet" type = "text/css" href="style.css">
    
</head> 
<body><!--Code below to call menu.php file-->
  <header>
    <?php include "menu.php"; 
?>
  </header>
    <!--All code in the nav tags below are for the navigation bar to be displayed-->
    
      <!--Header 1's text--> <h1>The M.E.D.U. Foundation - User Login Page</h1>
  
     <br>

     <p>Welcome to the M.E.D.U(or short for Mars Exploration Department Union) login page!!! We're glad to see you on this fine day! </p>
    <br>
    <p>Please enter your employee credentials below to access our employee page.</p>
    <br>
    <!--Display message indicating login status-->
    <?php echo $message; ?>
 <!--Code for the background image that was rendered in the program, Blender--><style> 
   body {
      background-image: url(/images/computer\ room.png);
      height:150vh;
      width:145vh;
    
      background-size: cover;
      background-position: center;
   }
</style>
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
<main>

<form name="frmLogin" id="frmLogin" method="post" action="login.php">
    <!--user name input-->
    <div>
        <label for="txtUserName">Username:</label>
        <input type="text" name="txtUserName" id="txtUserName">   
    </div>
    <!--password input-->
     <div>
        <label for="pwdUser">Password:</label>
        <input type="password" name="pwdUser" id="pwdUser">   
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <button type="submit">Login</button>
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