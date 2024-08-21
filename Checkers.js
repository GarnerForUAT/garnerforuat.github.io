
    //build 2d array to manage layout of the checkerboard piece.
    var arrayPieces = [
   [null, 'w', null, 'w', null, 'w', null, 'w'],
   ['w', null, 'w', null, 'w', null, 'w', null],
   [null, 'w', null, 'w', null, 'w', null, 'w'],
   [null, null, null,  null, null, null, null,  null,],
   [null, null, null,  null, null, null, null,  null,],
   ['b', null, 'b', null, 'b', null, 'b', null],
   [null, 'b', null, 'b', null, 'b', null, 'b'],
   ['b', null, 'b', null, 'b', null, 'b', null],
    ];

    // function for creating checkers board itself //
    function CreateCheckersBoard(checkersBoard) {
        //set up checkers board with 8 rows and 8 columns 
        // using stored loops
        // this loop will build rows
        for(var i = 0; i < 8; i++){
            // this loop will build columns
            for( var column = 0; column < 8; column++){
                //build a square div
                var checkersSquare = document.createElement("div");

                // assign css class to the div/square
                checkersSquare.classList.add("checkersSquare");
                //add an id to know where to move pieces
                checkersSquare.setAttribute("id", "div" + i + column);


                //check to see if square is even or odd
              
                // %mod/modulus - in a division problem, mod  is the remainder
                if ((i+column) % 2 == 1){
                    //this is an odd number
                    // change the background color
                    checkersSquare.classList.add("checkersAlt");
                          // add the event listener to support moving piece
                checkersSquare.addEventListener("click", movePiece);
                }

          
              
                // add the piece to the checkers board
                checkersBoard.appendChild(checkersSquare);


                // if a piece belongs to this square, add a piece
                // if the value of the 2d array is w or b
                if (arrayPieces [i][column]){
                    // build piece
                    createPiece("piece" + i + column, "checkerPiece-" + arrayPieces[i][column], checkersSquare);
                }
            }

        }

    }
   //function needed for piece creation
    function createPiece(pieceId, pieceClass, theSquare){
       //create a new div
       var newPiece = document.createElement("div");
       // set the id, so we can remove the piece from DOM if needed
       newPiece.setAttribute("id", pieceId);
       //apply standard class to create rounded checkers piece
       newPiece.classList.add("checkerPiece");
       //apply the custom css
       newPiece.classList.add(pieceClass);
       //add a click event handler to handle when piece is clicked on
       newPiece.addEventListener("click", savePieceId);

       //add piece to square
       theSquare.appendChild(newPiece);
    }




  // function for saving piece Id to secret span
  function savePieceId(event){
    console.log("savePieceId function called");

    var selectedPieceId = event.target.id;
//remove the word piece from the id
    selectedPieceId = selectedPieceId.replace("piece", "")

    //store id number in secret span

    spnSelectedPiece.dataset.value = selectedPieceId;

    console.log("selectedPieceId=" + selectedPieceId);


  }

  //function for moving pieces -  delete piece from current square

  function movePiece (event) {
  console.log("movePiece Function was called");

  // variable for holding clicked square
  var newSquareId = event.target.id;

  //remove prefix of id
  newSquareId = newSquareId.replace("div", "").replace("piece", "");

  newSquareId = newSquareId.replace("piece", "");
  newSquareId = newSquareId.replace("div", "");


  // variable for holding id store of secret span
  var oldPieceId = spnSelectedPiece.dataset.value;


  // loop for making sure both old piece and new piece id of square are different
  if((newSquareId != oldPieceId) && oldPieceId != ''){
    // create a pointer to the old square
    var oldSquareDiv = document.getElementById("div" + oldPieceId);
    // create pointer to the old piece
    var oldPiece = document.getElementById("piece" + oldPieceId);
    // before removing piece, get piece color
    var oldPieceColorClass = oldPiece.classList[1];

    //remove the piece from board
    oldSquareDiv.removeChild(oldPiece);
  
    //for creating pointer to new square
    var newSquareDiv = document.getElementById("div" + newSquareId);


    //creation of new piece
    createPiece("piece" + newSquareId, oldPieceColorClass, newSquareDiv);

    //clear secret span 
    spnSelectedPiece.dataset.value = "";


  }
  }
    
    CreateCheckersBoard(divCheckersBoard);
