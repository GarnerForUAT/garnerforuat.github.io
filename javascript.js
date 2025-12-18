//check to see if the full name field is filled out
function validateForm(){
   //create shortcut to form
   let form = document.frmApp;

   let fullName = form.txtFullName.value.trim(); //remove loading 
   // and trailing spaces

  //shortcut to the message div
    let message = document.getElementById("divMessage");

  // check to see if full name is blank
   if(fullName.length == 0){
    message.textContent = "Please enter your full name" ;
      return false; //prevent form submission
   }

   return true;; //allow form submission

}


function validateForm2(){
   //create shortcut to form
   let form = document.frmApp2;

   let fullName2 = form.txtSecondQuestion.value.trim(); //remove loading 
   // and trailing spaces

  //shortcut to the message div
    let message = document.getElementById("divMessage2");

  // check to see if full name is blank
   if(fullName2.length == 0){
    message.textContent = "Invalid information. Please try again." ;
      return false; //prevent form submission
   }

   return true;; //allow form submission
}

function validateForm3(){
   //create shortcut to form
   let form = document.frmApp3;

   let fullName3 = form.txtThirdQuestion.value.trim(); //remove loading 
   // and trailing spaces

  //shortcut to the message div
    let message = document.getElementById("divMessage3");

  // check to see if full name is blank
   if(fullName3.length == 0){
    message.textContent = "Nothing entered. Please retry." ;
      return false; //prevent form submission
   }

   return true;; //allow form submission
}

function validateForm4(){
   //create shortcut to form
   let form = document.frmApp4;

   let fullName4 = form.txtFourthQuestion.value.trim(); //remove loading 
   // and trailing spaces

  //shortcut to the message div
    let message = document.getElementById("divMessage4");

  // check to see if full name is blank
   if(fullName4.length == 0){
    message.textContent = "Invalid entry." ;
      return false; //prevent form submission
   }

   return true;; //allow form submission
}

function validateForm5(){
   //create shortcut to form
   let form = document.frmApp5;

   let fullName5 = form.txtFinalQuestion.value.trim(); //remove loading 
   // and trailing spaces

  //shortcut to the message div
    let message = document.getElementById("divMessage5");

  // check to see if full name is blank
   if(fullName5.length == 0){
    message.textContent = "Enter submission." ;
      return false; //prevent form submission
   }

   return true;; //allow form submission
}

function Proceed()  {
  alert("Thank you for taking the survey! We hope you enjoyed your visit to our website. Take care!!!!");
location.replace('fetch data.php');
}

function validateFormSecurePage(){
  //create shortcut to form
   let form = document.frmSecure;

   let EmployeeName = form.txtEmployeeName.value.trim(); //remove loading 
   // and trailing spaces

  //shortcut to the message div
    let message = document.getElementById("divMessage");

  // check to see if full name is blank
   if(EmployeeName.length == 0){
    message.textContent = "Please enter your employee position" ;
      return false; //prevent form submission
   }
else {

  alert("Welcome back dear employee!!! Standby for your email instructions on how to proceed. For now, we will redirect you to the secret employee page.");
   return true;; //allow form submission
   
}
}

function checkDate()  {
  alert("The Mars Excavation begins on November 17, 2025.");
   
}



