<?php

function rockPaperScissors($player1, $player2)
{
  if ($player1 == $player2) {
    echo "Draw";
  }
  elseif ($player1 == "rock" AND $player2 == "scissors") {
    echo "Player1 won";
  }
  elseif ($player1 == "scissors" AND $player2 == "rock") {
    echo "Player2 won";
  }
  elseif ($player1 == "rock" AND $player2 == "paper") {
    echo "Player2 won";
  }
  elseif ($player1 == "paper" AND $player2 == "rock") {
    echo "Player1 won";
  }
  elseif ($player1 == "paper" AND $player2 == "scissors") {
    echo "Player2 won";
  }
  elseif ($player1 == "scissors" AND $player2 == "paper") {
    echo "Player1 won";
  }
  else {
    echo "Incorrect input";
  }
}

echo rockPaperScissors ("scissors", "rock");
echo "<br>";
echo rockPaperScissors ("rock", "rock");
echo "<br>";
echo rockPaperScissors ("paper", "rock");
echo "<br>";
echo rockPaperScissors ("dupa", "nic");
echo "<br>";












 ?>
