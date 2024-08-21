
  // consts needed to store the data of the scores from the user and computer(ai).
  const selectionButtons = document.querySelectorAll('[data-selection]' )
  const finalColumn = document.querySelector('[data-final-column]')
  const computerScoreSpan = document.querySelector('[data-computer-score]')
  const yourScoreSpan = document.querySelector('[data-your-score]')
  const SELECTIONS = [
  
  
  //the name of the different choices that will be chosen by the game itself
    {
     name: 'rock',
     emoji: '✊',
     beats: 'scissors'
    },
    {
     name: 'paper',
     emoji: '✋',
     beats: 'rock'
    },
    {
     name: 'scissors',
     emoji: '✌️',
     beats: 'paper'
    }
  ]

// code needed for the selection button icons to work
selectionButtons.forEach(selectionButton => {
  selectionButton.addEventListener('click', e  => {
    const selectionName = selectionButton.dataset.selection
    const selection = SELECTIONS.find(selection => selection.name === selectionName)
    makeSelection(selection)
  })
})
// function for the selection results to display
function makeSelection(selection) {
  const computerSelection = randomSelection()
  const yourWinner = Winner(selection, computerSelection)
  const computerWinner = Winner(computerSelection, selection)
  
// selection results for both the user and computer winner selections
  addSelectionResults(computerSelection, computerWinner)
  addSelectionResults(selection, yourWinner) 

  if (yourWinner)incrementScore(yourScoreSpan, alert("winner!!!") )
  if (computerWinner)incrementScore(computerScoreSpan, alert("AI is the winner!")) 
  console.log(computerSelection)
 
  if(yourWinner > 1 || yourWinner < 1)
    {
        document.getElementById("computerWinner"), alert("Game is over, AI has won the game. Try it again!!!"); //message that displays if incorrect characters was typed.
    }
    
   else if(yourWinner <= 1 )
    {
    document.getElementById("yourWinner"), alert("Round over, you won!!!");// Alert message that displays if all registration forms was accepted.
    }

    else if(yourWinner > 0|| computerWinner > 0 )
    {
    document.getElementById("yourWinner"), document.getElementById("computerWinner"), alert("Draw!!!");// Alert message that displays if all registration forms was accepted.
    }
}
//function that will increase the score of the winner, either the user or the AI by one point.
function incrementScore(scoreSpan) {
  scoreSpan.innerText = parseInt(scoreSpan.innerText) + 1
}
//function to add the selection results on screen
function addSelectionResults(selection, winner){
  const div = document.createElement('div')
  div.classList.add('result-selection')
  if (winner) div.classList.add('winner') 
  finalColumn.after(div)
  

}


function Winner(selection, opponentSelection) {
  return selection.beats === opponentSelection.name
}

function randomSelection() {
  const randomIndex = Math.floor(Math.random() * SELECTIONS.length)
  return SELECTIONS[randomIndex]
}