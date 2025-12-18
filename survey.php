<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.E.D.U</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   <!--Code to javascript file--><script src = "/javascript.js"></script>
    <link rel="stylesheet" type="text/css" href="/survey.css">
<style> 
   
 label{
    
 }
 .hidden{
    display: none;
 }

 .charcount{
    font-size: 0.9em;
    color: white;
 }
 
   body {
      background-image: url(images/MARS\ TRUCK.png);
      height:145vh;
      width:145vh;
      background-size: cover;
      background-position: center;
   }
</style>
</head>

<header>
    <?php include "menu.php"; 
?>
  </header>
<body>
    <main>
        <h1>Survey Page</h1>
        <br>
<br>
<br>
        <h2>Welcome to the M.E.D.U survey page! Please fill out the survey below to help us improve our website and services!</h2>
        <br>
        <br>
<br>
<br>
<br>
<br>
<br>
    </main>
     <form id="frmSurvey" name="frmSurvey">
        <label for="selSat">Do you support the voyage to Mars?</label>
        <select id="selSat" name="selSat">
            <option value="">Select an option</option>
            <option value="5">Yes</option>
            <option value="4">No</option>
            <option value="3">Somewhat</option>
            <option value="2">Not Really</option>
            <option value="1">Not At All</option>
        </select>
        <br>

        <div id="divFollowUp" class="hidden">
           <label for="txtFollowUp">Any suggestions for the site you can offer?</label>
           <textarea id="txtFollowUp" name="txtFollowUp" rows="10" cols="30"></textarea>
           </div>
<br>
<br>
<br>
            <label for="TxtComments">General Comments</label>
           <textarea id="TxtComments" name="TxtComments" rows="10" cols="30"></textarea>
           <div id="divCharCount" class="char-count">0/250 Characters</div>

       <button onclick="Proceed()">Submit Survey</button>
     </form>

     <script>
        // wait until the DOM is fully loaded
        $(document).ready(function(){
            // add an event handler 
             $('#selSat').change(function(){
               
             if($(this).val() === "1" || $(this).val() === "2"){

                $('#divFollowUp').slideDown();

             }
             //
                else {
                    $('#divFollowUp').slideUp();
                }
        }); // selSat change function
        
        // Character count for comments textarea
        $('#TxtComments').on('input', function() {
            // arbitrary number of characters
            let maxChars = 250;
            // code below to
            let currentChars = $(this).val().length;

            $('#divCharCount').text(`${currentChars}/${maxChars} Characters`);

            //check if max character limit is exceeded
            if (currentChars > maxChars) {
                $('#divCharCount').css('color', 'red');
                
            } else {
                $('#divCharCount').css('color', 'gray');
            }


    }); // document ready function

});
    
     </script>
 

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