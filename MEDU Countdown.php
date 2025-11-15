<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Code to call css file--> <link rel="stylesheet" type = "text/css" href="/Mars Countdown.css">
    <!--Code to call javascript file--> <script src="javascript.js"> </script>
</head>
<body>
    <header>
    <?php include "menu.php"; 
?>
  </header>

<h1>Countdown to Mars</h1>
<br>
<br>

   <!--Code for the background image that was rendered in the program, Blender--><style> 
   body {
      background-image: url(images/forum\ image\ page.png);
      height:156vh;
      width:79Svh;
      background-size: cover;
      background-position: center;
   }
</style>

<br>
<main>
    <div id="divCountdown">Calculating time...</div>
    <div id="divCountdownMessage"></div>
</main>

<?php
//php code to set the launch date and time
     $launchDateTime = strtotime(datetime: "November 17, 2025 10:34:45");

     //format data to be used in javascript
     $jsDateTime = date(format: "F d, Y H:i:s", timestamp: $launchDateTime);   
?>


<script>
  let countdownTimer = new Date("<?php echo "$jsDateTime"; ?>").getTime();
   //for setInterval to repeat code at the specified time interval and also return the interval ID
   let IntervalId = setInterval(function(){

    let currentTime = new Date().getTime();
    
  
   // 
   const MS_IN_A_SECOND = 1000;
// number of miliseconds
const MS_IN_A_MINUTE = MS_IN_A_SECOND * 60;
//number milliseconds in hours
const MS_IN_A_HOUR  =  MS_IN_A_MINUTE * 60;

const MS_IN_A_DAY = MS_IN_A_HOUR * 24;

//get difference in milliseconds between current time and launch
let timeDiff = countdownTimer - currentTime;

// countdown caculations
//find how many days are within countdown
let days = Math.floor(timeDiff / MS_IN_A_DAY);
// discover how many hours are within countdown
let hours= Math.floor((timeDiff % MS_IN_A_DAY) / MS_IN_A_HOUR);
//discover how many minutes are within countdown
let minutes = Math.floor((timeDiff % MS_IN_A_HOUR) / MS_IN_A_MINUTE);
//discover how many seconds are within countdown
let seconds = Math.floor((timeDiff % MS_IN_A_MINUTE) / MS_IN_A_SECOND);



//shortcut to the div in html
let divCountdown = document.getElementById("divCountdown");

//display time left before launch
divCountdown.textContent = days + " Days : " + hours + " Hours : " + minutes + " Minutes : " + seconds + " Seconds : ";
 
// shortcut to the div in html for message
let divCountdownMessage = document.getElementById("divCountdownMessage");


//if/else to display message when countdown is complete
if (timeDiff < 0){
  clearInterval(IntervalId); // stop the interval
  // message for missed launch
  divCountdown.textContent = "The M.E.D.U Mars excavation has already began! Join us next time!";
  alert("We're sorry, but this year's Mars Excavation has already begun! Join us next year as we make another voyage!!.");
}
else if (timeDiff < 3){
  divCountdownMessage.textContent = "Time left until M.E.D.U launch!";
}
else{
  divCountdownMessage.textContent = "Mars exvaction will begin VERY soon!";
}
     }, 1000); // 1000 time in milliseconds (1 second)
</script>

<br>
<br>
<br>
<br>
<br>
<br>
  <button onclick="checkDate()">Check on Date of Launch</button>  
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