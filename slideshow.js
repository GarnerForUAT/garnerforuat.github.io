document.addEventListener("DOMContentLoaded", initLinks);
// below is the code for the variables of all four image arrays that will be called during the slideshow
  var arrImages = ["./images/Moth Creature Test Design.png", "./images/Image of Angel Lady.png", "./images/Alien creature.png", 
  "./images/Young male character.png"];

  //code to track displayed image.
  var currentDisplayedImage = 0;
  
//code below of function initLinks is needed for the click event of the buttons to work
  function initLinks(){
document.getElementById("aPrevious").addEventListener("click", processPrevious);

document.getElementById("aNextImage").addEventListener("click", processNext);
}

function processPrevious(event){

  event.preventDefault();
// code for the previous navigator button to go back by one image only.
  currentDisplayedImage = currentDisplayedImage - 1;

//code for the very last image of the slideshow to be displayed, upon previous while on the first image.
if (currentDisplayedImage == -1) {
  //code for the last image of array.
    currentDisplayedImage = arrImages.length -1;
}

  //code to show the next image of slideshow
  document.getElementById("imgSlideshow").src =arrImages[currentDisplayedImage];


}


//function for the next link click to work
function processNext(event){
 //stops action of the default link
  event.preventDefault();

  // code to slide to next image
currentDisplayedImage = currentDisplayedImage + 1;

// code for the slideshow upon reaching the final image, to reloop back to the very first one
if (currentDisplayedImage == arrImages.length){
  currentDisplayedImage = 0;

}
//code needed to display images of the array
document.getElementById("imgSlideshow").src =arrImages[currentDisplayedImage];

}

