<?php

$playerOneScore = 0;
$playerTwoScore = 0;

// Start the game
echo "Game starting!\n";

// Players take turns rolling a 6-sided die
for ($i = 0; $i < 10; $i++) {
  $playerOneRoll = rand(1, 6);
  $playerTwoRoll = rand(1, 6);
  echo "\nPlayer One rolled a $playerOneRoll\n";
  echo "Player Two rolled a $playerTwoRoll\n";
  if ($playerOneRoll > $playerTwoRoll) {
    $playerOneScore++;
    echo "Player One scores a point!\n";
  } elseif ($playerTwoRoll > $playerOneRoll) {
    $playerTwoScore++;
    echo "Player Two scores a point!\n";
  } else {
    echo "It's a tie! Nobody scores a point.\n";
  }
}

// Determine the winner
if ($playerOneScore > $playerTwoScore) {
  echo "\nPlayer One wins with a score of $playerOneScore to $playerTwoScore!\n";
} elseif ($playerTwoScore > $playerOneScore) {
  echo "\nPlayer Two wins with a score of $playerTwoScore to $playerOneScore!\n";
} else {
  echo "\nIt's a tie! Both players have a score of $playerOneScore.\n";
}

?>
<HTML>
  <head>
    <title>Dice Game</title>
  </head>
  <body>
    <h1>Dice Game</h1>
    <p>
      Player One Score: <?php echo $playerOneScore; ?><br />
      Player Two Score: <?php echo $playerTwoScore; ?>
    </p>
  </body>
</html>
