var arrHoles = document.querySelectorAll(".hole");
// set a pointer to the scoreboard
var scoreBoard = document.getElementById("spnScore");

// set a score checker
var Score = 0;
// track of last hole
var lastHole = -1;

// track if game ends
var timeUp = false;

  function  startGame(){

    alert('Game has begun. Good luck!!') //Alert message signifying the game's beginning.
    scoreBoard.innerHTML = 0;
    // reset the score variable
    score = 0;
    // reset the timer.
    timeUp = false;
    // call the function that changes the hole color
    popUp();
    // set the game to run for a certain amount of time
    setTimeout(() => timeUp = true, 30000); // 30,000 ms =  30 seconds
  }

  //function needed for the mole to spawn
  function popUp(){
    var time = randomTime(300, 1000);
    // get a random hole
    var hole = randomHole(arrHoles);
    // add the up class to the hole to change the color to red
    hole.classList.add("up");
    // after a random amount of time remove the red from the hole
    setTimeout(() => {
        hole.classList.remove("up");
        // if the time is not up, call the function again
        if (!timeUp){
            popUp();
            
        }
    }, time);
}


  //function for the random time
  function randomTime (min, max){
   // get random number
   return Math.round(Math.random() * (max-min) + min);
  }

//function for randomly choosing holes
  function randomHole(holes){

    // variable needed to select a random hole of 0 and whichever length
    var counter = Math.floor(Math.random() * holes.length);
    //statement to ensure a different hole is chosen than the one before
    if(counter == lastHole){
      // return call for calling the function again for a different value
      return randomHole(holes);
    }
    // needed to track the current hole chosen
    lastHole = counter;

     return  arrHoles[counter];
  }

  arrHoles.forEach(hole => hole.addEventListener("click", whack));

// set up the function that handles when the hole is clicked
function whack(event){
    // check if this is a trusted event
    if (!event.isTrusted) return;

    // check if the hole that was clicked was red
    if (this.classList.contains("up")){
        // add 1 to the score
        score++;
        // remove the red background
        this.classList.remove("up");
        // show the new score
        scoreBoard.innerHTML = score;
    }
}