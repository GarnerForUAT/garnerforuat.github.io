<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.E.D.U Vehicle Page</title>
    <!--Code to call css file--> <link rel="stylesheet" type = "text/css" href="JQuery.css">
</head>

<header>
    <?php include "menu.php"; 
?>
  </header>
  <br>
<br>
<br>
<br>
<body>
    <h1>M.E.D.U Vehicle List</h1>
    <br>
    <br>
<br>
<br>
<br>
<br>
<br>
    <h2>Hello and welcome to vehicle list page! This page lists some of the key vehicles used by the M.E.D.U foundation! Below is a overview of each vehicle, its speed, and year of it development!</h2>
    <br>
<br>
<br>
<br>
<br>
    <div id="divdata"></div>

    <script>

        // function to fetch data from data.php and display it
        async function fetchData() {
            try{
                //for setting up response variable
                let response = await fetch('data.php');


                // for problems with fetching data
                if(!response.ok){
                    // throw error message
                    throw new Error(`Error: ${reponse.status}`);
                }
                
                // get data if everything is ok
                let data = await response.json();

                //display data by sending it to displayData function
                displayData(data);
            }
            catch(error){
            }

        }
        
        //display data on page
        function displayData(data){
            //  build a string of HTML characters
            let html = '';

            // loop through data
            for (let i=0; i <data.length; i++){
                html += `<p>${data[i].name}: ${data[i].value}</p>`;
            }
            
           // add string of formatted HTML to divdata
           document.getElementById('divdata').innerHTML = html;


        }
        // fetch data - after DOM has loaded
        window.addEventListener('DOMContentLoaded', fetchData);
    </script>
<br>
<br>
<br>
<br>
 <!--Code for the background image that was rendered in the program, Blender--><style> 
   body {
      background-image: url(images/hanger\ for\ ship\ page.png);
      height:205vh;
      width:135vh;
    
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
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
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